<?php
   $name = $_POST['name'];
   $mail = $_POST['mail'];
   $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
   $dsn = "mysql:host=localhost; dbname=crud; charset=utf8";
   $username = "root";
   $password = "";

   try{
        $dbh = new PDO($dsn,$username,$password);
   }catch(PDOException $e){
        $msg = $e->getmessage();
   }

   $sql = "SELECT * FROM users WHERE email = :mail";
   $stmt = $dbh->prepare($sql);
   $stmt->bindValue(':mail',$mail);
   $stmt->execute();
   $member = $stmt->fetch();

   //if($member['mail'] === $mail){
   /*  $msg = '同じメールアドレスが存在します。';
     $link = '<a href="signup.php">戻る</a>';
   }else{*/
     $sql = "INSERT INTO users(name,email,password) VALUES (:name,:mail,:pass)";
     $stmt = $dbn->prepare($sql);
     $stmt->bindValue(':name',$name);
     $stmt->bindValue(':mail',$mail);
     $stmt->bindValue(':pass',$pass);
     $stmt->execute();
     $msg = '会員登録が完了しました';
     $link = '<a href="login.php">ログインページ</a>';
   //}

?>

<h1><?php echo $msg; ?></h1><!--メッセージの出力-->
<?php echo $link; ?>