<?php 
// open and load a XML file
error_reporting(E_ALL);
ini_set('display_errors', '1');
$dom = new DomDocument();
$dom->load('live_feed.xml');

// Apply some modification
$parent = $dom->getElementsByTagName('live_feed')->item(0);
$node = $dom->createElement("feed","value");
$parent->appendChild($node);
// Save the new version of the file
$dom->saveXML();
?>
