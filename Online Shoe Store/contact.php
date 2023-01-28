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
        <link rel="stylesheet" href="css/contact.css">
        <title>Contact Us</title>
    </head>
    <body>
                                <!-- CONTACT LINKS -->
        <div class="slider">
            <h2 class="centered">MASS Shoe Store</h2>
        </div>
        
        <div>
            <div class="bottom"><h2>Contact Us</h2></div>
            <div class="contactbg">
                <div><table border="0">
                    <br><br><br>
                    <tr>
                        <th><img src="img/email.png" style="height: 25px; width: 25px; background-color: lightgray" alt="Email"></th>
                        <td><a class="contactlink" href="mailto:mass@gmail.com" style="text-decoration: None" target="_blank">mass@gmail.com</a></td>
                    </tr>
                    <tr>
                        <th><img src="img/phone.png" style="height: 25px; width: 25px; background-color: lightgray"></th>
                        <td>99-261-261</td>
                    </tr>
                    <tr>
                        <th><img src="img/facebook.png" style="height: 25px; width: 25px; background-color: lightgray" alt="Facebook"></th>
                        <td><a class="contactlink" href="https://www.facebook.com/nike/" style="text-decoration: None" target="_blank">MASS Shoe Store</a></td>
                    </tr>
                </table></div>
                <div><table border="0">
                    <br><br><br>
                    <tr>
                        <th><img src="img/twitter.png" style="height: 25px; width: 25px; background-color: lightgray" alt="Twitter"></th>
                        <td><a class="contactlink" href="https://twitter.com/nike?lang=en" style="text-decoration: None" target="_blank">MASS Shoe Store</a></td>
                    </tr>
                    <tr>
                        <th><img src="img/instagram.png" style="height: 25px; width: 25px; background-color: lightgray" alt="Instagram"></th>
                        <td><a class="contactlink" href="https://www.instagram.com/nike/?hl=en" style="text-decoration: None" target="_blank">MASS Shoe Store</a></td>
                    </tr>
                    <tr>
                        <th><img src="img/snapchat.jpg" style="height: 25px; width: 25px; background-color: lightgray" alt="Snapchat"></th>
                        <td><a class="contactlink" href="https://www.snapchat.com/add/nike" style="text-decoration: None" target="_blank">MASS Shoe Store</a></td>
                    </tr>
                </table></div>
            </div>
                                        <!-- MAP -->
            <div class="bottom">
                <p style="font-size: 22px"><b>Visit</b></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7235.969794229265!2d67.10902877505646!3d24.932584415057722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338bf22becb0f%3A0xd5e50842c5c4867b!2sNED%20University%20Of%20Engineering%20%26%20Technology%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1662369897454!5m2!1sen!2s" width="1100" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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