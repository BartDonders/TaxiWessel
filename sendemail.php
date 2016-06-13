<?php

if (isset($_POST["send"])) {
   $name = $_POST["name"];
   $email = $_POST["email"];
   $subject = $_POST["subject"];
   $message = $_POST["message"];

   $errors = array();


   $email_matcher = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*" .

   "@" .

   "[a-z0-9-]+" .

   "(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

   if (preg_match($email_matcher, $email) == 0) {

     array_push($errors, "You did not enter a valid email address");
   }


   if (count($errors) == 0) {

    $to = "email@example.com"; 
    $subject = "[From My Web] " . $subject;
    $from = $name . " <" . $email . ">";
    $headers = "From: " . $from;
    header("location:thank_you.php");


    if (!mail($to, $subject, $message, $headers)) {
      array_push($errors, "Mail failed to send.");
       }
      }


     }

?>


<?php foreach($errors as $error):?>
    <p class="layer-content">
    <?php echo $error;?>
    </p>
<?php endforeach;?>