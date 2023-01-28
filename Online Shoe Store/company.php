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
        <link rel="stylesheet" href="css/company.css">
        <title>Company</title>
    </head>
    <body>
    
        <div class="slider">
            <h2 class="centered">MASS Shoe Store</h2>
        </div>
                                    <!-- ABOUT -->
        <div class="bottom">
            <h2>About Company</h2>
            <p>Online Shoe Store is an application which lets you buy shoes in your own comfort space, your home! All it requires from you is to choose the shoe you like and then place your order, including your details so that we can send you your order right at your doorstep! </p>
            <p>This application is created by four junior year students of CIS - NEDUET as their Complex Engineering Problem, namely Aleena Yameen, Safia Faiz, S. M. Mubashir Rizvi, and Sunyah Faisal to facilitate users with the user-friendly interface of the application and a very simple procedure of the project flow to buy a shoe online. It has several other pages which contain the information of our company, FAQs and affiliates. The user-friendly interface is created using the tools xampp and PHPMyAdmin and the programming languages PHP, HTML CSS, JavaScript.</p>
        </div>
                                    <!-- OUR IMAGES -->
        <div class="row">
            <span class="column"><img src="img/al.jpeg" alt="aleena" class="images"></span>
            <span class="column"><img src="img/saf.jpeg" alt="safia" class="images"></span>
            <span class="column"><img src="img/mub.jpeg" alt="mubashir" class="images"></span>
            <span class="column"><img src="img/sun.jpeg" alt="sunyah" class="images"></span> 
        </div>

        <br><br>
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