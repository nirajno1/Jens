<!DOCTYPE html>
<html>
<?php include './includes/header.php'; ?>
<body class="wrapper">
    <?php include './includes/bodyHeader.php'; ?>
<main>

    <?php
  
      require_once './includes/Credential.php';

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }

        $sleepType= $_GET['sleepType'];  
        $sweat= $_GET['sweat'];  
        $weight= $_GET['weight'];  
        $price=$_GET['price'];  
        $queryUrl='result.php?sleepType='.$sleepType.'&sweat='.$sweat.'&weight='.$weight.'&price='.$price;
        $where="where sleep_type='".$sleepType."' and sweat='".$sweat."' and weight='".$weight."'";
        $priceC=" and search_price between ".$price;

        $no_of_records_per_page = 5;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $credential = new Credential();
      // echo $credential->dbServerName.$credential->username.$credential->password.$credential->dbname;
       
        $conn=mysqli_connect($credential->dbServerName,$credential->username,$credential->password,$credential->dbname);
       
       
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }
 
        $total_pages_sql = "SELECT COUNT(*) FROM PRODUCT ".$where.$priceC;
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        $sql = "SELECT product_id,product_name,description,search_price,
        aw_image_url,product_price_old,aw_deep_link,merchant_name, brand_name,
         dimensions, colour, weight  FROM PRODUCT "
        . $where .$priceC." LIMIT $offset, $no_of_records_per_page";

        // echo $sql . "<br>";
       // echo $total_pages_sql;
        $res_data = mysqli_query($conn,$sql);
$sleepVal=null;
if($sleepType=='s'){
    $sleepVal="weiches";
}elseif($sleepType=='m'){
    $sleepVal="mittleres";
}elseif($sleepType=='f'){
    $sleepVal="festes";
}

$sweatVal=null;
if($sweat=='y'){
    $sweatVal="Ja";
}elseif($sweat=='n'){
    $sweatVal="Nein";
}

$weightVal=null;
if($weight=='H2'){
    $weightVal="bis ca. 80 kg [Normalgewicht lt. BMI-Wert] (H2)";
}elseif($weight=='H3'){
    $weightVal="bis ca. 100 kg [Normalgewicht lt. BMI-Wert] (H3)";
}elseif($weight=='H4'){
    $weightVal="bis ca. 120 kg [Normalgewicht lt. BMI-Wert] (H4)";
}elseif($weight=='H5'){
    $weightVal="ab ca. 120 kg [Normalgewicht lt. BMI-Wert] (H5)";
}

