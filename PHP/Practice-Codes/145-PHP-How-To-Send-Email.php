<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title></title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    Email : <input type="text" name="email"><br><br>

    Subject : <input type="text" name="subject"><br><br>

    Message: <textarea name="message" rows="15" cols="10"></textarea>

    <input type="submit" name="esubmit">
</form>

</body>
</html>

<?php

// NOTE That -:
// for send the message we have to first make the mailing server

// mail(to, subject, message, headers);
//to => Receiver email id
//subject => for title
// message => message that have to send
// headers => Sender, we write our email and also we can write Cc(Carbon Copy => also send the copy to other), Bcc(Blind Carbon Copy => also send the copy to other without tell to main receiver(abstract from the receiver))

/* Form Data  */

if(isset($_POST['esubmit'])){
    $to = $_POST['email']; 
    $subject = $_POST['subject'];
    $message = $_POST['message'];
}

// $to = "xyz@gmail.com, xyz1@gmail.com, xyz3@gmail.com";  // => for multiple use commas
// $subject = "Test";
// $message = "Testing message";
$from = "abc@gmail.com";
//  $headers = "From: $from"; => only from
//we can also write cc, bcc, MIME =>data we send it is in which format => for this first add MIME-Version and Content-type also add charset in this
// NOTE That -: we can't send headers as a array we have to first make a string
$headers = [
      "From: $from",
      "Cc: $from",
      "Bcc: $from",
      "MIME-Version: 1.0",
      "Content-type: text/plain; charset=utf-8",
];  

//covert to string \r\n for next line
$headers = implode("\r\n", $headers);

if(mail($to, $subject, $message, $headers)){
    echo "Mail Sent <br>";
}
else{
    echo "Mail nor sent";
}

?>