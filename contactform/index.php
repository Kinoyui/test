<!doctype HTML>
<html lang="ja">
    
<head>
    <meta charset="utf-8">
    <title>お問合せフォームを作る</title>
    <link rel="stylesheet"type="text/css" href="style.css">
</head>
    
<body>
    
     <?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt=$pdo->query("select * from contactform");
     ?>
   
    <h1>お問合せフォーム</h1>
    <form method="post" action="mail_confirm.php">
    <div>
        <label>名前</label>
        <br>
        
        <?php
        if (isset($_POST['name'])) {
            // echo '値を持っている';
        } else {
        $_POST['name']='';
            //echo '値を持ってない=初期状態';
        }
        ?>
        
        <input type="text"class="text"size="35" name="name" value="<?php echo $_POST['name'];?>" >
        
        </div>
        
        <div>
        <label>メールアドレス</label>
        <br>
        
        <?php
        if (isset($_POST['mail'])) {
            // echo '値を持っている';
        } else {
        $_POST['mail']='';
            //echo '値を持ってない=初期状態';
        }
        ?>
        
            
        <input type="text" class="text" size="35" name="mail" value="<?php echo $_POST['mail'];?>">
        </div>
        
        <div>
        <label>年齢</label>
        <br>
            
        <?php
        if (isset($_POST['age'])) {
            // echo '値を持っている';
        } else {
        $_POST['age']='選択してください';
            //echo '値を持ってない=初期状態';
        }
        ?>
        <select class="dropdown" name="age" >
            <option><?php echo $_POST['age'];?>
            <script>
            for(var i=18;i<=65;i++){
            document.write(
                "<option value="+i+">"+i+"歳</option>"
            );
            }
            </script>
            </select>
        </div>
        
        <div>
        <label>コメント</label>
        <br>
        <?php
        if (isset($_POST['comments'])) {
            // echo '値を持っている';
        } else {
        $_POST['comments']='';
            //echo '値を持ってない=初期状態';
        }
        ?>
        
        <textarea colos="35" rows="7" name="comments"><?php echo $_POST['comments'];?></textarea></div>
        
        <div>
        <input type="submit"class="submit"value="送信する">
        </div>
        
    </form>
</body>
</html>