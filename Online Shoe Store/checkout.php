<?php

function save_email(){
    $email = $_COOKIE["correctemail"];
    echo $email;

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'shoestore';

    $connect = mysqli_connect($server, $username, $password, $database);
    if (!$connect){
        die(mysqli_connect_error());
    }

    mysqli_select_db($connect, $database);

    $query = "insert into email(email) values('$email')";
    mysqli_query($connect, $query);

    return 'success';
}

?>

<!DOCTYPE HTML>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/checkout.css">
    <title>Order Confirmation</title>

    <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $ordershoename = $_COOKIE["SHOE"];
    $ordershoecolor = $_COOKIE["COLOR"];
    $ordershoesize = $_COOKIE["SIZE"];
    $ordershoeprice = $_COOKIE["PRICE"];
    $db_price = substr($ordershoeprice, 1);

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'shoestore';

    $connect = mysqli_connect($server, $username, $password, $database);
    if (!$connect){
        die(mysqli_connect_error());
    }
    mysqli_select_db($connect, $database);
    $query = "insert into orders(name, email, address, phone, shoe_name, shoe_color, shoe_size, shoe_price) 
                values('$name', '$email', '$address', '$phone', '$ordershoename', '$ordershoecolor', '$ordershoesize', '$db_price')";
    mysqli_query($connect, $query);
    ?>
</head>

<body>
                                <!-- ORDER TABLE -->
    <div class="checkoutpg"><br>
        <h1 class="orderh1"> YOUR ORDER</h1>

        <div style="overflow-x:auto;">
            <table border="2">
                <tr>
                    <th>Name</th>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <th>Phone No.</th>
                    <td><?php echo $phone; ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?php echo $address; ?></td>
                </tr>
                <tr>
                    <th>Shoe</th>
                    <td><?php echo $ordershoename ?></td>
                </tr>
                <tr>
                    <th>Color</th>
                    <td><?php echo $ordershoecolor ?></td>
                </tr>
                <tr>
                    <th>Size</th>
                    <td><?php echo $ordershoesize ?></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><?php echo $ordershoeprice ?></td>
                </tr>
            </table>
        </div><br>

        <div>
            <p class="orderMsg">Following order has been confirmed and a confirmation email has been sent to the provided email address</p>
        </div><br><br>
                                    <!-- NAVIGATION BUTTONS -->
        <div>
            <a href="index.php">
                <button class="homeButton">Home</button>
            </a>
        </div>

        <div>
            <a href="https://mail.google.com" target="_blank">
                <button class="gmailButton">Gmail</button>
            </a>
        </div>
    </div><br><br>
                            <!-- FOOTER -->
    <footer>
            <div class="footerLeft">
                <div class="footerMenu">
                    <h1 class="fMenuTitle">About Us</h1>
                    <ul class="fList">
                        <a href="company.php" style="text-decoration:None"><li class="fListItem">Company</li></a>
                        <a href="affiliates.php" style="text-decoration:None"><li class="fListItem">Affiliates</li></a>
                    </ul>
                </div>
                <div class="footerMenu">
                    <h1 class="fMenuTitle">Useful Links</h1>
                    <ul class="fList">
                        <a href="index.php" style="text-decoration:None"><li class="fListItem">Products</li></a>
                        <a href="contact.php" style="text-decoration:None"><li class="fListItem">Contact Us</li></a>
                        <a href="faq.php" style="text-decoration:None"><li class="fListItem">FAQ</li></a>
                    </ul>
                </div>
                <div>
                    <div class="footerRightMenu">
                        <h1 class="fMenuTitle">Subscribe to our newsletter</h1>
                        <div class="fMail">
                            <form>
                                <input type="email" placeholder="name@email.com" class="fInput" id=newsletter>
                                <button class="fButton" onclick = 'email_is_empty(); email_join_click()'>Join!</button>
                            </form>
                        </div>
                    </div>
                    <div class="footerRightMenu">
                        <h1 class="fMenuTitle">Follow Us</h1>
                        <div class="fIcons">
                            <a href="https://www.facebook.com/nike/" target="_blank"><img src="./img/facebook.png" alt="" class="fIcon"></a>
                            <a href="https://twitter.com/nike?lang=en" target="_blank"><img src="./img/twitter.png" alt="" class="fIcon"></a>
                            <a href="https://www.instagram.com/nike/?hl=en" target="_blank"><img src="./img/instagram.png" alt="" class="fIcon"></a>
                            <a href="https://www.snapchat.com/add/nike" target="_blank"><img src="./img/snapchat.jpg" alt="" class="fIcon"></a>
                        </div>
                    </div><br>
                    <div class="fRightMenu">
                        <span class="copyRight"> &copy; MASS2023</span>
                    </div>
                </div>
            </div>
    </footer>
    <script src="./app.js"></script>
    <script> function email_join_click() {
            var result = "<?php save_email(); ?>"
            console.log(result);
        }
    </script>
</body>
</html>