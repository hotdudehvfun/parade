<?php 
// open and load a XML file
$dom = new DomDocument();
$dom->load('http://paradestatement.gearhostpreview.com/live_feed.xml');

// Apply some modification
$parent = $dom->getElementsByTagName('live_feed')[0];
$node = $dom->createElement("feed","value");
$parent->appendChild($node);
// Save the new version of the file
$dom->saveXML();
?>
