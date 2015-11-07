<?php
require 'ChatBox_Backend.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/design.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Experiment: The Chat Box!</h1>
    <div class="container">
      <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Chat - user</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="body-msg">
                  <?php
                  // algorithme de selection 
                  $Sel = "SELECT * FROM message";

                  $affich= $idcom->query($Sel);
                  while ($donnees = $affich->fetch_array(MYSQLI_NUM)) { ?>
                  <p class="boxmsg">
                    <?= $donnees['1']; ?>
                  </p>
                  <?php } ?>
                </div>
                <form action="" method="GET" class="form-inline" role="form">
                
                  <div class="form-group">
                    <label class="sr-only" for="">label</label>
                    <input type="text" name="Message" class="form-control" id="" placeholder="Input field">
                  </div>
                  <div class="input-group">
                    <div class="input-group-adon">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>