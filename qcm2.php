<?php
    session_start();
    include_once "PHP/config.php";
    print_r($_POST);
   // print_r($_POST);
    echo "<hr>";
    $note = 0;
    foreach($_POST as $question=>$reponse)
    {
        if($question!="bout"){
            echo "Pour la question $question tu as repondu $reponse<br>";
        } 
        $sql = mysqli_query($bdd, "SELECT * FROM reponses WHERE idr = '$reponse' AND verite=1");

        while($ligne = mysqli_fetch_assoc($sql)){
            $sql1 = mysqli_query($bdd, "SELECT * FROM reponses WHERE idr = '$reponse'");
            
            while($ligne1=mysqli_fetch_assoc($sql1)){

                if($question!="button"){
                    $i=1;
                    echo "pour la question $i tu as repondu ".$ligne1['libeller']."<br>";
                    $i++;
                    $sql2 = mysqli_query($bdd, "SELECT * FROM reponses WHERE idr = '$reponse' AND verite=1"); 
                    

                    if(mysqli_num_rows($sql2)>0){
                        
                        $note += 2;
                    }else{
                        
                    }
                }
            }
        }
        

    }


?>

<a href="PHP/deconnexion.php">deconnexion</a>