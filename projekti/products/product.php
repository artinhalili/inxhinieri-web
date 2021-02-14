<?php require '../log-reg/dbh.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="product.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="products-images/icon3.jpg" width="75px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="">Maica</a></li>
                    <li><a href="">Mugs</a></li>
                    <li><a href="">Kafshe</a></li>
                    <li><a href="">Barera</a></li>
                </ul>
            </nav>
            <img src="products-images/cart1.png" width="30px" height="30px">
            <img src="products-images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Nature products!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                <br> Aliquam fuga voluptatem non possimus consectetur reiciendis eaque numquam delectus,
                <br> esse suscipit itaque, iure praesentium voluptates consequatur cumque quod architecto nobis nisi.</p>
                <a href="" class="btn">SHOP NOW &#8594; </a>
            </div>
        </div>
    </div>
</div>




 
        <h2 class="title">Products</h2>
        <div class="row">
            <!-- <div class="col-4">
                <img src="../products/products-images/product-1.jpg" width="309px" height="300px">
                <h4>Maic</h4>
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div>
            <div class="col-4">
                <img src="../products/products-images/product-2.jpg" width="309px" height="300px">
                <h4>Maic</h4>
               
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div>
            <div class="col-4">
                <img src="../products/products-images/product-3.jpg" width="309px" height="300px">
                <h4>Maic</h4>
               
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div>
            <div class="col-4">
                <img src="../products/products-images/product-4.jpg" width="309px" height="300px">
                <h4>Maic</h4>
              
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div>
            <div class="col-4">
                <img src="../products/products-images/product-5.jpg" width="309px" height="300px">
                <h4>Maic</h4>
               
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div>
             <div class="col-4">
                <img src="../products/products-images/product-6.jpg" width="309px" height="300px">
                <h4>Maic</h4>
               
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div>
            <div class="col-4">
                <img src="../products/products-images/product10.jpg" width="309px" height="300px">
                <h4>Maic</h4>
               
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div>
            <div class="col-4">
                <img src="../products/products-images/product9.jpg" width="309px" height="300px">
                <h4>Maic</h4>
               
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div>
            <div class="col-4">
                <img src="../products/products-images/product8.jpg" width="309px" height="300px">
                <h4>Maic</h4>
               
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div>
            <div class="col-4">
                <img src="../products/products-images/product7.jpg" width="309px" height="300px">
                <h4>Maic</h4>
               
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div>
            <div class="col-4">
                <img src="../products/products-images/product11.jpg" width="309px" height="300px">
                <h4>Maic</h4>
               
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div>
            <div class="col-4">
                <img src="../products/products-images/product12.jpg" width="309px" height="300px">
                <h4>Maic</h4>
               
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div>
            <div class="col-4">
                <img src="../products/products-images/product13.jpg" width="309px" height="300px">
                <h4>Maic</h4>
              
                <p>$5.00</p>
                <button class="prod-btn">Buy</button>
            </div> -->

<?php include '../admin/includes/config.php' ?>
<?php 
$sql = "SELECT * from tblproducts";
          $query = $dbh->prepare($sql);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $cnt=1;
          if($query->rowCount() > 0)
          {
          foreach($results as $result)
          {  ?>


           <div class="col-4">
           <img style="width="300px" height="300px" " src="../admin/images/<?php echo htmlentities($result->Vimage1);?>" /> 
           <h4>  <?php echo htmlentities($result->ProductTitle);?></h4>
               
              <li><?php echo htmlentities($result->Model);?></li>
                <button class="prod-btn">Buy</button>
            </div>
      





      <?php }} 
      ?>
      </div>
        </div>
    </div>



 <div class="brands">
   
    <h2 class="title">Brands</h2>
        <div class="row">
            <div class="col-5">
                <img src="products-images/adidas2.png">
            </div>
            <div class="col-5">
                <img src="products-images/nike1.png">
            </div>
            <div class="col-5">
                <img src="products-images/fila.png">
            </div>
            <div class="col-5">
                <img src="products-images/northFace2.png">
            </div>
            <div class="col-5">
                <img src="products-images/underArmour1.png">
            </div>
        </div>
    
</div>





    <div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, officia.</p>
            </div>
            <div class="footer-col-2">
                <img src="products-images/icon4.jpg" class="icon3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, officia.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links!</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us!</h3>
                <ul>
                    <li>Fcebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright!</p>
    </div>
</div>


<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px"){
            MenuItems.style.maxHeight = "200px";
        }else{
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>
</body>
</html>