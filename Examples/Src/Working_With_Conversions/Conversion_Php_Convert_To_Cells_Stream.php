﻿<?php

include(dirname(__DIR__) . '\CommonUtils.php');

    $convertApi = CommonUtils::GetConvertApiInstance();

	try 
	{
		$settings = new GroupDocs\Conversion\Model\ConvertSettings();

		$settings->setStorageName(CommonUtils::$MyStorage);
		$settings->setFilePath("conversions\\sample.docx");
		$settings->setFormat("xlsx");

		$loadOptions = new GroupDocs\Conversion\Model\DocxLoadOptions();
		$loadOptions->setPassword("");
		$loadOptions->setHideWordTrackedChanges(true);

		$settings->setLoadOptions($loadOptions);

		$convertOptions = new GroupDocs\Conversion\Model\XlsxConvertOptions();
		$convertOptions->setFromPage(1);
		$convertOptions->setFromPage(1);
		$settings->setConvertOptions($convertOptions);

		// set OutputPath as empty will result the output as document Stream'
		$settings->setOutputPath("");
		
		$request = new GroupDocs\Conversion\Model\Requests\ConvertDocumentRequest($settings);

		$response = $convertApi->convertDocumentDownload($request);
		echo "Document converted successfully: Document Size: ", $response->getSize();
	} 
	catch (Exception $e) 
	{
		echo  "Something went wrong: ",  $e->getMessage(), "<br />";
		PHP_EOL;
	}
?>