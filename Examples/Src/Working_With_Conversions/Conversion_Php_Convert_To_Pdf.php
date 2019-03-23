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
		$settings->setFormat("pdf");

		$loadOptions = new GroupDocs\Conversion\Model\DocxLoadOptions();
		$loadOptions->setPassword("password");
		$loadOptions->setHideWordTrackedChanges(true);
		$loadOptions->setDefaultFont("Arial");

		$settings->setLoadOptions($loadOptions);

		$convertOptions = new GroupDocs\Conversion\Model\PdfConvertOptions();
		$convertOptions->setFromPage(1);
		$convertOptions->setPagesCount(2);
		$convertOptions->setZoom(100);
		$convertOptions->setDpi(300.0);
		$convertOptions->setBookmarksOutlineLevel(1);
		$convertOptions->setCenterWindow(true);
		$convertOptions->setCompressImages(false);
		$convertOptions->setDisplayDocTitle(true);
		$convertOptions->setExpandedOutlineLevels(1);
		$convertOptions->setFitWindow(false);
		$convertOptions->setFromPage(1);
		$convertOptions->setGrayscale(false);
		$convertOptions->setHeadingsOutlineLevels(1);
		$convertOptions->setImageQuality(100);
		$convertOptions->setLinearize(false);
		$convertOptions->setMarginTop(5);
		$convertOptions->setMarginLeft(5);
		$convertOptions->setPassword("password");
		$convertOptions->setUnembedFonts(true);
		$convertOptions->setRemoveUnusedStreams(true);
		$convertOptions->setRemoveUnusedObjects(true);
		$convertOptions->setRemovePdfaCompliance(false);
		$settings->setConvertOptions($convertOptions);

		$settings->setOutputPath("converted\\topdf");
		
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