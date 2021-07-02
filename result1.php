<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">
		img {
  height: 215px;
}
.wrapper {
	font-family: Arial;
  max-width: 1000px;
  margin: auto;
  display: grid;
  grid-template-columns: auto;
  grid-template-rows: 100px auto 100px;
  grid-gap: 1px;
  align-items: center;

  /*background-color: #d95959;*/
  /*background-color: #fff;*/
  color: #444;
  min-width: 300px;
}

.before-price::after {
	content: ',- \20AC';
}
.current-price::after {
	content: ',- \20AC';
}
.product-box {
	display: grid;
 	grid-template-columns: 300px auto;
	margin: 5px;
	padding: 18px;
	border: 4px solid #e7e7e7;
}

.right-bottom-box {
	display: grid;
	grid-template-columns: 100px 100px auto;
	grid-template-rows: 30px 30px;
}

.right-box {
	display: grid;
	grid-template-columns: 600px;
	grid-template-rows: 20px auto 50px;
	grid-gap: 0;
	align-items: center;
	margin: 2px;
	padding: 5px;
}
.right-top-box{
	text-align: justify;
}
.button {
  font: bold 20px Arial;
  text-decoration: none;
  background-color: #2eae06;
  border-radius: 15px;
  color: #ffffff;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}

.button:hover {
  background-color: #6AE86A;
}

.product-name {
	font-size: 21px;
	font-weight: bold;
	font-family: Arial;
	color: #337ab7;
}
.before-price {
	text-decoration-line: line-through;
}
.product-detail-link {
	text-align: right;
}
.product-detail-link a:hover {
	text-decoration: none;
}

</style>

    <title>Pagination</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
</head>
<body >
    <main class="wrapper">
    <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }

        $sleepType= $_GET['sleepType'];  
        $sweat= $_GET['sweat'];  
        $weight= $_GET['weight'];  
        $price=$_GET['price'];  

        $where="where sleep_type='".$sleepType."' and sweat='".$sweat."' and weight='".$weight."'";
        $priceC=" and search_price between ".$price;



        $no_of_records_per_page = 5;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $dbServerName="192.168.0.121";
        $username="neeraj";
        $password="mylove4God#";
        $dbname="JENS";
        
        $conn=mysqli_connect($dbServerName,$username,$password,$dbname);
       
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM JENS.PRODUCT ".$where.$priceC;
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM JENS.PRODUCT ". $where .$priceC." LIMIT $offset, $no_of_records_per_page";
        echo $sql . "<br>";
        echo $total_pages_sql;
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
           // while($row = mysqli_fetch_assoc($result)){

               $product_id=$row["product_id"]; 
               $product_name=$row["product_name"];
               $description=$row["description"];
               $search_price=$row["search_price"]; 
               $aw_thumb_url=$row["aw_thumb_url"];
               $aw_image_url=$row["aw_image_url"]; 
               $product_price_old=$row["product_price_old"];

               echo '<div class="product-box" >
               <div class="left-box">
               <img src='.$aw_image_url.' alt="product image" style="display: block;">
               </div>
               <div class="right-box">
                   <div class="product-name">('.$product_id.')'.$product_name.'</div>
               <div class="right-top-box">'.$description.'</div>
               <div class="right-bottom-box">
                   <div class="current-price-txt">Preis</div>
                   <div class="before-price-txt">Alter Preis</div>
                   <div class="product-detail-link"></div>
                   <div class="current-price">'.$search_price.'</div>
                   <div class="before-price">'.$product_price_old.'</div>
                   <div class="product-detail-link">
                       <a class="button" href="#" alt="product name">Weitere Details</a>
                   </div>
               </div>
               </div>
            </div>
            ';
        }
        mysqli_close($conn);
    ?>
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
    </main>
</body>
</html>