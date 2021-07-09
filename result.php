<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body class="wrapper">

	<header>   
        <img class="logo" src="./images/logo-refluxis-neu_logo.png"/>
        <div class="content">Refluxis Matratzen-Konfigurator</div>
    </header>
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
        $queryUrl='result1.php?sleepType='.$sleepType.'&sweat='.$sweat.'&weight='.$weight.'&price='.$price;
        $where="where sleep_type='".$sleepType."' and sweat='".$sweat."' and weight='".$weight."'";
        $priceC=" and search_price between ".$price;


        $no_of_records_per_page = 5;
        $offset = ($pageno-1) * $no_of_records_per_page;
       
        $credential = new Credential();
      
        $conn=mysqli_connect($credential->dbServerName,$credential->username,
        $credential->password,$credential->dbname);
       
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

       // echo $sql . "<br>";
        // echo $total_pages_sql;
        $res_data = mysqli_query($conn,$sql);
      //  echo '<div class="searchParams">Showing total result(s) '.$total_rows.' in '.$total_pages.' pages  for '.
        'Sleep Type: ' .$sleepType. 
        ' Sweat more: ' .$sweat.
        ' Weight: ' .$weight.
        ' Price: ' .$price.'     
        </div>';
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
                       <a class="button" href="#" alt="product name" onclick="openDetails()">Weitere Details</a>
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

        function openDetails(){
            alert('Open details');
        }

    </script>
</body>
</html>