$priceVal=null;
if($price=='0 and 300'){
    $priceVal="100 - 300 Euro";
}elseif($price=='300 and 600'){
    $priceVal="300 - 600 Euro";
}elseif($price=='600 and 900'){
    $priceVal="600 - 900 Euro";
}elseif($price=='900 and 1200'){
    $priceVal="900 - 1200 Euro";
}elseif($price=='1200 and 999999.99'){
    $priceVal="über 1200 Euro";
}

       echo '
       <div class="search">
       <div class="searchParams">Gesamtergebnis '.$total_rows.' Produkte'.
        '<br>Schlaftyp: ' .$sleepVal. 
        '; Schwitzen: ' .$sweatVal.
        '; Gewicht: ' .$weightVal.
        '; Preis: ' .$priceVal.'     
        </div>
        <div class="searchAgain">
        <a class="button" href="formPage.php" >Suche ändern</a>
        </div>
        </div>';
        while($row = mysqli_fetch_array($res_data)){
               $product_id=$row["product_id"]; 
               $product_name=$row["product_name"];
               $description=$row["description"];
               $search_price=$row["search_price"]; 
              
               $aw_image_url=$row["aw_image_url"]; 
               $product_price_old=$row["product_price_old"];
               $aw_deep_link=$row["aw_deep_link"];
               $merchant_name=$row["merchant_name"];
               
               $brand_name=$row["brand_name"];
               $dimensions=$row["dimensions"];
               $matress_cover=$row["colour"];
               $weight=$row["weight"];



               echo '<div class="product-box" > <!-- grid of 2 column -->
               <div class="left-box">
               <img src="'.$aw_image_url.'" alt="product image" style="display: block;">
               </div>
               <div class="right-box"> <!-- grid of 1 column  3 rows -->
                   <div class="product-name">'.$product_name.'</div>
               <!-- product id: '.$product_id.'-->
                   <div class="right-top-box">'.$description.'</div>
               
               <div class="right-bottom-box">
                   
                    <div class="current-price-txt">Preis</div>
                   
                    <div class="before-price-txt">Alter Preis</div>
                   
                   <div class="current-price">'.$search_price.'</div>
                   <div class="before-price">'.$product_price_old.'</div>
                   <div class="tax-shipping">inkl. 19 % MwSt zzgl. <a class="gm_shipping_link lightbox_iframe" href="https://www.refluxis.de/popup/versandkosten.html" target="_self" rel="nofollow" data-modal-settings="{&quot;title&quot;:&quot;Versand&quot;, &quot;sectionSelector&quot;: &quot;.content_text&quot;, &quot;bootstrapClass&quot;: &quot;modal-lg&quot;}">
					<span style="text-decoration:underline">Versand</span>
		        </a>
                </div>
                </div>
                <div class="bottom-pdetails">
                <div class="bottom-brand" style="text-align:left">
                    <div class="partner_shop"> Partner-Shop</div>
                    <div class="brand_name">'.$brand_name.'</div>
                </div>
               <div class="product-detail-link">
                       <a class="button" href="#" alt="product name" onclick="openDetails('.$product_id.')">Weitere Details</a>
               </div>
               
                 </div>  
            </div>
        </div>
            <!-- The Modal -->
            <div id="myModal_'.$product_id.'" class="modal">
        
                <!-- Modal content -->
                <div class="modal-content">
                <span class="close">&times;</span>
                    <div class="product-details-box">
                        <div class="pd-left-box">
                            <img src="'.$aw_image_url.'" alt="product image" style="display: block;">
                        </div>
                        <div class="pd-right-box">
                            <div class="pd-product-name">'.$product_name.'</div>
                           <div class="pd-right-top-box">'.$description.'</div>
                        <div class="list-items">
                            <ul class="item_list">
                                <li><span class="item">Marke: </span><span class="item-value">'.$merchant_name.'</span></li>
                                <li><span class="item">Brand name: </span><span class="item-value">'.$brand_name.'</span></li>
                                <li><span class="item">Dimensions: </span><span class="item-value">'.$dimensions.'</span></li>
                                <li><span class="item">Matress cover: </span><span class="item-value">'.$matress_cover.'</span></li>
                                <li><span class="item">Sleep type: </span><span class="item-value">'.$sleepVal.'</span></li>
                                <li><span class="item">Sweat: </span><span class="item-value">'.$sweatVal.'</span></li>
                                <li><span class="item">Weight: </span><span class="item-value">'.$weightVal.'</span></li>
                            </ul>
                        </div>




                            <div class="pd-right-bottom-box">
                                <div class="current-price-txt">Preis</div>
                                
                                <div class="partner_shop"> Partner-Shop</div>
                   
                                <div class="current-price">'.$search_price.'</div>
                                <div class="brand_name">'.$merchant_name.'</div>
                                <div class="tax-shipping">inkl. 19 % MwSt zzgl. <a class="gm_shipping_link lightbox_iframe" href="https://www.refluxis.de/popup/versandkosten.html" target="_self" rel="nofollow" data-modal-settings="{&quot;title&quot;:&quot;Versand&quot;, &quot;sectionSelector&quot;: &quot;.content_text&quot;, &quot;bootstrapClass&quot;: &quot;modal-lg&quot;}">
                                    <span style="text-decoration:underline">Versand</span>
                                </a></div>
                            </div>
                            
                            <div class="pd-product-detail-link">
                                <a class="pd-button" target="_blank" href="'.$aw_deep_link.'" alt="product name">Zum Shop</a>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
            ';
        }
        mysqli_close($conn);
    ?>
         <div class="pagination">    
      <?php  
     
          
    echo "</br>";     
        // Number of pages required.   
   
        $pagLink = "";       
      
        if($pageno>=2){   
            echo "<a href=".$queryUrl.'&pageno='.($pageno-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $pageno) {   
              $pagLink .= "<a class = 'active' href='".$queryUrl.'&pageno='.$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='".$queryUrl.'&pageno='.$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($pageno<$total_pages){   
            echo "<a href='".$queryUrl.'&pageno='.($pageno+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
    </main>
    <script >
        var model;
        function openDetails(productId){
          //  alert('Open details'+productId);
            // Get the modal
           var modal = document.getElementById("myModal_"+productId);
            // When the user clicks the button, open the modal 
            modal.style.display = "block";

            // Get the <span> element that closes the modal
         var span = document.getElementsByClassName("close")[0];
         // When the user clicks on <span> (x), close the modal
         span.onclick = function() {
               modal.style.display = "none";
            }

             // When the user clicks anywhere outside of the modal, close it
             window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            
        }

         

    </script>
</body>
</html>
