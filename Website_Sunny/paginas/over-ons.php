<!DOCTYPE html>
<html>
    <head>
        <title>Sunny Socks</title>
        <meta charset="UTF-8">
        <link href=".//CSS/Style.css" style="text/css" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php
                include ('../html/mijnheader.html');
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
                <h2 class="information_title">Onze Geschiedenis</h2>
                <img src="../img/shopping-cart.png" alt="Onze Geschiedenis" id="over_ons_geschiedenis_png">
                <p>
                    Voorbeeld Tekst<br>
                    Voorbeeld Tekst<br>
                    Voorbeeld Tekst
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