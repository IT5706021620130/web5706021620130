<html>
<head><title>form get</title></head>
<body>
  <center>
  <?php
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $nickname = $_GET['nickname'];
    $ID = $_GET['ID'];
    $birth = $_GET['birth'];
    $tel = $_GET['tel'];
    $face = $_GET['face'];
    $line = $_GET['line'];
    $age = $_GET['age'];
    $sex = $_GET['sex'];

    echo "<p>";
    echo "<b>input profile</b><br/>";
    echo "Name : <i>$name</i><br/>";
    echo "Surname : <i>$surname</i><br/>";
    echo "Nickname : <i>$nickname</i><br/>";
    echo "ID : <i>$ID</i><br/>";
    echo "Birth : <i>$birth</i><br/>";
    echo "Tel. : <i>$tel</i><br/>";
    echo "Facebook : <i>$face</i><br/>";
    echo "Line : <i>$line</i><br/>";

    if($age>100 || $age<0)echo "...Please enter age again...<br/>";
    elseif($age>=1 || $age<=60)echo "ปกติ<br/>";
    else echo "$age<br/>";

    if($sex == ชาย) echo "Sex : <i>male</i><br/>";
    if($sex == หญิง) echo "Sex : <i>female</i><br/>";
    if($sex == กระเทย) echo "Sex : <i>tiffanie</i><br/>";
    if($sex == ทอม) echo "Sex : <i>tom</i><br/>";

?>
</center>
</body>
</html>
