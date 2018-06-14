<?php 
$not='';

$xml=new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>'.$not,null,false);
$xml = json_decode(json_encode($xml),true);
$result=[];
$result['consigneePhone']= $xml['Consigneetelephone'];
$result['consigneeDistrict']= $xml['Consigneecity'];
$result['consigneeProvince']= $xml['Consigneestate'];
$result['consigneeContactNameLocale']= $xml['Consigneename'];
$result['consigneeAddressLocale']= $xml['Consigneeaddress'];
$result['consigneePostalCode']= $xml['Consigneezipcode'];

var_dump($result);echo '<hr/>';

