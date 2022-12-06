<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    
    ?>
    <html>

    <body>

        <?php
        
        if(get_cookie('user')!=''){
            
            echo get_cookie('user');
        }else{
            echo('null');
        }
        // if (!isset($_COOKIE[$cookie_name])) {
        //     echo "Cookie named '" . $cookie_name . "' is not set!";
        // } else {
        //     echo "Cookie '" . $cookie_name . "' is set!<br>";
        //     echo "Value is: " . $_COOKIE[$cookie_name];
        // }
        // if (count($_COOKIE) > 0) {
        //     echo "Cookies are enabled.";
        // } else {
        //     echo "Cookies are disabled.";
        // }
        ?>

    </body>

    </html>
</body>

</html>