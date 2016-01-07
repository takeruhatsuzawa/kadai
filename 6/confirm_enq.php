<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

    <div class="form-title">問い合わせていただいた内容は以下で間違いないでしょうか？</div>
    <div class="form-title">お問い合わせ内容</div>
    
    <div class="form-item">■ 名前</div>
        <?php
        echo $_POST["name"];
        ?>
    <div class="form-item">■ E-mail</div>
        <?php
        echo $_POST["email"];
        ?>
    <div class="form-item">■ 年齢</div>
        <?php
        echo $_POST["age"];
        ?>
    <div class="form-item">■ 性別</div>
        <?php
        echo $_POST["sex"];
        ?>
    <div class="form-item">■ 趣味</div>
    
        <?php
for ($i = 0; $i < count($_POST["hoby"]); $i++){
  echo $_POST["hoby"][$i]."　";
}
echo "</p>\n";
        ?>
    
    <div class="btn">
        <input type="submit" value="送信" onClick="location.href='input_finish.php'">
        
    </div>
    
</body>
</html>