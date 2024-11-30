<html>
    <body>
    <?php
        $to_email = "dhvani.parikh15@gmail.com";
        $subject = "Simple Email Test via PHP";
        $body = "Hi, This is test email send by PHP Script";
        $headers = "From: dhvani.parikh15@gmail.com";

        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
        } else {
            echo "Email sending failed...";
            ini_set("error_reporting", E_ALL);
            print_r(error_get_last());
        }
    ?>
    </body>
</html>