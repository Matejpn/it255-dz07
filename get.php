<?php
$type = $_GET['type'];
$a = $_GET['a'];
$b = $_GET['b'];
$rezultat = $a*$b;
if($type == "json"){
	header("Content-type: application/json");
	$test_array = array (
		'brojA' => $a,
		'brojB' => $b,
		'rezultat' => $rezultat,
);
echo json_encode($test_array);
}elseif($type == 'xml') {
	header("Content-type: text/xml");
	$test_array = array (
		$a => 'brojA',
		$b => 'brojB',
		$rezultat => 'rezultat',
);
$xml = new SimpleXMLElement('<root/>');
array_walk_recursive($test_array, array ($xml, 'addChild'));
print $xml->asXML();
}else{
	header("Content-type: application/json");
	$test_array = array (
		'ime' => 'Matej',
		'prezime' => 'Petrovic',
		'brojIndexa' => '3108'
);
echo json_encode($test_array);
	
	
	
}