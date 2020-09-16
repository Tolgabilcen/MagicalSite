<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tolgas Website - Startseite</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/business-casual.css" rel="stylesheet">


    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="brand">Tolgas Website</div>
    <div class="address-bar">Herzlich Willkommen!</div>


    <?php 
    if (isset($_GET["logout"])){
        if($_GET["logout"]==true){ ?>

            <div class ="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Du wurdest erfolgreich ausgeloggt.</strong>
            </div>
    <?php
        }
    }
    
    ?>

    <?php require_once "nav.php"; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">

                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

 
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/karussel1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/karussel2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/karussel3.jpg" alt="">
                            </div>
                        </div>


                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Willkommen bei</small>
                    </h2>
                    <h1 class="brand-name">meinem Webprojekt</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Tolga Bilcen</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Kurze Vorstellung</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/homeimg.jpg" alt="">
                    <hr class="visible-xs">
                    <p id="introduce">Lieber Besucher, du bist auf meiner Seite gelandet, weil du vermutlich einen Hinweis über WhatsApp oder anderen Wegen bekommen hast. In 90% der Fälle kennen wir uns. Für den Fall,
                    dass du das erste Mal von mir hörst, möchte ich mich einmal kurz vorstellen.
                    Ich bin 28 Jahre alt, bin in Berlin geboren und wohne auch seitdem hier. Neben meinem Studium habe ich mich in einem Nebenjob als Vertriebler ausbilden lassen.
                    Mein Leben als Vertriebler habe ich inzwischen hinter mir gelassen und durchlaufe nun die Karriere eines Webentwicklers.
                    <br>Nebenbei beschäftige ich mich auch mit Kartentricks, um vielen Menschen auf Partys oder unterwegs
                    eine Freude zu bereiten!
                    <br><br>Du möchtest noch mehr von mir kennenlernen? Über die Kontaktanfrage darfst du mich gerne kontaktieren, dann können wir in einen gemeinsamen Austausch gehen!</p>
                </div>
            </div>
        </div>

    </div>


    <footer>

    </footer>


    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>


    <script>
    $('.carousel').carousel({
        interval: 5000 
    })
    </script>

</body>

</html>
