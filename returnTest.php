<?php 
function test()
{
	$not="<ResponseSkybill>
	<Code>Ok</Code>
	<Description>Operación realizada con éxito</Description>
	<SkybillPrefix>0051</SkybillPrefix>
	<SkybillNumber>34142949</SkybillNumber>
	</ResponseSkybill>";

	$xml=new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>'.$not,null,false);

	if (isset($xml->Code) && $xml->Code == 'Ok')
	{
		//$data = $result->SkybillPrefix.'-'.$result->SkybillNumber;
		//CustomLog::info('test-mx-api', $data);die;
		// TODO: update ssno,ssna,ssid,esno,esna,esid into db
		//$api_response = [
		//    'response' => $result,
		//];
		//$this->order->api_response = GuzzleHttp\json_encode($api_response);
		//$this->order->order_sent_at = date('Y-m-d H:i:s');
		//$this->order->save();
		return [
		    'tracking_number' => $xml->SkybillPrefix.'-'.$xml->SkybillNumber,
		    'order_sent_at' => date('Y-m-d H:i:s'),
		];
	}
}

$result =test();
print_r($result);
?>