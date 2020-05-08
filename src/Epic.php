<html>

<head>
  <title>Epic PHP server</title>
</head>

<body>

  <h1>Oh hi Mark!</h1>

  <?php

  $loggedIn = true;

  if ($loggedIn == true) {
    echo "You have now logged in to the server! <br>";
  } else {
    echo "You need to login<br>";
  }

  $myName = "Hi welcome to Noah's very epic PHP page<br>";
  $number = 65;
  $smallNum = 4;

  $characters = array("Wario", "Scott the Woz", "Jeff", "Jontron", "Tom Scott", "Valve News Network");


  $sum = $number + $smallNum;
  echo $myName;
  echo $sum;
  echo " is the best number don't you think? <br>";

  echo " These are also some cool people.<br>";

  foreach ($characters as $characters) {
    echo $characters . ', ';
  }

  ?>

  <form action="read.php" method="POST">
    Please enter your name: <input name="name" type="text">
    <input type="submit">
  </form>

</body>

</html>