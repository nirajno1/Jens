
$sql="select * from PRODUCT;";


echo $sql . "<br>";

$result = mysqli_query($conn, $sql);
$resultCount = mysqli_num_rows($result);

echo "result count " . $resultCount . "<br>";


echo '<div class="product-box" >
               <div class="left-box">
               <img src='.$aw_image_url.' alt="product image" style="display: block;">
               </div>
               <div class="right-box">
                   <div class="product-name">'.$product_name.'</div>
               <div class="right-top-box">This is short discription</div>
               <div class="right-bottom-box">
                   <div class="current-price-txt">Preis</div>
                   <div class="before-price-txt">Alter Preis</div>
                   <div class="product-detail-link"></div>
                   <div class="current-price">'.$display_price.'</div>
                   <div class="before-price">'.$product_price_old.'</div>
                   <div class="product-detail-link">
                       <a class="button" href="#" alt="product name">Weitere Details</a>
                   </div>
               </div>
               </div>
            </div>
            ';