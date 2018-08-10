<?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $msg = $_POST['msg'];

        $to = 'info@shafest.com';
        $subject = 'Poruka od: '.$mailFrom;
        $headers = "From:" . $mailFrom;
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8";

        $txt = "Poruka sa shafest.com od: " . $name . "\n\n" . $msg;

        mail($to, $subject, $msg, $headers);
        header('Location: index.html');
    }

?>