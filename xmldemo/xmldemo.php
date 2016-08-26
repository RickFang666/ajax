<?php
$user = $_POST['user'];
$doc = new DOMDocument();
$result = $doc->loadXML($user);

header('Content-Type:application/xml');
echo $doc->saveXML();

?>