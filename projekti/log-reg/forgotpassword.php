<?php
if(isset($_POST['update']))
  {
$email=$_POST['email'];
$newpassword=md5($_POST['newpassword']);
  $sql ="SELECT EmailId FROM tblusers WHERE EmailId=:email";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tblusers set Password=:newpassword where EmailId=:email";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
echo "<script>alert('Your Password succesfully changed');</script>";
}
}

?>
  <script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../products/product.css">
    <title>Document</title>
</head>
<body>
<div class="form-container">
<div class="modal fade" id="forgotpassword">
  <div class="" role="document">
    <div class="modal-content">
      <div class="">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12">
              <form class="login-form" name="chngpwd" method="post" onSubmit="return valid();">
                <div class="form-group">
                <label for="email"><h4>Email</h4></label>
                  <input type="email" name="email" class="form-control" placeholder="Your Email address*" required="">
                </div>

  <div class="form-group">
                   <label for="Password"><h4>Password</h4></label>
                  <input type="password" name="newpassword" class="form-control" placeholder="New Password*" required="">
                </div>
  <div class="form-group">
                <label for="password"><h4>Confirm Password</h4></label>
                  <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password*" required="">
                </div>
                <div class="form-group">
                  <input type="submit" value="Update password " name="update" class="login-button">
                </div>
                <div class="form-group">
                <p class="dont1"><a href="../login.php">Back to Login</a></p>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
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

</body>

</html>

