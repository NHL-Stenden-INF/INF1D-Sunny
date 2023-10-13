<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sunny Socks</title>
        <link rel="icon" href="../img/favicon.png" type="image/png">
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
                    <div class="titletext">Striped socks</div>
                    <div class="sunnytekst">Sunny</div>
                    <hr class="streep">
                    <div class="kleur">Kleur</div>
                    <div class="kleuren">
                        <form method="post" action="">
                            <button type="submit" name="color" value="blauw" class="box_blauw"></button>
                            <button type="submit" name="color" value="roze" class="box_roze"></button>
                            <button type="submit" name="color" value="geel" class="box_geel"></button>
                            <button type="submit" name="color" value="rood" class="box_rood"></button>
                            <button type="submit" name="color" value="groen" class="box_groen"></button>
                         </form>
                    </div>
                        <div><a href="waar-te-koop.php"><button class="koopknop" type="imput">Nu kopen</button></a></div>
                    <hr class="streep">
                    <div class="productinfotitel">Productinfo</div>
                    <div class="productinfo">Het originele design van sunny socks dit desgin bevat 2 strepen boven aan de sok en een witte hak.
                         Het is een duurzame sok gemaakt door katoen afkomstig uit Portugal.</div>
                </div>
            </div>
            <div class="boxes"></div>
                <div class="boxes">
                    <?php
                        $imagePath = '../img/stripedblauwproduct.png';
                        $geslecteerdekleur = 'blauw';
                        if(isset($_POST['color'])){ 
                        $geslecteerdekleur = $_POST['color'];
                        $imagePath ="../img/" . getImagePathForColor($geslecteerdekleur);
                        $buttonClass = "box_" . $geslecteerdekleur;
                        }


                        function getImagePathForColor($color) {
                        $imagePaths = [
                            'blauw' => 'stripedblauwproduct.png',
                            'roze' => 'stripedrozeproduct.png',
                            'geel' => 'stripedgeelproduct.png',
                            'rood' => 'stripedroodproduct.png',
                            'groen' => 'stripedgroenproduct.png',   
                        ];

                        return $imagePaths[$color];
                        }
                        echo '<img src="' . $imagePath . '" alt="' . $geslecteerdekleur . '" class="img">';
                    ?>
                </div>
            </div>
            <div class="pijltekst">Uni socks
                <div>
                  <a href="producten.php"><i><img src="../img/pijlnaarsokken.png" alt="pijl" class="pijl"></i></a>
                </div>
            </div>
        <footer>
            <?php
                include ('../html/footer.html');
            ?>
        </footer>
    </body>
</html>