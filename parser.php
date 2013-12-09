<?php
// Airport Cords Parser 

include_once "simple_html_dom.php";
$html = file_get_html('http://www.fallingrain.com/world/IN/airports.html');

$final = array();

// Find all links 
foreach($html->find('tr') as $element) {

	 $element2= $element->find('td') ;

	  $temp = array('name' => $element2[5]->plaintext  , 'Lat' =>  $element2[6]->plaintext  ,'Lon' =>$element2[7]->plaintext );
	  array_push($final, $temp);

   }


   echo json_encode($final);

?>