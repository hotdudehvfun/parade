<?php 
// open and load a XML file
error_reporting(E_ALL);
ini_set('display_errors', '1');
$dom = new DomDocument();
$dom->load('live_feed.xml');
$feeds = $dom->getElementsByTagName('feed');
$echoArray=array();
$i=0;
foreach ($feeds as $feed)
{
	$echoArray[$i++]=$feed->nodeValue;
	//echo $feed->nodeValue;
}
echo json_encode($echoArray);
?>
