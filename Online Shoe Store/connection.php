<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'shoestore';

$connect = mysqli_connect($server, $username, $password);
if ($connect){
    $select = mysqli_select_db($connect, $database);
}
else {
    echo mysqli_error();
}


// getting newsletter data


// sending data to js file

$shoes = 'select * from shoe';
$result_shoes = mysqli_query($connect, $shoes);
$outputs_shoes =  mysqli_fetch_all($result_shoes);

?>

<script type = 'text/javascript'> var shoes_array = <?php echo json_encode($outputs_shoes); ?>; </script>
<script type = 'text/javascript' scr = 'app.js'> </script>
