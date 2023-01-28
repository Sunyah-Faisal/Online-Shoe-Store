<?php
include_once('connection.php');

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
    <link rel="stylesheet" href="css/index.css">
    <title>Online Shoe Store</title>
</head>

<body>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <img src="./img/sneakers.png" alt="">
            </div>
            <div class="navItem">
                <span class="limitedOffer">Limited Offer!</span>
            </div>
        </div>
        <div class="navBottom">
            <h3 class="menuItem">AIR FORCE</h3>
            <h3 class="menuItem">JORDAN</h3>
            <h3 class="menuItem">BLAZER</h3>
            <h3 class="menuItem">CRATER</h3>
            <h3 class="menuItem">HIPPIE</h3>
            <h3 class="menuItem">DUNK LOW</h3>
            <h3 class="menuItem">AIR MAX</h3>
            <h3 class="menuItem">BLAZER MID</h3>
        </div>
    </nav>

    <div class="slider" id = "airforce">            <!-- WEBSITE SLIDER SHOWING SHOES -->
        <div class="sliderWrapper">

            <div class="sliderItem">
                <?php
                $sql = 'select * from shoe where name = "Air Force" ';
                $result_air = mysqli_query($connect, $sql);
                while ($rows = mysqli_fetch_array($result_air))
                    {    
                ?>

                <img src=<?php echo $rows['image1']; ?> alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR FORCE</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">$<?php echo $rows['price']; ?></h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
                
                <?php } ?>
            </div>
            
            
            <div class="sliderItem" id = "airjordan">
                <?php
                $sql = 'select * from shoe where name = "Jordan" ';
                $result_jordan = mysqli_query($connect, $sql);
                while ($rows = mysqli_fetch_array($result_jordan))
                    {    
                ?>

                <img src=<?php echo $rows['image1']; ?> alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR JORDAN</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">$<?php echo $rows['price']; ?></h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>

                <?php } ?>
            </div>


            <div class="sliderItem" id = "blazer">
                <?php
                $sql = 'select * from shoe where name = "Blazer" ';
                $result_blazer = mysqli_query($connect, $sql);
                while ($rows = mysqli_fetch_array($result_blazer))
                    {    
                ?>

                <img src=<?php echo $rows['image1']; ?> alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">BLAZER</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">$<?php echo $rows['price']; ?></h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>

                <?php } ?>
            </div>


            <div class="sliderItem" id = "crater">
                <?php
                $sql = 'select * from shoe where name = "Crater" ';
                $result_crater = mysqli_query($connect, $sql);
                while ($rows = mysqli_fetch_array($result_crater))
                    {    
                ?>

                <img src=<?php echo $rows['image1']; ?> alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">CRATER</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">$<?php echo $rows['price']; ?></h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>

                <?php } ?>
            </div>


            <div class="sliderItem" id = "hippie">
                <?php
                $sql = 'select * from shoe where name = "Hippie" ';
                $result_hippie = mysqli_query($connect, $sql);
                while ($rows = mysqli_fetch_array($result_hippie))
                    {    
                ?>

                <img src=<?php echo $rows['image1']; ?> alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">HIPPIE</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">$<?php echo $rows['price']; ?></h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>

                <?php } ?>
            </div>


            <div class="sliderItem" id = "dunklow">
                <?php
                $sql = 'select * from shoe where name = "Dunk Low" ';
                $result_dunklow = mysqli_query($connect, $sql);
                while ($rows = mysqli_fetch_array($result_dunklow))
                    {    
                ?>

                <img src=<?php echo $rows['image1']; ?> alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">DUNK LOW</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">$<?php echo $rows['price']; ?></h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>

                <?php } ?>
            </div>


            <div class="sliderItem" id = "airmax">
                <?php
                $sql = 'select * from shoe where name = "Air Max" ';
                $result_airmax = mysqli_query($connect, $sql);
                while ($rows = mysqli_fetch_array($result_airmax))
                    {    
                ?>

                <img src=<?php echo $rows['image1']; ?> alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR MAX</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">$<?php echo $rows['price']; ?></h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>

                <?php } ?>
            </div>


            <div class="sliderItem" id = "blazermid">
                <?php
                $sql = 'select * from shoe where name = "Blazer Mid" ';
                $result_blazermid = mysqli_query($connect, $sql);
                while ($rows = mysqli_fetch_array($result_blazermid))
                    {    
                ?>

                <img src=<?php echo $rows['image1']; ?> alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">BLAZER MID</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">$<?php echo $rows['price']; ?></h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>

                <?php } ?>
            </div>

        </div>
    </div>                  
   
    <div class="features">                  <!-- WEBSITE FEATURES -->
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free worldwide shipping on all orders.</span>
        </div>

        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDesc">No question return and easy refund in 14 days.</span>
        </div>

        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle">CONTACT US!</span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div>          

                                            <!-- PRODUCT DESCRIPTION -->
    <div class="product" id="product">
        <img src="" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle"></h1>
            <h2 class="productPrice"></h2>
            <p class="productDesc"></p>
            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>
            <div class="sizes">
                <div class="size">42</div>
                <div class="size">43</div>
                <div class="size">44</div>
            </div>
            <button class="productButton">BUY NOW! &#8594; </button>
        </div>

                                            <!-- CHECKOUT INFO -->
        <div class="payment">
            <h1 class="payTitle">Personal Information</h1>
            <form action="checkout.php" method='post'>
                <div>
                    <label>Full Name</label>            
                    <input type="text" placeholder="John Doe" class="payInput" required name="name" minlength="3">
                </div>

                <div>
                    <label>Email</label>            
                    <input type="email" placeholder="johndoe@gmail.com" class="payInput" required name="email" minlength="7">
                </div>
                
                <div>
                    <label >Phone Number</label>            
                    <input type="number" placeholder="0300 2345678" class="payInput" id="phoneNo" required name="phone" minlength= "11" maxlength="11">
                </div>
                
                <div>
                    <label>Address</label>            
                    <input type="text" placeholder="Elton St 21 22-145" class="payInput" required name="address" minlength="10">
                </div>
                
                <h1 class="payTitle">Card Information</h1>
                
                <div class="cardIcons">
                    <img src="./img/visa.png" width="40" alt="" class="cardIcon">
                    <img src="./img/master.png" alt="" width="40" class="cardIcon">
                </div>
                
                <input type="number" class="payInput" id="cardNo" placeholder="Card Number" required name="card" minlength= "16" maxlength="16">
                <div class="cardInfo">
                    <input type="number" placeholder="mm" class="payInput sm" required name="expmonth" min="1" max="12">
                    <input type="number" placeholder="yyyy" class="payInput sm" required name="expyear" min="2023" max="2028">
                    <input type="number" placeholder="cvv" class="payInput sm" required name="cvv" min="100" max="999">
                </div>
                <input class="payButton" type="submit" value="Checkout">
                <span class="close">X</span>
            </form>
            
        </div>
    </div>

                                            <!-- GALLERY -->
    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">Be Yourself!</h1>
            <img src="https://images.pexels.com/photos/9295809/pexels-photo-9295809.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
            <img src="https://images.pexels.com/photos/1040427/pexels-photo-1040427.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImg">
            <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Just Do it!</h1>
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImg">
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/4753986/pexels-photo-4753986.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm">WINTER NEW ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="nsImg">
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
        </div>
        <div class="footerRight">
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
    </footer>
    <script src="./app.js"></script>
    <script> function email_join_click() {
        var result = "<?php save_email(); ?>"
        console.log(result);
    }
    </script>
</body>

</html>