<?php
require "config/connect_mysql.php";

if (isset($_GET['id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM center WHERE id = $id";

    $querying_single_value = mysqli_query($conn, $sql);

    $item_extract = mysqli_fetch_assoc($querying_single_value);

//    print_r($item_extract);
}



?>
<!doctype html>
<html lang="en">

<?php include "modules/header.php" ?>

<section class="center">
    <h3>This is your details</h3>

    <ul>
        <li>Your Email is : <?php echo htmlspecialchars($item_extract['email']) ?></li>
        <li>Your Pesanmu is : <?php echo htmlspecialchars($item_extract['pesan']) ?></li>
        <li>Your Alamatmu is : <?php echo htmlspecialchars($item_extract['alamat']) ?></li>
        <li>Di Buat pada tanggal : <?php echo htmlspecialchars($item_extract['time']) ?></li>
    </ul>

    <button type="button" onclick="location.href='index.php'">Kembali</button>


</section>

<?php include "modules/footer.php" ?>

<style>
    button{
        padding: 7px 20px;
        border: none;
        background-color: cornflowerblue;
        font-weight: bold;
        color: white;
        margin-bottom: 2rem;
    }
</style>
</html>
