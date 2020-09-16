<?php
session_start();

if(isset($_SESSION["login"])){
    $fname = $_SESSION["fname"];
    $lname = $_SESSION["lname"];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tolgas Website - Blog</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/business-casual.css" rel="stylesheet">


    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="brand">Tolgas Website</div>
    <div class="address-bar">Herzlich Willkommen!</div>


    <?php require_once "nav.php"; ?>

    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <h2 class="text-center">Willkommen <?php echo $fname; echo" "; echo$lname; ?> - 
                <a href="logout.php"> Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">Mein 
                        <strong>Blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/blog1.jpg" alt="">
                    <h2>Aller Anfang ist schwer
                        <br>
                        <small>09.August 2020</small>
                    </h2>
                        <p>Inzwischen habe ich mir über Freecodecamp und Udemy die Grundlagen für Frontend und Backend erarbeiten können.
                        Damit ich dieses Wissen auch festige, habe ich entschieden diese Website aufzubauen. Die Datenbank ist Dank Udemy
                        auch schon eingerichtet und wartet nur noch darauf mit Mitgliedern gefüllt zu werden. 
                        </p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Mehr lesen</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/blog2.jpg" alt="">
                    <h2>Erste Erfolge
                        <br>
                        <small>23.August 2020</small>
                    </h2>
                    <p>Nach langem Tippen, Ausprobieren und Debuggen habe ich es endlich geschafft. Inzwischen können nur noch eingeloggte
                        Mitglieder auf meinen Blog. Ich würde es nicht nochmal zu 100% aus dem Kopf hinbekommen, aber inzwischen weiß ich,
                        wo ich die relevanten Informationen finden kann.</p>

                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Mehr lesen</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Blog3.jpg" alt="">
                    <h2>Geschafft!
                        <br>
                        <small>09.September 2020</small>
                    </h2>
                    <p>Ich habe es geschafft! Die Seite ist komplett fertig! Sie kann heute endlich online gestellt werden. Nachdem ich das Backend fertig gemacht habe,
                        musste ich  mich noch um ein paar Feinschliffe kümmern. Ich bin immer noch begeistert, dass ich das Ganze in einem Monat geschafft habe,
                        während ich noch einem Hauptjob nachgehe. 
                    </p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Mehr lesen</button>                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Älter</a>
                        </li>
                        <li class="next"><a href="#">Neuer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">


            <div class ="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Herausforderungen</h3>
            </div>
            <div class="modal-body">
                <p>Hier kommen hin und wieder Zusatzinformationen rein, damit die Seite nicht ewig lang wird.
                    Beim Lernen ist mir zum Beispiel aufgefallen, dass ich mit entspannter Musik viel produktiver bin,
                    als mit aufregendem Rock oder Metal oder überhaupt gar keiner.
                    Inzwischen habe ich mir ein schönes Theme rausgesucht, bei dem ich alles nach meinen Vorstellungen
                    anpassen kann. </p>
                    <p>Ich habe noch ziemlich Respekt vor der Einrichtung des Logins. Da werde ich wohl hin
                    und wieder zum Kurs zurückgehen und schauen, wie der Dozent das gemacht hat.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class=" btn btn-default" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
    </div>

    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">


            <div class ="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Erste Erfolge</h3>
            </div>
            <div class="modal-body">
                <p>An sich ist es ja recht simpel: Ich muss nur eine Datenbankabfrage starten und schauen, ob diese Person sich authentifiziert hat. 
                    Falls das geschehen ist, wird der entsprechende Content gezeigt, ansonsten bekommt der Benutzer eine Fehlermeldung
                    angezeigt.</p>
                    <p>Das Debugging stellte mich vor anfänglichen Schwierigkeiten. Beim Frontend kann man sofort visuell erkennen, was
                        funktioniert und was nicht. Beim Backend musste ich erstmal verstehen, wo ich Outputs in die Konsole generieren kann,
                        bei denen ich auch verstehe, wo das Programm sich aufhängt und wo nicht. Stellt sich heraus, dass ich hier und da Tippfehler
                        und bei einigen anderen Fehlern die Variablen falsch gesetzt habe. Es ist und bleibt ein stetiger Lernprozess.
                        Zumindest ist das jetzt abgehakt!
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class=" btn btn-default" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
    </div>
        <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
 
                </div>
            </div>
        </div>

        <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">


            <div class ="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Was steht als nächstes an?</h3>
            </div>
            <div class="modal-body">
                <p>Ich konnte Google-Maps problemlos einbinden und dafür sorgen, dass Leute mich über ein Kontaktformular kontaktieren
                    können. Falls du eine Idee hast, was ich noch hinzufügen sollte, dann bitte her damit! Diese Website soll für mich 
                    ein Sandkasten sein, in dem ich viel ausprobere und lerne. Ich danke dir, dass du mich auf dieser Reise bis hierhin begleitet
                    hast! </p>
                <p>Es stehen noch zwei weitere Projekte an. Zum einen möchte ich eine Website basteln, die für Smartphones optimiert ist. 
                    Diese hier ist ja eher noch für Desktoprechner gedacht und jeder weiß, dass Smartphones einen Großteil der Nutzer abbilden.
                    Wenn ich damit fertig bin, ist als nächstes ein Projekt über Wordpress dran. Ich denke dass es sehr hilfreich für meine berufliche Zukunft sein wird,
                    wenn ich den Umgang damit lerne.
                    Sobald ich damit durch bin, lerne ich ein Framework (Angular, Vue, React,...?) Das wird noch ein Weilchen dauern, aber
                    da komme ich auf jeden Fall hin!
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class=" btn btn-default" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
    </div>
        <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                </div>
            </div>
        </div>


        <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                </div>
            </div>
        </div>


        
    </footer>


    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

    }else {
        header("location:login.php");
    }
    ?>