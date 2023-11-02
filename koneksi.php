<?php

$conn = mysqli_connect ("localhost:3308","root", "", "wad_project3") ;
$result = mysqli_query ($conn, "SELECT * FROM student") ;

// $data= [] ;
// while ($return =mysqli_fetch_object($result)) {
//     $data[] = $return;
// }

$data = mysqli_fetch_object($result);


// var_dump(mysqli_fetch_object($result)) ;
// var_dump(mysqli_fetch_object($result)) ;

   
?>