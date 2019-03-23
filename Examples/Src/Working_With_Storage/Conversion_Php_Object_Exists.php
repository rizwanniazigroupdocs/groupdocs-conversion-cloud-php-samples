<?php
	require_once('C:\xampp\htdocs\groupdocs-conversion-cloud-php-examples-master\vendor\autoload.php');

	//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).

	$configuration = new GroupDocs\Conversion\Configuration();
	$configuration->setAppSid("XXXXX-XXXXX-XXXXX-XXXXX");
	$configuration->setAppKey("XXXXXXXXX");

	$apiInstance = new GroupDocs\Conversion\StorageApi($configuration); 

	try 
	{
		$request = new GroupDocs\Conversion\Model\Requests\ObjectExistsRequest("conversions\\one-page.docx", "MYStorage");
		$response = $apiInstance->objectExists($request);
		
		echo "Expected response type is ObjectExist: ", $response->getExists();
	} 
	catch (Exception $e) 
	{
		echo  "Something went wrong: ",  $e->getMessage(), "<br />";
		PHP_EOL;
	}
?>