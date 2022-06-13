<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// get connect
$connect = mysqli_connect("localhost", "malik", "HL4usghYe9VsSr", "the_net_ninja_tutorial_basic");
print_r($connect);
if ($connect) {
    echo mysqli_connect_error();
}
// make a query to "center" table on the net ninja ... database
$metode_connect = "SELECT id, email, pesan, alamat FROM center ORDER BY time";
$make_query = mysqli_query($connect, $metode_connect);
$show_query_result_to_array = mysqli_fetch_all($make_query, MYSQLI_ASSOC);
echo "<pre>";
print_r($show_query_result_to_array);
echo "</pre>";
//$ = $make_query

?>
</body>
</html>