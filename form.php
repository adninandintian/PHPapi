<?php
{
?>
<!DOCTYPE html>
<html>
<head>
  <title>Formulir</title>
  
  <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body style="background-color: #f9f590">

<form name="" method="POST" action="adnin.php" id="users"> 
        <div>
          <h1> SIGN IN </h1>
        </div>
        <div class="form">
          <label for="">Id</label><br>
          <input type="text" name="Id" style="background-color: #f7f7f7">
        </div>
<br>
        <div class="form">
          <label for="">Username</label><br>
          <input type="text" name="Username" style="background-color: #f7f7f7">
        </div>
<br>
        <div class="form">
          <label for="">Password</label><br>
          <input type="password" name="Password" style="background-color: #f7f7f7">
        </div>
<br>
        <div class="form">
          <label >Level</label><br>
          <select name="Level" style="background-color: #f7f7f7">
            <option> User</option>
            <option> Admin</option>
            <option> Guest</option>
          </select>
        </div>
<br>
        <div class="form">
          <label for="">Fullname</label><br>
          <input type="text" name="Fullname" style="background-color: #f7f7f7" >
        </div>
<br><br>
        <div class="form">
          <input class="bg-blue" type="submit" name="submit" value="SUBMIT">
        </div>
      </form>
</body>
</html>
<?php
}
?>