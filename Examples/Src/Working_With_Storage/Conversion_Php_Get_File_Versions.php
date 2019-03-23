<?php
	require_once('C:\xampp\htdocs\groupdocs-conversion-cloud-php-examples-master\vendor\autoload.php');

	//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).

	$configuration = new GroupDocs\Conversion\Configuration();
	$configuration->setAppSid("XXXXX-XXXXX-XXXXX-XXXXX");
	$configuration->setAppKey("XXXXXXXXX");

	$apiInstance = new GroupDocs\Conversion\StorageApi($configuration); 

	try 
	{
		$request = new GroupDocs\Conversion\Model\Requests\GetFileVersionsRequest("conversions\\one-page.docx", "MYStorage");
		$response = $apiInstance->getFileVersions($request);
		
		echo "Expected response type is FileVersions: ", count($response->getValue());
	} 
	catch (Exception $e) 
	{
		echo  "Something went wrong: ",  $e->getMessage(), "<br />";
		PHP_EOL;
	}
?>