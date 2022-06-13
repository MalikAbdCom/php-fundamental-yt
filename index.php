<?php
// set a variable to store the database
$conn = mysqli_connect("localhost", "malik", "HL4usghYe9VsSr", "the_net_ninja_tutorial_basic");
// check if database is exist, be sure to check everything is right
if (!$conn) {
    echo "your data base :" . mysqli_connect_error();
} else {
    print_r($conn);
}
?>

<!doctype html>
<html lang="en">
<?php require "modules/header.php"; ?>

<?php require "modules/footer.php" ?>
</html>
