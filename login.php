<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tolgas Website - Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/business-casual.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <script src="js/jquery.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function (){

$("#login").click(function(){
    email =$("#email").val();
    password =$("#password").val();

    $.ajax({
        type: "POST",
        url: "pcheck.php",
        data: "email=" + email + "&password=" + password,
        success: function (html) {
            console.log(html);
            if (html =="true") {

                $("#add_err2").html("<div class='alert alert-success'> \
                 <strong>Login</strong> erfolgreich. </div>");

                window.location.href ="blog.php";

            } else if (html == "false"){
                
                $("#add_err2").html("<div class='alert alert-danger'> \
                <strong>Login </strong>fehlgeschlagen. </div>");
            
            }else {
                $("#add_err2").html('<div class="alert alert-danger"> \
                <strong>Fehler</strong> beim Bearbeiten der Anfrage. \ \
                </div>');
            }
            
        },
        beforeSend: function(){
            $("add_err2").html("Lädt...");
        }
    });
    return false;
    });
});
</script>
</head>

<body>

    <div class="brand">Tolgas Website</div>
    <div class="address-bar">Herzlich Willkommen</div>

    <?php require_once "nav.php"; ?>
    <div class="container">



        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <div id="add_err2">
                        <strong> Du musst eingeloggt sein, um den Blog zu lesen.</strong>
                    </div>
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Login</strong>
                    </h2>
                    <div id="add_err2"></div>
                    <hr>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Emailadresse</label>
                                <input type="email" class="form-control" id="email" name="email" maxlength="25">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Passwort</label>
                                <input type="password" class="form-control" id="password" name="password" maxlength="25">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-default" id="login">Login</button>
                            </div>
                        </div>
                    </form>
                    <a href ="register.php"><button type="submit" class="btn btn-default">Noch kein Mitglied? Registriere dich hier</button></a>
                </div>
            </div>
        </div>

    </div>
    
    <footer>

    </footer>



    <script src="js/bootstrap.min.js"></script>

</body>

</html>
