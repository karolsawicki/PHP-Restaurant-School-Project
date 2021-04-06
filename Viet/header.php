<?php 
session_start();
//session_destroy();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viet Thai - Cuisine</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/viet/index.php"><img src="images/logo.jpg" class="footer-img-top"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><img src="images/motto.png" class="img text-center"></a>
                </li>



            </ul>
            <div class="nav-item active">
                <?php
                $count=0;
                if(isset($_SESSION['cart']))
                {
                    $count=count($_SESSION['cart']);
                }
                ?>
                <a href="mycart.php" class="btn btn-outline-success">Mój koszyk (<?php echo $count;?>)</a>
            </div>
        </div>
    </nav>


</body>


</html>