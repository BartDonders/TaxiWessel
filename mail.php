
<?php
  class Mail {
    private $to, $subject, $message, $headers;
    public function __construct($subject, $message, $sender) {
      $this->to = "info@taxiwessel.com";
      $this->subject = $subject;
      $this->message = $message;
      if($sender != null) {
        $this->headers = 'From: ' . $sender; 
      } else {
        $this->headers = null;
      }
    }
    public function send() {
      if ($this->complete()) {
        if (mail($this->to, $this->subject, $this->message, $this->headers)) {
          return true;
        } else {
          return false;
        }
      } else {
        return false;
      }
    }
    private function complete() {
      return ($this->headers != null 
              && $this->subject != null 
              && $this->message != null);
    }
  }
?>