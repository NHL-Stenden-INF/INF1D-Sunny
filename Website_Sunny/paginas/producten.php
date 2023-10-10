<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sunny Socks</title>
        <meta charset="UTF-8">
        <link href="../css/style.css" style="text/css" rel="stylesheet">
    </head>
    <body>
      <header>
            <?php
                include('../HTML/mijnheader.html');
            ?>
        </header>
        <div class="box">
            <div class="boxes">
                <div class="infosok">
                    <div class="titletext">Uni socks</div>
                    <div class="sunnytekst">Sunny</div>
                    <hr class="streep">
                    <div class="kleur">Kleur</div>
                    <div class="kleuren">
                        <button class="box_blauw"></button>
                        <button class="box_roze"></button>
                        <button class="box_geel"></button>
                        <button class="box_rood"></button>
                        <button class="box_groen"></button>
                    </div>
                        <div><a href="waar-te-koop.php"><button class="koopknop" type="imput">Nu kopen</button></a></div>
                    <hr class="streep">
                    <div class="productinfotitel">Productinfo</div>
                    <div class="productinfo">Het nieuwste design van sunny socks de uni sock. 
                    Dit is een confortable sok gemaakt van duurzaam katoen afkomstig uit Portugal.</div>
                </div>
            </div>
            <div class="boxes"></div>
            <div class="boxes">
                <img src="../img/sokblauw_product.png" alt="groenesok" class="img">
            </div>
        </div>
        <?php
        ?>
        <footer>
            <?php
                include ('../html/footer.html');
            ?>
        </footer>
    </body>
</html>