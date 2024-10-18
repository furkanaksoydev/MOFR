<?php

require_once "veritabani.php";

?>

<!doctype html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="Giyim Ve Kıyafet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>MOFR - Ana Sayfa</title>

        <link rel="stylesheet" type="text/css" href="css/mainmainmenu.css">
    </head>
    
    <body>
        <header>
            <div class="container-head">
                <div class="logo">
                    <a href="index.php"><img src="resimler/mofrlogo.png"></a>
                </div>
                <div class="menu">
                    <u1>
                        <li><a href="https://www.instagram.com/mofrorigin/"><img src="resimler/ins.png" width="100px;"></a></li>
                        <li class="secili"><a href="index.php">TR</a></li>
                        <li><img src="resimler/cizgimiz.png" width="20px;"></li>
                        <li><a href="index.en.php">EN</a></li>
                    </u1>
                </div>
            </div>
        </header>
        
        <div class="section-area">
            <section>
    <div class="giris">
        <img src="resimler/mofrlogo.png" alt="MOFR Logo" class="logo">
        <h2>Hoş Geldiniz</h2>
        <p>Kaliteli ürünlerin adresi</p>
    </div>
</section>


            <div class="bilgi">
                <p>Ürünlerimiz</p>
            </div>
            
            <section id="features" class="section-area">
                <div class="features-body">
                    <div class="product-container">
                        <div class="satir">
                        <?php
                        $db=new \database();
                            $myQuery=$db->TableOperations("SELECT * FROM sweatshirtler");

                            foreach($myQuery as $items)
                            {
                                ?>
                            <div class="urun">
                                    <div class="item">
                                        <img src="sweatshirtler/<?php echo $items['Urun_Resim']; ?>" style="width:200px;height: 300px">
                                            <div class="item-text">

                                                <?php

                                                $resim=$items["Urun_Resim"];
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
                <p>Hakkımızda</p>    
            </div>
            
            <section class="bilgiler satir">
                    <div class="veri">
                        <img src="resimler/ins.png" width="100px" height="100px">
                        <h3>Instagram Hesabımız</h3>
                        <p><b><a href="https://www.instagram.com/mofrorigin/" style="color: lightslategrey;">MOFR Origin</a></b></p>
                    </div>
                    <div class="veri">
                        <img src="resimler/whatsapp.png" width="100px" height="100px">
                        <h3>Yardım ve Destek İçin Numarlarımız;</h3>
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
                <h4>Hakkımızda</h4>
                <p>MOFR, tarzınıza ve ihtiyaçlarınıza uygun, yüksek kaliteli sweatshirt ve diğer giyim ürünlerini sunan lider bir yolculuk firmasıdır.</p>
            </div>
            <div class="footer-contact">
                <h4>Ürün Kalitemiz</h4>
                <p>Sitemizdeki her ürün, titizlikle seçilmiş materyallerle üretilmiş olup, şıklığı ve konforu bir arada sunmaktadır.</p>
            </div>
            <div class="footer-contact">
                <h4>Sosyal Medya</h4>
                <p>Bizi Instagram üzerinden takip ederek, modanın nabzını tutabilir ve topluluğumuzun bir parçası olabilirsiniz.</p>
            </div>
            <div class="footer-contact">
                <h4>Stilinizi Tamamlayın</h4>
                <p>Kaliteli ürünlerimiz ve müşteri odaklı hizmet anlayışımız ile sizi aramıza katılmaya davet ediyoruz.</p>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2024 MOFR. Tüm hakları saklıdır.</p>
    </div>
</footer>


    </body>
</html>