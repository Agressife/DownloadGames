<?php
session_start();
$host='localhost';
$database='mariagames';
$user='root';
$password='';
$tders=array("lang","genre","version","dateOut","gameName","description");
$text=$_POST["searchTexter"];
$iders=array();
$link = mysqli_connect($host, $user, $password, $database) 
    or die(mysqli_error($link));
    foreach($tders as &$td)
    {
    $query="SELECT * FROM `games` WHERE `$td` LIKE '%$text%'";
    $result=mysqli_query($link,$query) or die(mysqli_error($link));
    while ($row=mysqli_fetch_assoc($result))
    {
        $id=$row["id"];
        if(in_array($id,$iders))
        {

        }
        else
        {
            array_push($iders,$id);
            echo "<div class='gameShower'><img src='",$row["imageUrl"],"' class='gameImager'><form class='formShower' method='POST' action='?id=8.php'><input type='text' name='searchTexter' style='display:none;'value='",$row["id"],"'><button type='submit' class='gameSub'><a>",$row["gameName"],"</a></button></form><div class='descShower'>",$row["description"],"</div></div>";
        }

    }
}
?>