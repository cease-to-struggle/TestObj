<?php 
$str = <<<XXX
[
  {
    "ShipmentNumber": "710290119313",    "SenderRef": "test 123461",
    "JobRef": "-1442693",
    "AccessID": "",
    "AcccountCode": "HK0516",
    "ErrMessage": "",
    "LabelURL": "https://ws01.ffdx.net/v4/printdoc/docConnoteStyle2.aspx?accessid=741C48248E07809BB1D69C9A5F4F6444&shipno=710290119313&format=pdf"
  },
  {
    "ShipmentNumber": "710290119324",
    "SenderRef": "test 123460",
    "JobRef": "-1442694",
    "AccessID": "",
    "AcccountCode": "HK0516",
    "ErrMessage": "",
    "LabelURL": "https://ws01.ffdx.net/v4/printdoc/docConnoteStyle2.aspx?accessid=741C48248E07809BB1D69C9A5F4F6444&shipno=710290119324&format=pdf"
  }
]
XXX;
$res = json_decode($str);

var_dump($res);

"AL",
"AD",
"AT",
"AZ",
"BY",
"BE",
"BA",
"BG",
"HR",
"CY",
"CZ",
"DK",
"EE",
"FI",
"FR",
"GE",
"DE",
"GR",
"HU",
"IS",
"IE",
"IT",
"KZ",
"LV",
"LI",
"LT",
"LU",
"MK",
"MT",
"MD",
"MC",
"ME",
"NL",
"NO",
"PL",
"PT",
"RO",
"RU",
"SM",
"RS",
"SK",
"SI",
"ES",
"SE",
"CH",
"TR",
"UA",
"GB",
"VA",
3,6,15,16,21,22,29,35,56,59,60,61,70,75,76,82,83,86,98,101,102,107,110,115,123,128,129,130,132,138,146,147,149,157,166,177,178,182,183,193,197,202,203,209,215,216,228,233,235

'allApiHost','https://api.postshipping.com/api2/'			
'allApiKey','741C48248E07809BB1D69C9A5F4F6444'	















[{
	"ThirdPartyToken": "",
	"SenderDetails": {
		"SenderName": "ASH",
		"SenderCompanyName": "ASH",
		"SenderCountryCode": "HK",
		"SenderAdd1": "Unit 1005-06, 10\/F, Tsim Sha Tsui Centre(West Wing), 66 Mody Road, Tsim Sha Tsui East, Kowloon, Hong Kong",
		"SenderAdd2": "",
		"SenderAdd3": "",
		"SenderAddCity": "Tsim Sha Tsui",
		"SenderAddState": "Kowloon",
		"SenderAddPostcode": "N\/A",
		"SenderPhone": "85237000654",
		"SenderEmail": "",
		"SenderFax": "",
		"SenderKycType": "Passport",
		"SenderKycNumber": "",
		"SenderReceivingCountryTaxID": ""
	},
	"ReceiverDetails": {
		"ReceiverName": "elisa segnan",
		"ReceiverCompanyName": "",
		"ReceiverCountryCode": "IT",
		"ReceiverAdd1": "corso dante 90",
		"ReceiverAdd2": "N\/A",
		"ReceiverAdd3": "",
		"ReceiverAddCity": "Torino",
		"ReceiverAddState": "Italia",
		"ReceiverAddPostcode": "10126",
		"ReceiverMobile": "",
		"ReceiverPhone": "347 4229527",
		"ReceiverEmail": "",
		"ReceiverAddResidential": "N",
		"ReceiverFax": "",
		"ReceiverKycType": "Passport",
		"ReceiverKycNumber": ""
	},
	"PackageDetails": {
		"GoodDescription": "Shoes",
		"CustomValue": 160,
		"CustomCurrencyCode": "EUR",
		"InsuranceValue": 0,
		"InsuranceCurrencyCode": "",
		"ShipmentTerm": "DDP",
		"GoodsOriginCountryCode": "",
		"DeliveryInstructions": "",
		"Weight": 2.1,
		"WeightMeasurement": "KG",
		"NoOfItems": 1,
		"CubicL": 0,
		"CubicW": 0,
		"CubicH": 0,
		"CubicWeight": 0,
		"CubicWeightMeasurement": "KG",
		"ServiceTypeName": "EN",
		"BookPickUP": true,
		"AlternateRef": "",
		"SenderRef1": "test 14000000395",
		"SenderRef2": "",
		"SenderRef3": "",
		"ShipmentResponseItem": [{
			"ItemAlt": "",
			"ItemNoOfPcs": 1,
			"ItemCubicL": 0,
			"ItemCubicW": 0,
			"ItemCubicH": 0,
			"ItemWeight": 0,
			"ItemCubicWeight": 0,
			"ItemCubicWeightMeasurement": "1",
			"ItemDescription": "Shoes",
			"ItemCustomValue": 160,
			"ItemCustomCurrencyCode": "EUR",
			"Notes": ""
		}],
		"CODAmount": 0,
		"CODCurrencyCode": "EUR",
		"Bag": 0,
		"Notes": "",
		"OriginLocCode": "",
		"BagNumber": "",
		"DeadWeight": 2.1,
		"ReasonExport": "",
		"DestTaxes": 0,
		"Security": 0,
		"Surcharge": 0,
		"ReceiverTaxID": "",
		"OrderNumber": "",
		"Incoterms": "",
		"ClearanceReference": ""
	}
}]		