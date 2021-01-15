<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      $fullName =  strip_tags(htmlspecialchars($_POST["fullName"]));
      $userMsg = isset($_POST['userText']) ? strip_tags(htmlspecialchars($_POST['userText'])) : 'Message empty';
      $mailFrom  = strip_tags(htmlspecialchars($_POST["email"]));
      $subject = "Mail from ".$fullName ; 

      $mailTo = 'info@skydream.info' ; 

      $headers = "From: ".$fullName."<".$mailFrom.">"."\r\n" ; 

      $body = "<h4>Message</h4><p>".$userMsg."</p> 
               <h4>Mail</h4><p>".$mailFrom."</p>" ;

      if (mail($mailTo, $subject, $body, $headers)) {
           
        var_dump(http_response_code(200));
        echo json_encode("ok") ;

      } else { 
           var_dump(http_response_code(503));
           echo json_encode("Mail sent error") ;
      }
    
   } else {
    var_dump(http_response_code(405));
   }

?>