<!DOCTYPE html>
<html>
    <head>
        <title>Sunny Socks</title>
        <link rel="icon" href="../img/favicon.png" type="image/png">
        <meta charset="UTF-8">
        <link href="../CSS/Style.css" style="text/css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <?php
                include ('../html/mijnheader.html');
            ?>
                 <?php
            $backgroundColor = '#1e407a'; 

            if (isset($_POST['color'])) {
                $selectedColor = $_POST['color'];
                
                switch ($selectedColor) {
                    case 'blauw':
                        $backgroundColor = '#1e407a';
                        break;
                    case 'roze':
                        $backgroundColor = '#e990b9';
                        break;
                    case 'geel':
                        $backgroundColor = '#fecd3e';
                        break;
                    case 'rood':
                        $backgroundColor = '#fl5b39';
                        break;
                    case 'groen':
                        $backgroundColor = '#5lb2a2';
                        break;
                    default:
                        break;
                }
            }
        ?>
        </header>
        <div id="wie_zijn_wij">
            <h1>Wie zijn wij?</h1>
            <p>Wij zijn Sunny. Ons doel is om duurzame sokken te maken die goed<br>
                zijn voor mens en planeet.</p>
        </div>
        <img src="../img/sunny_logos_blue.png" id="sunny_background_logo" alt="Background Logo">
        <div id=information_grid>
            <div id="information_box_deco_top_1"></div>
            <div id="over_ons_duurzaamheid" class="information_grid-item">
                <h2 class="information_title">Duurzaamheid</h2>
                <img src="../img/hand-holding-seeding.png" alt="Duurzaamheid" id="over_ons_duurzaamheid_png">
                <p> 
                    Wij van Sunny Socks maken<br>
                    duurzame sokken die gemaakt zijn<br>
                    van katoenen uit Portugal. Dit zorgt<br>
                    ervoor dat mensen die er aan<br>
                    werken goed betaald krijgen en<br>
                    het is ook nog eens goed voor de<br>
                    aarde!
                </p>
            </div>
            <div id="information_box_deco_bottom_1"></div>
            <div id="information_box_deco_top_2"></div>
            <div id="over_ons_geschiedenis" class="information_grid-item">
                <h2 class="information_title">Verkoop wijze</h2>
                <img src="../img/shopping-cart.png" alt="Verkoopwijze" id="over_ons_geschiedenis_png">
                <p>
                Wij verkopen onze sokken via<br>
                 de webshop bol.com en <br>
                 online of in de winkel bij de hema!<br>
                </p>  
            </div>
            <div id="information_box_deco_bottom_2"></div>
            <div id="information_box_deco_top_3"></div>
            <div id="over_ons_contact" class="information_grid-item">  
                <h2 class="information_title">Contact Gegevens</h2>
                <img src="../img/circle-phone-flip.png" alt="Contact Gegevens" id="over_ons_contact_png">
                <p>
                    Adres: Van Schaikweg 94, Emmen<br>
                    Telefoonnummer: 062318493
                    Email: sunny@info.com
                </p>
                
            </div>
            <div id="information_box_deco_bottom_3"></div>
        </div>
        <footer>
            <?php
                include ('../html/footer.html');
            ?>
        </footer>
    </body>
</html>