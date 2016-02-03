<html>

<body>
  <?php

    for ($i=1; $i <=7 ; $i++)
    {
      echo ("<font size = \"".$i."\">Welcome to PHP world</font></br >");

    }
echo "<br />";
    $x = 123;
    $y = "abc";
    echo "$ x = ";  echo $x; echo"<br />";
    echo "$ y = ";  echo $y; echo"<br />";
    $x = &$y;
    echo "$ x = &$ y <br />";
    echo "$ x = ";  echo $x; echo"<br />";
    echo "New value $ x<br />";
    $x = "php";
    echo "$ x = ";  echo $x; echo"<br />";
    echo "$ y = ";  echo $y; echo"<br />";
    echo "New value $ y<br />";
    $y = 100;
    echo "$ x = ";  echo $x; echo"<br />";
    echo "$ y = ";  echo $y; echo"<br />";

echo"<br />";

    echo "HTTP_USER_AGENT => ".$_SERVER['HTTP_USER_AGENT'];
    echo"<br />";
    echo "HTTP_HOST =>".$_SERVER['HTTP_HOST'];
    echo"<br />";
    echo "SERVER_SOFTWARE =>".$_SERVER['SERVER_SOFTWARE'];
    echo"<br />";
    echo "DOCUMENT_ROOT =>".$_SERVER['DOCUMENT_ROOT'];
    echo"<br />";
    echo "SCRIPT_NAME =>".$_SERVER['SCRIPT_NAME'];
    echo"<br />";
    echo "REQUEST_METHOD =>".$_SERVER['REQUEST_METHOD'];
    echo"<br />";
    echo "REQUEST_URI =>".$_SERVER['REQUEST_URI'];
    echo"<br />";
    echo "PHP_SELF =>".$_SERVER['PHP_SELF'];
    echo"<br />";


  ?>
</body>
</html>
