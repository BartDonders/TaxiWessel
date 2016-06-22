<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Airport Taxi | Taxi Wessel</title>
    
    <?php $current = 'airport'; ?>
    
    <?php include 'includes/styles.php'; ?>
    
</head><!--/head-->

<body>
 <?php
    $active = 7; 
     include ('includes/header.php');
?>

    <section class="pricing-page">
        <div class="container">
            <div class="center">  
                <h2>Prijzen Aiport taxi</h2>
                <p class="lead">Bekijk hieronder onze prijzen naar de verschillende vliegvelden.</p>
                <p class="lead"><em>* Prijzen zijn enkel geldig vanaf Baarle-Nassau en omgeving.</em></p>
            </div>  
            <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-4 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>Schiphol</h1>
                                <span>Amsterdam</span>
                            </li>
                            <li>1-4 personen <strong>&euro; 115</strong></li>
                            <li>5-8 personen <strong>&euro; 125</strong></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two wow fadeInDown">
                        <ul>
                            <li class="heading-two">
                                <h1>Eindhoven Airport</h1>
                                <span>Eindhoven</span>
                            </li>
                            <li>1-4 personen <strong>&euro; 65</strong></li>
                            <li>5-8 personen <strong>&euro; 75</strong></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-three wow fadeInDown">
                        <ul>
                            <li class="heading-three">
                                <h1>Brussel Airport</h1>
                                <span>Zaventem (BE)</span>
                            </li>
                             <li>1-4 personen <strong>&euro; 115</strong></li>
                            <li>5-8 personen <strong>&euro; 125</strong></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-four wow fadeInDown">
                        <ul>
                            <li class="heading-four">
                                <h1>Brussel South Airport</h1>
                                <span>Charleroi (BE)</span>
                            </li>
                           <li>1-4 personen <strong>&euro; 185</strong></li>
                            <li>5-8 personen <strong>&euro; 195</strong></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-five wow fadeInDown">
                        <ul>
                            <li class="heading-five">
                                <h1>Flughafen K&ouml;ln-Bonn</h1>
                                <span>K&ouml;ln (DE)</span>
                            </li>
                           <li>1-4 personen <strong>&euro; 200</strong></li>
                            <li>5-8 personen <strong>&euro; 215</strong></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-six wow fadeInDown">
                        <ul>
                            <li class="heading-six">
                                <h1>Flughafen D&uuml;sseldorf</h1>
                                <span>D&uuml;sseldorf (DE)</span>
                            </li>
                            <li>1-4 personen <strong>&euro; 185</strong></li>
                            <li>5-8 personen <strong>&euro; 195</strong></li>
                        </ul>
                        </ul>
                    </div>
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->
    </section><!--/pricing-page-->
           
<?php include 'includes/footer.php'; ?>

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>