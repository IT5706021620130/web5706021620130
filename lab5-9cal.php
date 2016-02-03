<html>
<head><title>form get</title></head>
<body bgcolor = "gray">

  <?php 
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $nickname = $_GET['nickname'];
    $ID = $_GET['ID'];
    $day = $_GET['day'];
    $month = $_GET['month'];
    $year = $_GET['year'];

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

    if(strlen($ID==13))                 //ID
    echo "ID : <i>$ID</i><br/>";
    else echo "13 number try again</font><br/>";

    $a = 543;                                                 //birth
    if($year==2527)
    {echo "Birth : "; echo 2527-543; echo "<br/>";}
    elseif($year==2528)
    {echo "Birth : "; echo 2528-543; echo "<br/>";}
    elseif($year==2529)
    {echo "Birth : "; echo 2529-543; echo "<br/>";}
    elseif($year==2530)
    {echo "Birth : "; echo 2530-543; echo "<br/>";}
    elseif($year==2531)
    {echo "Birth : "; echo 2531-543; echo "<br/>";}
    elseif($year==2532)
    {echo "Birth : "; echo 2532-543; echo "<br/>";}
    elseif($year==2533)
    {echo "Birth : "; echo 2533-543; echo "<br/>";}
    elseif($year==2534)
    {echo "Birth : "; echo 2534-543; echo "<br/>";}
    elseif($year==2535)
    {echo "Birth : "; echo 2535-543; echo "<br/>";}
    elseif($year==2536)
    {echo "Birth : "; echo 2536-543; echo "<br/>";}
    elseif($year==2537)
    {echo "Birth : "; echo 2537-543; echo "<br/>";}
    elseif($year==2538)
    {echo "Birth : "; echo 2538-543; echo "<br/>";}
    elseif($year==2539)
    {echo "Birth : "; echo 2539-543; echo "<br/>";}
    elseif($year==2540)
    {echo "Birth : "; echo 2540-543; echo "<br/>";}
    elseif($year==2541)
    {echo "Birth : "; echo 2541-543; echo "<br/>";}
    elseif($year==2542)
    {echo "Birth : "; echo 2542-543; echo "<br/>";}
    elseif($year==2543)
    {echo "Birth : "; echo 2543-543; echo "<br/>";}
    elseif($year==2544)
    {echo "Birth : "; echo 2544-543; echo "<br/>";}
    elseif($year==2545)
    {echo "Birth : "; echo 2545-543; echo "<br/>";}
    elseif($year==2546)
    {echo "Birth : "; echo 2546-543; echo "<br/>";}
    else
    {echo "Birth : "; echo 2547-543; echo "<br/>";}

    if(strlen($tel)==10)                                // tel
    echo "Tel. : <i>$tel</i><br/>";
    else echo "please enter 10 number<br/>";

    echo "Facebook : <i>$face</i><br/>";
    echo "Line : <i>$line</i><br/>";

    if($age>100 || $age<0)echo "...Please enter age again...<br/>";             //age
    elseif($age>=12 || $age<=25)echo "normal <br/>";

    if($sex == ชาย) echo "Sex : <i>male</i><br/>";                            //sex
    if($sex == หญิง) echo "Sex : <i>female</i><br/>";
    if($sex == กระเทย) echo "Sex : <i>tiffanie</i><br/>";
    if($sex == ทอม) echo "Sex : <i>tom</i><br/>";
?>


</body>
</html>
