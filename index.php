<?php include ('config.php');?>
<DOCTYPE html>
<html>
    <head>
        <title>My website</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="style/css/all.css" rel="stylesheet" type="text/css">
        <link href="style/css/fontawesome.min.css" rel="stylesheet" type="text/css">
        <link href="style/style.css" rel="stylesheet"/>
        <meta name="viewport" content="initial-scale=1.0;"/>
        <meta name="descriptions" content="Website description">
        <meta name="keywords" content="keywords,keywords2">
        <meta charset="utf-8"/>
    </head>

    <body>
        <?php
        
        $url=isset ($_GET['url'])? $_GET['url'] : 'home';

        switch ($url){
            case 'about':
            echo '<target target="about"/>';
            break;

            case 'services':
                echo '<target target="service"/>';
            break;
            default:
            echo '<target target="service"/>';
            break;

        }

        ?>
        <header>
            <div class="center">
                <div class="logo left"></div>

                <nav class="desktop right">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Contact us</a></li>
                    </ul>
                </nav>

                <nav class="mobile right">
                    <div class="mobile-button">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Contact us</a></li>
                    </ul>
                </nav>
                </div>
            <div class="clear"></div>
        </header>
        
        <?php
        $url=isset ($_GET['url'])? $_GET['url'] : 'home';

        if(file_exists('pages/'.$url.'.php'))
               include('pages/'.$url.'.php');
        else{
                $page_404=true;
              include('pages/404.php');
        }
        ?>

        <footer <?php if(isset($page_404)&&$page_404==true) echo 'class="fixed"';?>>   
            <div class="center">
                <p>Todos os direitos reservados</p>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="<? php INCLUDE_PATH?>js/scripts.js">
        <script src="<? php INCLUDE_PATH?>js/slider.js">
        <?php
            if($url=='contact'){
        ?>
      
        <script src='https://googleapis.com/maps/api/js?v=3.expkey=AIzaSyDggeWjv1JtKac_9DxRcFWdhWrtKstD4N4'></script>
        <script src="<? php INCLUDE_PATH?>js/map.js">
        <?php } ?>
    </body>
</html>