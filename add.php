<?php
$arrError = array("email" => '', "pesan" => '', "alamat"=> '');
if (isset($_POST['submit'])) {
    //                  email
    if ($_POST['email']) {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $arrError['email'] = "your email is invalid woeeee !!!";
        } else {
            $arrError['email'] = "your email is " . htmlspecialchars($_POST['email']);
        }
    } else {
        $arrError['email'] = "please provide your email for registration!";
    }

    //                  alamat
    if (!$_POST['alamat']){
        $arrError['alamat'] = "please provide you alamat bambang !!!";
    }else{
        if (!preg_match("/^[a-z]*$/", $_POST["pesan"])){
            $arrError['alamat'] = "alamat mu engga valid bambang";
        }else{
            $arrError['alamat'] = "ini adalah alamatmu " . htmlspecialchars($_POST["alamat"]);
        }
    }
    //                  pesan
    if ($_POST['pesan']) {
        if (!preg_match("/^[a-z]*$/", $_POST["pesan"])) {
            $arrError['pesan'] = "your pesan is invalid gaes !!!";
        } else {
            $arrError['pesan'] = htmlspecialchars($_POST['pesan']);
        }
    } else {
        $arrError['pesan'] = "please provide your pesan for registration!";
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
    .error-message{
        font-size: 15px;
        font-weight: bold;
    }
</style>

<?php require "modules/header.php"; ?>
<section class="gray-text">
    <div class="container form-container">
        <form method="post" action="./add.php" class="white form-div">
            <label for="email">Your Email :</label>
            <input type="text" name="email" id="email">
            <div class="red-text error-message"><?php echo  $arrError['email'] ?></div>
            <label for="asdf">Your Address :</label>
            <input type="text" name="alamat" id="asdf">
            <div class="red-text error-message"><?php echo  $arrError['alamat'] ?></div>
            <label for="rrr">Your Message :</label>
            <input type="text" name="pesan" id="rrr">
            <div class="red-text error-message"><?php echo  $arrError['pesan'] ?></div>
            <div class="center">
                <input type="submit" value="Submit" name="submit" class="btn brand">
            </div>
        </form>
    </div>
</section>

<?php require "modules/footer.php" ?>
</html>
