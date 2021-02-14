<?php
session_start();
error_reporting(0);
include('log-reg/dbh.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,Message) VALUES(:name,:email,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Message Sent. We will contact you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>

<?php include('includes/index.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="products/product.css">
</head>
<body>

    <div class="contact-us-container">
        <form action="" class="contact-us">
            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Your name">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Your email">
            <label for="Message">Message</label>
            <textarea id="Message" placeholder="your message"></textarea>
            <button type="submit" name="send" class="login-button">Send message</button>
        </form>
    </div>
    <?php 
$pagetype=$_GET['type'];
$sql = "SELECT Address,EmailId,ContactNo from tblcontactusinfo";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
        <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m"><?php   echo htmlentities($result->Address); ?></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="mailto:bi47191@ubt-uni.net"><?php   echo htmlentities($result->EmailId); ?></a></div>
            </li>
          </ul>
          <?php }} ?>


 <div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, officia.</p>
            </div>
            <div class="footer-col-2">
                <img src="products/products-images/icon3.jpg" class="icon3">
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
                    <li>Facebook</li>
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
</body>
</html>