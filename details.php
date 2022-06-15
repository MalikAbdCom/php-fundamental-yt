<?php
require "config/connect_mysql.php";

if (isset($_POST['delete'])) {
    echo "malik abdu";
    $item_to_delete = mysqli_real_escape_string($conn, $_POST["id_to_delete"]);
    $sql = "DELETE FROM center WHERE id = $item_to_delete";
    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        echo "query fails" . mysqli_error($conn);
    }
}

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
    <div class="container col s12 m6">
        <ul class="card">
            <li>Your Email is : <?php echo htmlspecialchars($item_extract['email']) ?></li>
            <li>Your Pesanmu is : <?php echo htmlspecialchars($item_extract['pesan']) ?></li>
            <li>Your Alamatmu is : <?php echo htmlspecialchars($item_extract['alamat']) ?></li>
            <li>Di Buat pada tanggal : <?php echo htmlspecialchars($item_extract['time']) ?></li>
        </ul>
    </div>
    <button type="button" class="btn brand" onclick="location.href='index.php'">Kembali</button>

    <form action="details.php" method="post">
        <input type="hidden" name="id_to_delete" value="<?php echo htmlspecialchars($item_extract['id']); ?>">
        <input type="submit" name="delete" value="delete" class="btn brand ">
    </form>

</section>

<?php include "modules/footer.php" ?>

<style>
    button, input {
        margin-bottom: 1rem;
    }
    .center .col .card{
        padding: 10px;
    }
    .center .col .card *{
        margin-bottom: 10px;
    }
</style>

</html>
