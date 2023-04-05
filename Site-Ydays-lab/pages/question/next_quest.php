
<?php 

session_start();

if (!isset($_SESSION["quest_stage"])){
    $_SESSION["serie_xp"] = array();
    $_SESSION["quest_stage"] = 1;
    $_SESSION["xp_to_add"] = 0;
    header('Location: ./question.php');
}else if ($_SESSION["quest_stage"]>= 5){

    if (isset($_GET["rep"])) {
        $rep = $_GET["rep"];
    }

    if ($_SESSION["Good_rep"] == $rep){
        array_push($_SESSION["serie_xp"],"good");
        $_SESSION["xp_to_add"] += 10;
    }else{
        array_push($_SESSION["serie_xp"],"bad");
    }


    header('Location: ../Addxp/addxp.php');

}else{

    if (isset($_GET["rep"])) {
        $rep = $_GET["rep"];
    }

    if ($_SESSION["Good_rep"] == $rep){
        array_push($_SESSION["serie_xp"],"good");
        $_SESSION["xp_to_add"] += 10;
    }else{
        array_push($_SESSION["serie_xp"],"bad");
    }
    

    $_SESSION["quest_stage"] +=1;



    header('Location: ./question.php');
}




?>
