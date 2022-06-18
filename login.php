<?php 
     include 'functions.php';
     if(isset($_POST['btn_submit'])){
          $uname = $_POST['txt_name'];
          $password = $_POST['txt_pwd'];
          if($uname == ''  && $$password == ''){
               $sql_query = "select * from users where username='".$uname."' and password='".$password."'";
               $result = mysqli_query($con,$sql_query);
               $row = mysqli_fetch_array($result);
       
               //$count = $row['cntUser'];
               
               if($uname == $row['username']){
                   //$_SESSION['uname'] = $uname;
                   header('Location: register.php');
                   echo "AAAA";
               }else{
                   echo "Invalid username and password";
               }
          }
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <br>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <br>
            <div>
                <input type="submit" value="Submit" name="btn_submit" id="btn_submit" />
            </div>
        </div>
    </form>
</div>
</body>
</html>
