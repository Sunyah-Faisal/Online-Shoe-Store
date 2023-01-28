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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/faq.css">
        <title>FAQ</title>
    </head>
    <body>
        <div class="slider">
            <h2 class="centered">MASS Shoe Store</h2>        
        </div>
                                    <!-- QUES/ANS -->
        <div>
            <h2 class="head">Frequently Asked Questions FAQs </h2>
            <p class="bottom">How can I pay?</p>
            <p class="bottom">You can pay using your Credit/Debit Card/PayPal</p>
            <br><br>
            <p class="bottom">In how much time will I receive my order?</p>
            <p class="bottom">You will receive your order in 3-5 working days.</p>
            <br><br>
            <p class="bottom">How safe is using credit/debit card?</p>
            <p class="bottom">All the monetary transactions from internet banking and Debit/ Credit Card on our website are absolutely secure with the advanced security technology of the internet. Your transaction is processed on our website through secure gateways that are handled by reputed banks.</p>
            <br><br>
            <p class="bottom">How to contact customer care?</p>
            <p class="bottom">You can contact Customer Care by using the links mentioned in <a href="contact.php" style="text-decoration: None">Contact</a> section.</p>
            <br><br>
        </div>
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