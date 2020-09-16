<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tolgas Website - Registrieren</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/business-casual.css" rel="stylesheet">


    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <script src="js/jquery.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function (){

$("#register").click(function(){
    fname =$("#fname").val();
    lname =$("#lname").val();
    email =$("#email").val();
    password =$("#password").val();

    $.ajax({
        type: "POST",
        url: "adduser.php",
        data: "fname=" + fname +"&lname=" + lname + "&email=" + email + "&password=" + password,
        success: function (html) {
            if (html =="true") {

                $("#add_err2").html("<div class='alert alert-success'> \
                 <strong>Account</strong> processed. </div>");

                window.location.href ="index.php";

            } else if (html == "false"){
                
                $("#add_err2").html("<div class='alert alert-danger'> \
                <strong>Email Address</strong> already in system. </div>");
            
            } else if (html =="fname") {

                $("#add_err2").html("<div class='alert alert-danger'> \
                <strong>First Name</strong>is required. </div>");
            
            } else if (html =="lname"){

                $("#add_err2").html("<div class='alert alert-danger'> \
                <strong>Last name</strong>is required. </div>");
            
            } else if (html =="eformat"){

                $("#add_err2").html("<div class='alert alert-danger'> \
                <strong>Email Address</strong> format is not valid.</div>");
            } else if (html =="eshort"){

                $("#add_err2").html("<div class='alert alert-danger'> \
                <strong>Email Address</strong> is required.</div>");
          
            }else if (html == "pshort"){
                $("#add_err2").html("<div class='alert alert-danger'> \
                <strong>Password</strong> is too short</div>");

            } else {
                $("#add_err2").html('<div class="alert alert-danger"> \
                <strong>Error</strong> processing request. Please try again. \ \
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
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Registration</strong>
                    </h2>
                    <hr>
                    <form role="form">
                        <div id="add_err2"></div>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" maxlength="25">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" maxlength="25">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Adress</label>
                                <input type="email" class="form-control" id="email" name="email" maxlength="25">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password" name="password" maxlength="25">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-default" id="register">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <footer>

    </footer>




    <script src="js/bootstrap.min.js"></script>

</body>

</html>
