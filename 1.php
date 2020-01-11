<?php
function hasil_biodata ($nama, $umur){
$biodata['name']=$nama;
$biodata['age']=$umur;
$biodata['addres']="Jalan Caman Raya";
$biodata['hobbies']=array("Sepak Bola", "Lari");
$biodata['is_married']=False;
$biodata['list_school']=array('year_in'=>2013, 'year_out'=>2016, 'major'=>'SMK' );
$biodata['skills']=array('skill_name'=>'Sepak Bola', 'Level'=>'Beginner');
$biodata['interest_in_coding']=True;

$data_JSON=json_encode($biodata);
return $data_JSON;
}

?>

