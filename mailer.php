<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact | Taxi Wessel</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <?php include 'includes/header.php'; ?>

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <div class="jumbotron">   
                    <?php
                      require 'mail.php';

                      $mail = new Mail($_POST['subject'], $_POST['message'], $_POST['sender']);

                      if ($mail->send()) {
                        if (isset($_POST['name'])) {
                          print_success($_POST['name']);
                        } else {
                          print_success();
                        }
                      } else {
                        print_fail();
                      }

                      function print_success($name) {
                          echo "<p>" . $name . ", bedankt voor je berichtje. We zullen zo spoedig mogelijk contact met je opnemen.</p>";
                      }

                      function print_succes() {
                          echo "<p>Bedankt voor je berichtje. We zullen zo spoedig mogelijk contact met je opnemen.</p>";
                      }

                      function print_fail() {
                          echo "Helaas er is iets mis gegaan. Probeer het nogmaals.";
                      }
                    ?>
                </div>
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