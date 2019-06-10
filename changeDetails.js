$(document).ready(function() {
  $("#passwordSubmit").click(function() {
    var password = $("#password1").val();
    var password2 = $("#password2").val();
    if ((password == "")) {
      $("#message")
        .html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please enter a password</div>");
    } else {
      $.ajax({
        type: "POST",
        url: "login/includes/updateUser.php",
        data: "&password1=" + password + "&password2=" + password2,
        success: function(html) {
          var text = $(html).text();
          //Pulls hidden div that includes "true" in the success response
          var response = text.substr(text.length - 4);
          if (response == "true") {
            $("#message").html(html);
            $('#passwordSubmit').hide();
          } else {
            console.log("działa");
            $("#message").html(html);
            $('#passwordSubmit').show();
          }
        },
        error: function(req, err) {
          console.log('password ' + err)
        }
      });
    }
    return false;
  });

  $("#emailSubmit").click(function() {
    var newEmail = $("#newEmail").val();
    if ((email == "")) {
      $("#message")
        .html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please enter a email</div>");
    } else {
      $.ajax({
        type: "POST",
        url: "login/includes/updateUser.php",
        data: "&newEmail=" + newEmail,
        success: function(html) {
          var text = $(html).text();
          //Pulls hidden div that includes "true" in the success response
          var response = text.substr(text.length - 4);
          if (response == "true") {
            $("#message").html(html);
            $('#emailSubmit').hide();
          } else {
            $("#message").html(html);
            $('#emailSubmit').show();
          }
        },
        error: function(req, err) {
          console.log('email update ' + err)
        }
      });
    }
    return false;
  });

  $("#nameSubmit").click(function() {
    var newName = $("#newName").val();
    console.log(newName);
    var nameOld = '<?php echo $var ;?>';
    console.log(nameOld);
    if ((newName == "")) {
      $("#message")
        .html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please enter a name</div>");
    } else {
      $.ajax({
        type: "POST",
        url: "login/includes/updateUser.php",
        data: "&newName=" + newName,
        success: function(html) {
          var text = $(html).text();
          //Pulls hidden div that includes "true" in the success response
          var response = text.substr(text.length - 4);
          if (response == "true") {
            $("#message").html(html);
            $('#emailSubmit').hide();
          } else {
            $("#message").html(html);
            $('#emailSubmit').show();
          }
        },
        error: function(req, err) {
          console.log('name update ' + err)
        }
      });
    }
    return false;
  });
});
