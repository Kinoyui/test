<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt=$pdo->query("select * from diworks_keijiban");
    
    
    ?>
    
    <header>
        <img src="diblog_logo.jpg">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
        
    <main>
        
        <div class="left">
            <div class="midasi">プログラミングに役立つ掲示板</div>
            
            <div class="form">
                <h1>入力フォーム</h1>
                <form method="post" action="insert.php">
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text"class="text"size="35" name="handlename" required>
                    </div>

                    <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title" required>
                    </div>

                    <div>
                    <label>コメント</label>
                    <br>
                    <textarea colos="35" rows="7" name="comments" required></textarea></div>

                    <div>
                    <input type="submit"class="submit"value="投稿する">
                    </div>

                </form>
            </div>
            
            
            <?php
            
            while($row=$stmt->fetch()){
                
            
            echo "<div class='kiji'>";
            echo "<h3>".$row['title']."</h3>";
                
            echo"<div class='comments'>";
            echo $row['comments'];
            echo "</div>";
            echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
            echo "</div>";
            }
            
            ?>
            
        </div>
        
        <div class="right">
        <br><br>
            <div class="komidasi">人気の記事</div>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP　MyAdminの使い方</li>
                <li>いま人気のエディタ</li>
                <li>HTMLの基礎</li>
            </ul>
        
        
        <div class="komidasi">オススメリンク</div>
            <ul>
                <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Braketsのダウンロード</li>
            </ul>
        
    
        <div class="komidasi">カテゴリ</div>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        
        </div>
        
    </main>
    
    <footer>
        <div class="footertext">Copyright D.I.works|D.I.blog is the one which provides A to Z about programming</div>
    </footer>
</body>

</html>