<?php

$menu=$_POST['menu'];
$item=$_POST['item'];
$price=$_POST['price'];

$filename="product.xml";
$xml = new XMLWriter();
    $xml->openMemory();
    //$xml->openURI("php://output");  //print on screen no file output
    $xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('information');
    
      $xml->startElement("userdata");
	  $xml->writeElement("menu",$menu);
	  //$xml->endElement();
	  //$xml->startElement("password");
      $xml->writeElement("item",$item);
	  //$xml->endElement();
	  //$xml->startElement("gender");
      $xml->writeElement("price",$price);
      $xml->endElement();

    $xml->endElement();
    $xml->endDocument();

    //header('Content-type: text/xml'); //print on screen no file output with output memory
    //echo $xml->outputMemory(); //print on screen no file output with output memory
    
    $file = $xml->outputMemory();
    file_put_contents($filename,$file,FILE_APPEND);
    
    //$xml->flush(); //print on screen no file output

echo "XML write successful! <a href='index.php'>go back</a>";
?>