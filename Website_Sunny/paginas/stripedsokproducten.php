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
                            <button type="submit" name="kleur" value="blauw" class="box_blauw"></button>
                            <button type="submit" name="kleur" value="roze" class="box_roze"></button>
                            <button type="submit" name="kleur" value="geel" class="box_geel"></button>
                            <button type="submit" name="kleur" value="rood" class="box_rood"></button>
                            <button type="submit" name="kleur" value="groen" class="box_groen"></button>
                         </form>
                    </div>
                    <div id="foto_telefoon"class="boxes">
                    <?php
                        //standaart foto instellen als je de pagina inlaad
                        $fotopad = '../img/stripedblauwproduct.png';
                        $geslecteerdekleur = 'blauw';

                        //if statement die kijkt welke knop er is gedrukt en welke value daarbij hoort
                        if(isset($_POST['kleur'])){ 
                        $geslecteerdekleur = $_POST['kleur'];
                        //pad naar de map waar de foto's instaan instellen
                        $fotopad ="../img/" . getImagePathForColor($geslecteerdekleur);
                        $knopclass = "box_" . $geslecteerdekleur;
                        }

                        //kleuren linken aan foto
                        function getImagePathForColor($kleur) {
                        $fotopad = [
                            'blauw' => 'stripedblauwproduct.png',
                            'roze' => 'stripedrozeproduct.png',
                            'geel' => 'stripedgeelproduct.png',
                            'rood' => 'stripedroodproduct.png',
                            'groen' => 'stripedgroenproduct.png',   
                        ];

                        return $fotopad[$kleur];
                        }
                        //foto veranderen naar de juiste kleur
                        echo '<img src="' . $fotopad . '" alt="' . $geslecteerdekleur . '" class="img">';
                    ?>
                </div>
                        <div><a href="waar-te-koop.php"><button class="koopknop" type="imput">Nu kopen</button></a></div>
                    <hr class="streep">
                    <div class="productinfotitel">Productinfo</div>
                    <div class="productinfo"><p>Het nieuwste design van sunny socks de uni sock.<br> 
                    Dit is een confortable sok<br> gemaakt van duurzaam katoen afkomstig uit Portugal.<p></div>
                </div>
            </div>
                <div id="foto"class="boxes">
                    <?php
                            //standaart foto instellen als je de pagina inlaad
                            $fotopad = '../img/stripedblauwproduct.png';
                            $geslecteerdekleur = 'blauw';

                            //if statement die kijkt welke knop er is gedrukt en welke value daarbij hoort
                            if(isset($_POST['kleur'])){ 
                            $geslecteerdekleur = $_POST['kleur'];
                            //pad naar de map waar de foto's instaan instellen
                            $fotopad ="../img/" . getImagePathForColor($geslecteerdekleur);
                            $knopclass = "box_" . $geslecteerdekleur;
                            }
                            //foto veranderen naar de juiste kleur
                            echo '<img src="' . $fotopad . '" alt="' . $geslecteerdekleur . '" class="img">';
                        ?>
                </div>
            </div>
            <div class="pijltekst">Uni socks
                <div>
                  <a href="producten.php"><i><img src="../img/navigatiepijl_groen.png" alt="pijl" class="pijl"></i></a>
                </div>
            </div>
        <footer>
            <?php
                include ('../html/footer.html');
            ?>
        </footer>
    </body>
</html>