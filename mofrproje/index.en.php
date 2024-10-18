<?php

require_once "veritabani.php";

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="Clothing And Outfit">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>MOFR - Home Page</title>

        <link rel="stylesheet" type="text/css" href="css/mainmainmenu.css">
    </head>
    
    <body>
        <header>
            <div class="container-head">
                <div class="logo">
                    <a href="index.en.php"><img src="resimler/mofrlogo.png"></a>
                </div>
                <div class="menu">
                    <u1>
                        <li><a href="https://www.instagram.com/mofrorigin/"><img src="resimler/ins.png" width="100px;"></a></li>
                        <li class="secili"><a href="index.en.php">EN</a></li>
                        <li><img src="resimler/cizgimiz.png" width="20px;"></li>
                        <li><a href="index.php">TR</a></li>
                    </u1>
                </div>
            </div>
        </header>
        
        <div class="section-area">
            <section>
                <div class="giris">
                    <img src="resimler/mofrlogo.png" alt="MOFR Logo" class="logo">
                    <h2>Welcome</h2>
                    <p>Your source for quality products</p>
                </div>
            </section>

            <div class="bilgi">
                <p>Our Products</p>
            </div>
            
            <section id="features" class="section-area">
                <div class="features-body">
                    <div class="product-container">
                        <div class="satir">
                        <?php
                        $db = new \database();
                        $myQuery = $db->TableOperations("SELECT * FROM sweatshirtler");

                        foreach ($myQuery as $items) {
                            ?>
                            <div class="urun">
                                <div class="item">
                                    <img src="sweatshirtler/<?php echo $items['Urun_Resim']; ?>" style="width:200px;height: 300px">
                                    <div class="item-text">
                                        <?php
                                        echo "<br>".$items["Urun_Marka"]."<br><br>".$items["Urun_Fiyat"]." TL";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </section>

            <div class="bilgi">
                <p>About Us</p>    
            </div>
            
            <section class="bilgiler satir">
                <div class="veri">
                    <img src="resimler/ins.png" width="100px" height="100px">
                    <h3>Our Instagram Account</h3>
                    <p><b><a href="https://www.instagram.com/mofrorigin/" style="color: lightslategrey;">MOFR Origin</a></b></p>
                </div>
                <div class="veri">
                    <img src="resimler/whatsapp.png" width="100px" height="100px">
                    <h3>Our Support Numbers:</h3>
                    <p><a href="https://wa.me/905468013469" style="color: lightslategrey;"><b>Metin Oktay Çatalbaş</b></a></p>
                    <p><a href="https://wa.me/905060678915" style="color: lightslategrey;"><b>Furkan Aksoy</b></a></p>
                    <p><a href="https://wa.me/905469423899" style="color: lightslategrey;"><b>Recep Turan</b></a></p>
                </div>
            </section>
        </div>

        <footer>
            <div class="footer-container">
                <div class="footer-logo">
                    <img src="resimler/mofrlogo.png" alt="MOFR Logo" width="150px">
                </div>
                <div class="footer-info">
                    <div class="footer-contact">
                        <h4>About Us</h4>
                        <p>MOFR is a leading travel company that offers high-quality sweatshirts and other clothing products suitable for your style and needs.</p>
                    </div>
                    <div class="footer-contact">
                        <h4>Product Quality</h4>
                        <p>Every product on our site is made from carefully selected materials, offering elegance and comfort together.</p>
                    </div>
                    <div class="footer-contact">
                        <h4>Social Media</h4>
                        <p>Follow us on Instagram to keep up with the latest trends and be a part of our community.</p>
                    </div>
                    <div class="footer-contact">
                        <h4>Complete Your Style</h4>
                        <p>We invite you to join us with our quality products and customer-oriented service approach.</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2024 MOFR. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
