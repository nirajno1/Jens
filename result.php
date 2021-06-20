<?php
echo "Sleep Type:" . $_GET['sleepType'];  
echo "Sweat: " . $_GET['sweat'];  
echo "weight: " . $_GET['weight'];  
echo "price: " . $_GET['price']."<br>";  

// sleepType=medium&sweat=n&weight=h3&price=300600


echo '<pre>'.print_r($_SERVER["QUERY_STRING"], TRUE).'</pre>';


$dbServerName="192.168.0.121";
$username="neeraj";
$password="mylove4God#";
$dbname="JENS";

$conn=mysqli_connect($dbServerName,$username,$password,$dbname);



$sql="select * from PRODUCT;";


echo $sql . "<br>";

$result = mysqli_query($conn, $sql);
$resultCount = mysqli_num_rows($result);

echo "result count " . $resultCount . "<br>";

if($resultCount>0){
    
    while($row = mysqli_fetch_assoc($result)){

    $product_id=$row["product_id"];
    $product_name=$row["product_name"];


}
    
}






?>