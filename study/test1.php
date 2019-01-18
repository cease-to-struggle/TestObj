<?php 
$str = '{
	"consigneeContactName": "สุขศรี กิจบรรจง",
	"consigneePhone": "0890281380",
	"consigneeAddress": "22/6 ม4",
	"consigneeSubdistrict": "n/a",
	"consigneeDistrict": "ลาดหลุมแก้ว",
	"consigneeProvince": "ปทุมธานี",
	"consigneeCountry": "Thailand",
	"consigneeCompanyNameLocale": "สุขศรี กิจบรรจง.",
	"consigneeContactNameLocale": "สุขศรี กิจบรรจง.",
	"consigneeAddressLocale": "22/6 ม4",
	"consigneePostalCode": "12140",
	"shipperCompanyName": "Cuckoo2",
	"shipperContactName": "ZhangYao",
	"shipperPhone": "0980041470",
	"shipperAddress": "泰国",
	"shipperSubdistrict": "Baoan",
	"shipperDistrict": "Baoan",
	"shipperProvince": "Guangdong",
	"shipperCountry": "China",
	"shipperPostalCode": "518000",
	"paymentMethod": "COD",
	"parcelValue": "999",
	"productType": "Express",
	"shipmentType": "General Shipment",
	"salePlatformName": "Cuckoo2",
	"referenceNumber": "TTI5507000161",
	"trackingNumber":"",
	"items": [{
		"sku": "D014144300003",
		"description": "Gun1",
		"descriptionOriginal": "Gun1",
		"pieces": 1,
		"unitPrice": 499,
		"unitPriceCurrency": "THB",
		"CODValue": 499
	}]
}';
$arr = json_decode($str,true);

//var_dump($arr);die;
$num=5507000160;
$result = [];
for($i=0;$i<100;$i++){
	$num++;
	$arr["referenceNumber"] ="TTI"."$num";
	$result[]=$arr;	
}
echo json_encode($result);