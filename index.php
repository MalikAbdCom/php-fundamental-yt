<?php
require "config/connect_mysql.php";
// generate template to make sql order
$sql = "SELECT id, email, alamat, pesan FROM center ORDER BY time";

// grab value by querying
$value_tnn = mysqli_query($conn, $sql);

// select the falue we watn to use
$items_form = mysqli_fetch_all($value_tnn, MYSQLI_ASSOC); /*sampai sini, data sudah ada dalam bentuk array*/

// setelah data ada, ada baiknya kita menghapus data dari memory karena sudah tidak di perlukan. untuk keamanan juga.
mysqli_free_result($value_tnn);
mysqli_close($conn);

//testing memisahkan banyak item di 1 table ke array menggunakan explode funtion
$hasil_pemisahan_single_data_to_array = explode(" ", $items_form[1]["pesan"]);
//print_r($hasil_pemisahan_single_data_to_array);
?>

<!doctype html>
<html lang="en">
<?php require "modules/header.php"; ?>

<section class="container">
    <div class="row">
        <!--start of for each-->
        <?php foreach ($items_form as $aaa) : ?>
            <!--    <p class="center">--><?php //print_r($aaa) ?><!--</p>-->
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($aaa['email']) ?></h6>
                        <ul>
<!--                            --><?php //foreach ($hasil_pemisahan_single_data_to_array as $bbb){?>
                                <li><?php  echo htmlspecialchars($aaa['pesan']) ?></li>
                                <li><?php  echo htmlspecialchars($aaa['alamat']) ?></li>
<!--                            --><?php //}?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a href="details.php?id=<?php echo $aaa["id"];?>" target="_blank" class="brand-text">More Info</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!--end of for each-->
    </div>
</section>
<?php require "modules/footer.php" ?>
</html>
