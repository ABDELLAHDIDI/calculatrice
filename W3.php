<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <link rel="stylesheet" href="./style.css" > 
<form action="cal.php" method="GET" >
<input type="text" name="a" placeholder="first nber" ><br>
<input type="text" name="b" placeholder="second nber" ><br>
    <select name="operation">
  <option value="1">somme</option>
  <option value="2">soustraction</option>
    <option value="3">multiplication</option>
   <option value="4">division</option>
</select>
 <button type="submit" name="sub" value="v">calculer</button><br>
</form>
    <?php
  if(isset(    $_GET['sub']      )){
      echo 'le résulta est :  ';
      switch( $_GET['operation'] ) {
case 1: echo $_GET['a']+$_GET['b'];break;
case 2: echo $_GET['a']-$_GET['b'];break;
case 3: echo $_GET['a']*$_GET['b'];break;
case 4: if(!$_GET['b']) echo 'on ne peut pas diviser sur 0!!!!!!!!!!'; else echo $_GET['a']/$_GET['b'];
      }}
    ?>
    </body>
    </html>
