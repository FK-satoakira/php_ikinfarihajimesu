<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎</title>
</head>
<body>
    <?php   /* check.phpの61行目あたりの<formのmethod="post"をうけとってる。 */
    $n=$_POST["n"];
    $email=$_POST["e"];
    $goiken=$_POST["g"];

    print $n.'様<br>';
    print 'ご意見ありがとうございました<br>';
    print '頂いたご意見『'.$goiken.'』<br>';
    print $email.'にメールを送りましたのでご確認下さい';
    ?>
    <!-- phpの変数がよくわかってないかも。
    check.htmlの61行目あたりprint '<form method="post" action="thanks.php">';という記述になっているが、
    index.html→check.html→thanks.phpという風に、index.htmlのformのmethod="post"は効力を持つということか？
    答えは95ページいこうにかかれていそうだ。
    この疑問を持ったことはいい兆しかもしれない -->
</body>
</html>