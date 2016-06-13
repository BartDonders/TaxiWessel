<html>
  <head>
  </head>
  <body>
    <?php
      require 'mail.php';

      if (isset($_POST['subject'])) {
        $subject = $_POST['subject'];
      } else {
        $subject = null;
      }

      if (isset($_POST['message'])) {
        $message = $_POST['message'];
      } else {
        $message = null;
      }

      if (isset($_POST['sender'])) {
        $sender = $_POST['sender'];
      } else {
        $sender = null;
      }

      $mail = new Mail($subject, $message, $sender);

      if ($mail->send()) {
        if (isset($_POST['name'])) {
          echo '<h1>Thank you, ' . $_POST['name'] . " your email is sent";
        } else {
          echo '<h1>Mail is send</h1>';
        }
      } else {
        echo "<h1>Unable to send mail</h1>";
      }
    ?>
  </body>
</html>