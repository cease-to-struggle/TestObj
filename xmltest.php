<?php
$not=" <ResponseSummary>
            <Code>OK</Code>
            <Description>Successful operation</Description>
            <TransactionId>151454</TransactionId>
            <MasterPrefix>0051</MasterPrefix>
            <MasterNumber>2678</MasterNumber>
         </ResponseSummary>";

$xml=new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>'.$not,null,false);
var_dump($xml);echo '<hr/>';
echo json_encode($xml);

['1234'=>[
	'masterNumber'=>'0051-2678',
	'masterResponse'=>'{"Code":"OK","Description":"Successful operation","TransactionId":"151454","MasterPrefix":"0051","MasterNumber":"2678"}'
	],
	
]
?>