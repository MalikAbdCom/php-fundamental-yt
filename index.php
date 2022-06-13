<?php
// set a variable to store the database
$conn = mysqli_connect("localhost", "malik", "HL4usghYe9VsSr", "the_net_ninja_tutorial_basic");
// check if database is exist, be sure to check everything is right
if (!$conn) {
    echo "your data base :" . mysqli_connect_error();
}
// generate template to make sql order
$sql = 'SELECT id, email, alamat, pesan FROM center ORDER BY time';
// grab value by querying
$value_tnn = mysqli_query($conn, $sql);
// select the falue we watn to use
$items_form = mysqli_fetch_all($value_tnn, MYSQLI_ASSOC); /*sampai sini, data sudah ada dalam bentuk array*/
// setelah data ada, ada baiknya kita menghapus data dari memory karena sudah tidak di perlukan. untuk keamanan juga.
mysqli_free_result($value_tnn);
mysqli_close($conn);
echo "<pre>";
print_r($items_form);
echo "</pre>";
echo "<pre>";
var_dump($items_form[0]["email"]);
echo "</pre>";
?>

<!doctype html>
<html lang="en">
<?php require "modules/header.php"; ?>

<section class="container">
    <div class="row">
        <!--start of for each-->
        <?php foreach ($items_form as $aaa) { ?>
            <!--    <p class="center">--><?php //print_r($aaa) ?><!--</p>-->
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($aaa['email']) ?></h6>
                        <p><?php echo htmlspecialchars($aaa['pesan']) ?></p>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text">More Info</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--end of for each-->
    </div>
</section>
<?php require "modules/footer.php" ?>
</html>
