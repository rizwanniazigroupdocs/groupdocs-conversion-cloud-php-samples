﻿<?php
	require_once('C:\xampp\htdocs\groupdocs-conversion-cloud-php-examples-master\vendor\autoload.php');

	//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).

	$configuration = new GroupDocs\Conversion\Configuration();
	$configuration->setAppSid("XXXXX-XXXXX-XXXXX-XXXXX");
	$configuration->setAppKey("XXXXXXXXX");

	$apiInstance = new GroupDocs\Conversion\ConversionApi($configuration); 

	try 
	{
		$settings = new GroupDocs\Conversion\Model\ConvertSettings();

		$settings->setStorage("MYStorage");
		$settings->setFilePath("conversions\\password-protected.docx");
		$settings->setFormat("html");

		$loadOptions = new GroupDocs\Conversion\Model\DocxLoadOptions();
		$loadOptions->setPassword("password");
		$loadOptions->setHideWordTrackedChanges(true);
		$loadOptions->setDefaultFont("Arial");

		$settings->setLoadOptions($loadOptions);

		$convertOptions = new GroupDocs\Conversion\Model\HtmlConvertOptions();
		$convertOptions->setFromPage(1);
		$convertOptions->setPagesCount(2);
		$convertOptions->setFromPage(1);
		$convertOptions->setUsePdf(true);
		$convertOptions->setFixedLayout(true);
		$settings->setConvertOptions($convertOptions);

		$settings->setOutputPath("converted\\tohtml");
		
		$request = new GroupDocs\Conversion\Model\Requests\ConvertDocumentRequest($settings);
		$response = $apiInstance->convertDocument($request);
		
		echo "Document conveted successfully.";
	} 
	catch (Exception $e) 
	{
		echo  "Something went wrong: ",  $e->getMessage(), "<br />";
		PHP_EOL;
	}
?>