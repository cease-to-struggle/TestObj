<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use DB;
use stdClass;

class FreshCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:fresh {--database= : The database connection to use.}
                {--force : Force the operation to run when in production.}
                {--path : The path of migrations files to be executed.}
                {--seed : Indicates if the seed task should be re-run.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop all database tables and re-run all migrations';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $database = $this->input->getOption('database');

        $path = $this->input->getOption('path');

        $this->info('Dropping all tables...');

        if ($database !== null) {
            DB::setDefaultConnection($database);
        }

        $this->dropAllTables();

        $this->info('Running migrations...');

        $this->call('migrate', [
            '--database' => $database,
            '--path' => $path,
            '--force' => true,
        ]);

        if ($this->option('seed')) {
            $this->info('Running seeders...');
            $this->call('db:seed');
        }

        $this->comment('All done!');


    }


    private function dropAllTables()
    {
        Schema::disableForeignKeyConstraints();

        collect(DB::select("SHOW FULL TABLES WHERE Table_Type = 'BASE TABLE'"))
            ->map(function (stdClass $tableProperties) {
                return get_object_vars($tableProperties)[key($tableProperties)];
            })
            ->each(function (string $tableName) {
                Schema::drop($tableName);
            });

        Schema::enableForeignKeyConstraints();
    }

}
