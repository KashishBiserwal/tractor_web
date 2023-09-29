<?php 
// database connection info
$dbDetail= array(
    'host'=>'localhost',
    'user'=>'root',
    'pass'=>' ',
    'db'=>'tractor_project'
);
// db table to use
$table = 'brand';
// tables primary key
$primaryKey= 'id';
$columns = array(
    array('db'=> 'brand_name','dt'=>0),
    // array('db'=> 'category','dt'=>1),
);
// include sql query processing classes
include 'ssp.class.php';
// output ddata as json format
echo json_encode(
    ssp::simple($_GET,$dbDetail,$table,$primaryKey,$columns)
);

?>