<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
    
<form action="index_confirm.php" method="post">
    <div class="form-item">名前</div>
    <input type="text" name="name" value="">
    <div class="form-item">E-mail</div>
    <input type="text" name="email" value="">
    <div class="form-item">年齢</div>
    <select name="age">
        <option value="未選択">選択してください</option>
        <option value="10代">10代</option>
        <option value="20代">20代</option>
        <option value="30代">30代</option>
        <option value="40代">40代</option>
        <option value="50以上">50代以上</option>
    </select>
    <div class="form-item">性別</div>
        <input type="radio" name="sex" value="男"> 男
        <input type="radio" name="sex" value="女"> 女
    <div class="btn">
        <input type="submit" value="送信">

    </div>
</form>

</body>
</html>