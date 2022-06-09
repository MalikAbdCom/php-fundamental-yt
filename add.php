<?php
if (isset($_POST['submit'])){
    //email
   if($_POST['email']){
       echo htmlspecialchars($_POST['email']);
   }else{
      echo "please provide your email for registration!";
      echo "<br/>";
   }
//email
   if($_POST['pesan']){
       echo htmlspecialchars($_POST['pesan']);
   }else{
      echo "please provide your email for registration!";
      echo "<br/>";
   }
//email
   if($_POST['alamat']){
       echo htmlspecialchars($_POST['alamat']);
   }else{
      echo "please provide your email for registration!";
      echo "<br/>";
   }


}
?>

<!doctype html>
<html lang="en">

<style>
    .form-container {
        padding: 3rem;

    }

    .form-div {
        font-size: 1.5rem;
        padding: 2rem;
        max-width: 460px;
        margin-inline: auto;
    }
</style>

<?php require "modules/header.php"; ?>
<section class="gray-text">
    <div class="container form-container">
        <form method="post" action="./add.php" class="white form-div">
            <label for="email">Your Email :</label>
            <input type="text" name="email" id="email">
            <label for="asdf">Your Address :</label>
            <input type="text" name="alamat" id="asdf">
            <label for="rrr">Your Message :</label>
            <input type="text" name="pesan" id="rrr">
            <div class="center">
                <input type="submit" value="Submit" name="submit" class="btn brand">
            </div>
        </form>
    </div>
</section>

<?php require "modules/footer.php" ?>
</html>
