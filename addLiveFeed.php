<?php 
// open and load a XML file
error_reporting(E_ALL);
ini_set('display_errors', '1');
$dom = new DomDocument();
$dom->load('live_feed.xml');

$value="12";//$_POST['value'];

// Apply some modification
$parent = $dom->getElementsByTagName('live_feed')->item(0);
$node = $dom->createElement("feed",$value);
$parent->appendChild($node);
// Save the new version of the file
$result=$dom->save('live_feed.xml');
$echo $result;
?>

