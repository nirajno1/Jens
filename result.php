<?php
echo "Sleep Type:" . $_GET['sleepType'];  
echo "Sweat: " . $_GET['sweat'];  
echo "weight: " . $_GET['weight'];  
echo "price: " . $_GET['price']."<br>";  

// sleepType=medium&sweat=n&weight=h3&price=300600
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}

$no_of_records_per_page = 10;
$offset = ($pageno-1) * $no_of_records_per_page; 

echo '<pre>'.print_r($_SERVER["QUERY_STRING"], TRUE).'</pre>';


$dbServerName="192.168.0.121";
$username="neeraj";
$password="mylove4God#";
$dbname="JENS";

$conn=mysqli_connect($dbServerName,$username,$password,$dbname);





$total_pages_sql = "SELECT COUNT(*) FROM PRODUCT";
$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);


$sql = "SELECT * FROM PRODUCT LIMIT $offset, $no_of_records_per_page"; 



if($resultCount>0){
    
    while($row = mysqli_fetch_assoc($result)){

        $product_id=$row["product_id"]; 
        $aw_deep_link=$row["aw_deep_link"];
        $product_name=$row["product_name"];
        $aw_product_id=$row["aw_product_id"]; 
        $merchant_product_id=$row["merchant_product_id"];
        $merchant_image_url=$row["merchant_image_url"];
        $description=$row["description"];
        $merchant_category=$row["merchant_category"]; 
        $search_price=$row["search_price"]; 
        $merchant_name=$row["merchant_name"];
        $aw_image_url=$row["aw_image_url"]; 
        $merchant_deep_link=$row["merchant_deep_link"]; 
        $display_price=$row["display_price"]; 
        $brand_name=$row["brand_name"]; 
        $colour=$row["colour"];
        $dimensions=$row["dimensions"];
        $product_price_old=$row["product_price_old"];
        $alternate_image=$row["alternate_image"];
        $aw_thumb_url=$row["aw_thumb_url"];
        $alternate_image_two=$row["alternate_image_two"]; 
        $alternate_image_three=$row["alternate_image_three"];


}
    
}

?>
<html>
<head></head>
<body>

<ul class="pagination">
    <li><a href="?pageno=1">First</a></li>
    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
    </li>
    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
    </li>
    <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
</ul>



</body>

</html>