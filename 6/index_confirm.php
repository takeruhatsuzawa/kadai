<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

    <div class="form-title">お問い合わせいただきありがとうございます</div>
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
    
    
</body>
</html>