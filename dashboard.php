<!DOCTYPE html>
<?php require "login/loginheader.php";
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$timeRegister = $_SESSION['timeRegister'];
?>
<html>

<head>
  <meta charset="UTF-8">
  <title>Jquery Fullcalandar Integration with PHP and Mysql</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script src="script.js" type="text/javascript"></script>
  <link href="fontawesome/css/all.css" rel="stylesheet">
</head>

<body>
  <div class="area"></div>
  <nav class="main-menu">
    <ul>
      <li>
        <a href="http://justinfarrow.com">
          <i class="fa fa-home fa-2x"></i>
          <span class="nav-text">
            Konto
          </span>
        </a>
      </li>
      <li>
        <a href="login/logout.php">
          <i class="fa fa-power-off fa-2x"></i>
          <span class="nav-text">
            Wyloguj
          </span>
        </a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row" style="margin-top:10%;">
      <div class="col-3 note-img">
        <div class="note-text" style=" position:absolute; margin-left: 22%; margin-top: 30%;">
          <h2>Witaj! <?php echo $username ?></h2>

        </div>
        <div style="    margin-left: -25%;  margin-top: -20%;">
          <img src="note.png" height="500" width="500">
        </div>
        <div style="    margin-left: -25%;  margin-top: -20%;">
          <img src="photoAir.png" height="609" width="500">
        </div>
      </div>
      <div class="col-2">

      </div>
      <div class="col-7" style="  ">

        <div style=" position: absolute;      top: 100px; left: 15%; ">
          <h2>Dane</h2>
          <ul class="fa-ul">
            <li><span><b>Nazwa Użytkownika:</b><?php echo $username ?>
                <form class="" id="nameChange" name="nameChange" method="post" action="createuser.php">
                  <input name="newName" id="newName" class="form-control" placeholder="Wprowadź nową nawzę">
                  <button name="Submit" id="nameSubmit" class="btn btn-primary btn-block" type="submit">Zmień</button>
                </form>
              </span>
            </li>

            <li><span><b>Email:</b> <?php echo $email ?>
            <form class="" id="emailChange" name="emailChange" method="post" action="createuser.php">
              <input name="newEmail" id="newEmail" class="form-control" placeholder="Wprowadź nowy E-mail">
              <button name="Submit" id="emailSubmit" class="btn btn-primary btn-block" type="submit">Zmień</button>
              </span></li>
            </form>
            </span></li>
            <li><span><b>Data Rejestracji:</b> <?php echo $timeRegister ?></span></li>
            <li>
              <span>
                <b>Zmiana Hasła:</b>
                <form class="form-signup" id="newPassword" name="newPassword" method="post" action="createuser.php">
                  <input name="password1" id="password1" type="password" class="form-control" placeholder="Wprowadź nowe hasło">
                    <input name="password2" id="password2" type="password" class="form-control" placeholder="Powtórz hasło">
                    <button name="Submit" id="passwordSubmit" class="btn btn-primary btn-block" type="submit">Zmień</button>
              </span>
            </li>
          </ul>
              <div id="message">dsadas</div>
        </div>
        <img src="paper note.png">
      </div>
    </div>
  </div>
    <script src="changeDetails.js"></script>
  <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
  <script>

  $( "#newPassword" ).validate({
    rules: {
      password1: {
        required: true,
        minlength: 4
  	},
      password2: {
        equalTo: "#password1"
      }
    }
  });
  </script>
</body>

</html>
