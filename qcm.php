<?php
    session_start();
?>
<form action="qcm2.php" method="post">
<?php
$id = mysqli_connect("localhost","root", "", "qcm");
$req = "select * from questions order by rand() limit 10";
$res = mysqli_query($id,$req);
$i = 1;
while($ligne = mysqli_fetch_assoc($res)){
    echo "<h3>$i - ".$ligne["libelleQ"]."</h3>";
    $i++;
    $idq = $ligne["idq"];
    $req2 = "select * from reponses
             where idq = $idq";
    $res2 = mysqli_query($id,$req2);
    while($ligne2 = mysqli_fetch_assoc($res2))
    {
        $idr = $ligne2["idr"];
        echo "<h4><input type='radio' name='$idq' value='$idr'> ".$ligne2["libeller"]."</h4>";
    }
}
?>
<input type="submit" value="Envoyer" name="bout">

</form><hr>




