<?php
// include_once 'config.php';
  require_once('DbConn.php');
class UpdateUser extends DbConn
{
    public function updatePassword(){
         $newPassword = password_hash($_POST['password1'], PASSWORD_DEFAULT);
           try {
               $db = new DbConn;
               $tbl_members = $db->tbl_members;
               // prepare sql and bind parameters
               $stmt = $db->conn->prepare(  "UPDATE ".$tbl_members." SET password = :password");
               $stmt->bindParam(':password', $newPassword);
               $stmt->execute();
               $err = '';
           } catch (PDOException $e) {
               $err = "Error: " . $e->getMessage();
           }
           if ($err == '') {
               $success = 'true';
           } else {
               $success = $err;
           };
           return $success;
    }

    public function updateEmail(){
           try {
             $newEmail = $_POST['email'];
               $db = new DbConn;
               $tbl_members = $db->tbl_members;
               // prepare sql and bind parameters
               $stmt = $db->conn->prepare(  "UPDATE ".$tbl_members." SET email = :newEmail");
               $stmt->bindParam(':newEmail', $newEmail);
               $stmt->execute();
               $err = '';
           } catch (PDOException $e) {
               $err = "Error: " . $e->getMessage();
           }
           //Determines returned value ('true' or error code)
           if ($err == '') {
               $success = 'true';
           } else {
               $success = $err;
           };
           return $success;
    }

    public function updateName(){
           try {
             $newName = $_POST['newName'];
               echo '<script>console.log("'+$newName+'")</script>';
               $db = new DbConn;
               $tbl_members = $db->tbl_members;
               // prepare sql and bind parameters
               $stmt = $db->conn->prepare(  "UPDATE ".$tbl_members." SET username = :newName where username = name" );
               $stmt->bindParam(':newName', $newName);
               $stmt->execute();
               $err = '';
           } catch (PDOException $e) {
               $err = "Error: " . $e->getMessage();
           }
           //Determines returned value ('true' or error code)
           if ($err == '') {
               $success = 'true';
           } else {
               $success = $err;
           };
           return $success;
    }
}
if (isset($_POST['password'])){
  $pw1 = $_POST['password'];
  echo '<script>console.log("jest hasło i jesteśmy w ifie")</script>';
  $UpdateUser = new UpdateUser;
  $UpdateUser ->updatePassword();
}

if (isset($_POST['email'])){
  $newEmail = $_POST['email'];
  echo '<script>console.log("jest email i jesteśmy w ifie")</script>';
  $UpdateUser = new UpdateUser;
  $UpdateUser ->updateEmail();
}

if (isset($_POST['newName'])){
  $newName = $_POST['newName'];
  echo '<script>console.log("jest imię i jesteśmy w ifie")</script>';
  $UpdateUser = new UpdateUser;
  $UpdateUser ->updateName();
}
?>
