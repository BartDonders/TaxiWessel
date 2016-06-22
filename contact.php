<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact | Taxi Wessel</title>

    <?php $current = 'contact'; ?>
    
    <?php include 'includes/styles.php'; ?>
    
</head><!--/head-->

<body>
    
    <?php include 'includes/header.php'; ?>

    <section id="contact-info">
        <div class="center">
            <h2>Contacteer ons</h2>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.7313697855643!2d4.966115316123298!3d51.444727079624904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6ba5648a49815%3A0x77ec63e6b331b3c2!2sHeikant+10%2C+5111+PD+Baarle-Nassau!5e0!3m2!1snl!2snl!4v1465131170045"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Taxi Wessel</h5>
                                    <p>Heikant 10<br>
                                    5111 PD Baarle-Nassau</p>
                                    <p>Telefoon: +31 6 38 34 64 68<br>
                                    Email adres: info@taxiwessel.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2>Stuur ons een bericht</h2>
            </div>
            <div class="row contact-wrap col">
                <div class="col-sm-6">
                    <form action="mailer.php" method="post" class="contact-form">
                    <label>Naam *</label>
                    <input type="text" name="name" class="form-control" required="required">
                    <label>Email *</label>
                    <input type="text" name="sender" class="form-control" required="required">
                    <label>Onderwerp *</label>
                    <input type="text" name="subject" class="form-control" required="required">
            </div>
            <div class="col-sm-6">
                    <label>Bericht *</label>
                <textarea type="text" name="message" rows="8" class="form-control" required="required"></textarea>
                    <input type="submit" value="Versturen" class="btn btn-primary btn-lg">
                </div>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <?php include 'includes/footer.php'; ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
