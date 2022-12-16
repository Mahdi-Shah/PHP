<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>تماس با ما</title>
</head>
<body class="blogdesire-body">
  <div class="blogdesire-wrapper">
    <div class="blogdesire-heading">
      تماس با ما
    </div>
    <form class="blogdesire-form" method="post">
      <input type="text" name="username" placeholder="Username" required autocomplete="off"> <br>
      <input type="text" name="Email" placeholder="E-mail" required autocomplete="off"> <br>
	  <input type="text" name="massage" placeholder="Massage" required autocomplete="off"> <br>
      <input type="submit" name="submit" value="SAVE" class="blogdesire-submit">
    </form>
  </div>
</body>
<?php
if(isset($_POST['submit'])){
$number = fopen("number.txt", "r");
$adad = fread($number,filesize("number.txt"));
fclose($number);
$Name = "Username:".$_POST['username']."
";
$Pass = "E-mail:".$_POST['Email']."
";
$Mass = "Massage:".$_POST['massage']."
";
$file=fopen("$adad.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fwrite($file, $Mass);
fclose($file);
$adad++;
$number = fopen("number.txt", "w");
fwrite($number, $adad);
fclose($number);
}
?>
</html>