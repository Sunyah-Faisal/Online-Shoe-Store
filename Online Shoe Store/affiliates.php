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
        <link rel="stylesheet" href="css/affiliates.css">
        <title>Affiliates</title>
    </head>
    <body>
        <div class="slider">
            <h2 class="centered">MASS Shoe Store</h2>
        </div>
                                    <!-- LIST OF AFFILIATES -->
        <div class="bottom"><h2>Our Affiliates</h2></div>
        <div class="row">
            <span class="column"><a href="https://www.nike.com/" target="_blank"><img src="img/nikeIcon.png" alt="Nike" class="images"></a></span>
            <span class="column"><a href="https://www.adidas.com/us" target="_blank"><img src="img/adidasIcon.png" alt="Adidas" class="images"></a></span>
            <span class="column"><a href="https://www.reebok.com/us" target="_blank"><img src="img/reebokIcon.png" alt="Reebok" class="images"></a></span>
        </div>
        <div class="row">
            <span class="column"><a href="https://www.crocs.com/" target="_blank"><img src="img/crocsIcon.png" alt="Crocs" class="images"></a></span>
            <span class="column"><a href="https://www.hushpuppies.com.pk/" target="_blank"><img src="img/hushpupIcon.png" alt="Hush Puppies" class="images"></a></span>
            <span class="column"><a href="https://www.skechers.com/" target="_blank"><img src="img/skechersIcon.png" alt="Skechers" class="images"></a></span>
        </div>
        <div class="row">
            <span class="column"><a href="https://us.puma.com/us/en/men/shoes" target="_blank"><img src="img/pumaIcon.png" alt="Puma" class="images"></a></span>
            <span class="column"><a href="https://www.clarks.co.uk/" target="_blank"><img src="img/clarkIcon.jpg" alt="clark" class="images"></a></span>
            <span class="column"><a href="https://www.gucci.com/us/en/ca/men/shoes-for-men-c-men-shoes" target="_blank"><img src="img/gucciIcon.png" alt="Gucci" class="images"></a></span> 
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