<?php 
$not='		 	<RequestSkybill xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
			<Customeraccount>TIMES-TEST</Customeraccount>
			<Username>timestest</Username>
			<Password>timestest2018</Password>
			<Skybillprefix/>
			<Skybillnumber/>
			<CustomerFreightCharges>0</CustomerFreightCharges>
			<Shippername>邱泓旭</Shippername>
			<Shippercompanyname>Club Factory</Shippercompanyname>
			<Shipperaddress>No.239 Jingyu Road, Yuhang District,Hangzhou</Shipperaddress>
			<Shippercountryisocode>CN</Shippercountryisocode>
			<Shippercountry>CHINA</Shippercountry>
			<Shippercityid>0</Shippercityid>
			<Shippercity>Hangzhou</Shippercity>
			<Shipperstateid>0</Shipperstateid>
			<Shipperstate>Zhejiang</Shipperstate>
			<Shipperzipcode>310004</Shipperzipcode>
			<Shipperemail/>
			<Shippertelephone>13429602265</Shippertelephone>
			<Shipperfax/>
			<Shipperidentificationnumber/>
			<Consigneename>GUADALUPE</Consigneename>
			<Consigneecompanyname>Club Factory</Consigneecompanyname>
			<Consigneeaddress>Hector Fix Zamudio #105 Colonia Parque Cuauhtémoc</Consigneeaddress>
			<Consigneecountryisocode>MX</Consigneecountryisocode>
			<Consigneecountry>Mexico</Consigneecountry>
			<Consigneestateid>0</Consigneestateid>
			<Consigneestate>Mexico</Consigneestate>
			<Consigneecityid>0</Consigneecityid>
			<Consigneecity>Toluca</Consigneecity>
			<Consigneezipcode>50010</Consigneezipcode>
			<Consigneetelephone>7222031522</Consigneetelephone>
			<Consigneefax/>
			<Consigneeidentificationnumber/>
			<Specialprice>0</Specialprice>
			<Specialpricenumber/>
			<Dangerousgoods/>
			<Dangerousgoodsnumber/>
			<Cod>0</Cod>
			<Codnumber/>
			<Freedomicilie>1</Freedomicilie>
			<Insurance>0</Insurance>
			<Signaturerequired>false</Signaturerequired>
			<Comodity>77</Comodity>
			<Typeofservice>EC</Typeofservice>
			<Typeofshipment>SPX</Typeofshipment>
			<Contractorreference/>
			<Description>Parka Casual Outwear Military Hooded Jacket Fur Coats Clothes Manteau Femme, </Description>
			<Currency>MXN</Currency>
			<Comercialvalue>18.64</Comercialvalue>
			<Customvalue>18.64</Customvalue>
			<Customeraccountingcode/>
			<Shipperreference/>
			<SkybillPieces>
				<SkybillPiece>
					<Itemnumber>1</Itemnumber>
					<Weight>0.500</Weight>
					<Volweight>0.500</Volweight>
					<Length>1.000</Length>
					<Width>1.000</Width>
					<Height>1.000</Height>
					<Products>
						<Product>
							<Articleid>0</Articleid>
							<Quantity>1</Quantity>
							<Productvalue>18.64</Productvalue>
							<Productvaluecurrency>MXN</Productvaluecurrency>
							<Productchargeableweight>0.500</Productchargeableweight>
							<Commodityid>77</Commodityid>
							<Countryofmanufacture>China</Countryofmanufacture>
						</Product>
					</Products>
				</SkybillPiece>
			</SkybillPieces>
			</RequestSkybill> ';

$xml=new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>'.$not,null,false);
$xml = json_decode(json_encode($xml),true);
$result=[];
$result['consigneePhone']= $xml['Consigneetelephone'];
$result['consigneeSubdistrict']= 'N/A';
$result['consigneeDistrict']= $xml['Consigneecity'];
$result['consigneeProvince']= $xml['Consigneestate'];
$result['consigneeCountry']= $xml['Consigneecountry'];
$result['consigneeContactNameLocale']= $xml['Consigneename'];
$result['consigneeAddressLocale']= $xml['Consigneeaddress'];
$result['consigneePostalCode']= $xml['Consigneezipcode'];
$result['consigneeCompanyNameLocale']= $xml['Consigneecompanyname'];
$result['shipperCompanyName']= $xml['Shippercompanyname'];
$result['shipperContactName']= $xml['Shippercompanyname'];
$result['shipperPhone']= $xml['Shippertelephone'];
$result['shipperAddress']= $xml['Shipperaddress'];
$result['shipperSubdistrict']= 'Xiacheng';
$result['shipperDistrict']= $xml['Shippercity'];
$result['shipperProvince']= $xml['Shipperstate'];
$result['shipperCountry']= 'China';
$result['shipperPostalCode']= $xml['Shipperzipcode'];
$result['paymentMethod']= 'N/A';
$result['parcelValue']= $xml['Customvalue'];
$result['salePlatformName']= 'Club Factory';
$result['referenceNumber']= '123444568';


echo json_encode($result);

