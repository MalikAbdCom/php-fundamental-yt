<?php
include "config/connect_mysql.php";
$pesan = $alamat = $email = '';
$arrError = array("email" => '', "pesan" => '', "alamat" => '');

if (isset($_POST['submit'])) {
//                  email
    if ($_POST['email']) {
        $email = $_POST['email']; //string isi input
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $arrError['email'] = "your email is invalid woeeee !!!";
        }
    } else {
        $arrError['email'] = "please provide your email for registration!";
    }

//                  alamat
    if (!$_POST['alamat']) {
        $arrError['alamat'] = "please provide you alamat bambang !!!";
    } else {
        $alamat = $_POST['alamat'];
        if (!preg_match("/^[a-z]*$/", $_POST["pesan"])) {
            $arrError['alamat'] = "alamat mu engga valid bambang";
        }
    }
//                  pesan
    if ($_POST['pesan']) {
        $pesan = $_POST['pesan'];
        if (!preg_match("/^[a-z]*$/", $_POST["pesan"])) {
            $arrError['pesan'] = "your pesan is invalid gaes !!!";
        }
    } else {
        $arrError['pesan'] = "please provide your pesan for registration!";
    }

    //kirim data
    if(array_filter($arrError)){
        echo "<h6>please check your input</h6>";
    }else{

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
        $pesan = mysqli_real_escape_string($conn, $_POST['pesan']);

        // create item into msql database
        $tugas_isi_database = "INSERT INTO center(email, pesan, alamat) VALUES ('$email', '$pesan', '$alamat')";

        if(mysqli_query($conn, $tugas_isi_database)){
            header('Location: index.php');
        }else {
            echo 'query error: '. mysqli_error($conn);
        }
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

    .error-message {
        font-size: 15px;
        font-weight: bold;
    }
</style>

<?php require "modules/header.php"; ?>
<section class="gray-text">
    <div class="container form-container">
        <form method="post" action="./add.php" class="white form-div">
            <label for="email">Your Email :</label>
            <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email)?>" >
            <div class="red-text error-message"><?php echo  $arrError['email'] ?></div>
            <label for="asdf">Your Address :</label>
            <input type="text" name="alamat" id="asdf" value="<?php echo htmlspecialchars($alamat)?>" >
            <div class="red-text error-message"><?php echo  $arrError['alamat'] ?></div>
            <label for="rrr">Your Message :</label>
            <input type="text" name="pesan" id="rrr" value="<?php echo htmlspecialchars($pesan)?>">
            <div class="red-text error-message"><?php echo  $arrError['pesan'] ?></div>
            <div class="center">
                <input type="submit" value="Submit" name="submit" class="btn brand">
            </div>
        </form>
    </div>
</section>


<?php require "modules/footer.php" ?>
</html>
