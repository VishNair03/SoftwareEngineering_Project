<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Airnest - Cancel</title>
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
        <style>
            @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
            @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
        </style>
        <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
        <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
        <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
    </head>
    <body>
        <header class="site-header" id="header">
            <h1 class="site-header__title" data-lead-id="site-header-title">Cancel in Progress...</h1>
        </header>

        <div class="main-content">
            <!-- <i class="fa fa-check main-content__checkmark" id="checkmark"></i> -->
            <p class="main-content__body" data-lead-id="main-content-body">We've sent an email to the one you provided with the next steps on canceling your flight.</p>
        </div>
        
        <?php
            $name   = $_POST['name']; 
            $ref    = $_POST['ref'];

            // Database Connection
            $conn = new mysqli('localhost', 'root', 'password', 'airnest');
            if ($conn->connect_error) {
                die('An error occurred: '.$conn->connect_error);
                echo "IT DIDNT WORKED!?";
            } else {
                $stmt = $conn->prepare("insert into cancel(email, reference_number) values(?, ?)");
                $stmt->bind_param("si", $email, $ref);
                $stmt->execute();
                $stmt->close();
                $conn->close();
                echo "IT WORKED?";
            }
        ?>
    </body>
</html>