<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
    <div><a href="input_enq.php">ありがとうございました</div>
        
<?php

$file = fopen(“data/data.txt”,“a”);
flock($file, LOCK_EX); 
fputs($file, “This is a Pen.” . PHP_EOL); 
flock($file, LOCK_UN); 
fclose($file); 

?>
        

</body>
</html>