<?php
//PHP code to sent contact form to both client and owner
if (isset($_POST['submit'])) { // check if user enter data
    $mailto = "tarapatel690@gmail.com"; // my id
    $from = $_POST['email'] // senders email id
    $name = $_POST['name'] // user name
    $feedbck = $_POST['feedback']
    $feedback2 = "Your Response has been recored." // this is for client
    $message = "Client Name: ". $name."Wrote the following message". "\n\n". $_POST['message']
    $message2 = "RESPECTED ". $name."\n\n" "Thank you for contacting us! We'll get back to you soon";
    $headers = "FROM: ". $from; //user email address
    $headers2 = "FROM: ". $mailto;// this will recive to client
    $result = mail($mailto, $subject, $message, $headers);//send email to website owner
    $result2 = mail($from, $subject2, $message2, $headers2);//send email to user as well
    if ($result) { // if email is submitted successfully
            echo'<script type="text/javascript">alert("Message was sent successfully. Thank You! 
            We will contact you shortly") </script>';
    }
    else {
        echo'<script type="text/javascript">alert("Submission Failed! Try again Later") </script>';
    }
        


}