<?php
if(isset($_POST['type']) && isset($_POST['a'])){
	$type = $_POST['type'];
	$a = $_POST['a'];
}

if(isset($_POST['type']) && isset($_POST['a'])){
function fact($a){
	if($a < 2){
		return 1;
	}else{
		return ($a * fact($a -1));
	}	
}
if($type == "json"){
	header("Content-type: application/json");
	$test_array = array (
	'rezultat' => (fact($a)),
);
	echo json_encode($test_array);
}else {
	header("Content-type: text/xml");
	$test_array = array (
	(fact($a)) => 'rezultat',
);
$xml = new SimpleXMLElement('<root/>');
array_walk_recursive($test_array, array ($xml, 'addChild'));
print $xml->asXML();
}
}else{
	echo "Unesite parametre: a = integer
	\t\t\t type = json ili xml";
}
?>