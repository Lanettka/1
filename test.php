<html>
  <head>
    <title>One-dimensional array</title>
  </head>
  <body>
    <p>
<?php
$ups = array(1, 2, -5 , 3 , 4 , 5,  6);
arsort($ups);
foreach ($ups as $key => $val) {
    echo "$key = $val\n";
}

$ups = array( 1, 2, -5 , 3 , 4 , 5,  6 );
function getSum ( $a ) {
 
$sum = 0;
foreach ( $a as $val )
        ( $val >= 0 ) &&
        ( $sum += $val );
 
return $sum;
}
echo getSum ( $ups );

?>

