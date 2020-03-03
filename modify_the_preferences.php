<?php
//edited by Vishnu
include_once 'db_configuration.php';

if (isset($_POST['new_rows'])){

    $rows = mysqli_real_escape_string($db, $_POST['new_rows']);
    $questions = mysqli_real_escape_string($db, $_POST['new_questions']);
    $dress = mysqli_real_escape_string($db, $_POST['new_favorite_dress']);
      
    $sql1 = "UPDATE `preferences` SET `value`= $rows WHERE `name` = 'NO_OF_TOPICS_PER_ROW'";

    $sql2 = "UPDATE `preferences` SET `value`= $questions WHERE `name` = 'NO_OF_DRESSES_TO_DISPLAY'";

    $sq13 = "UPDATE `preferences` SET `value`= $dress WHERE `name` = 'NAME_OF_FAVORITE_DRESS'";

    mysqli_query($db, $sql1);
    mysqli_query($db, $sql2);
    mysqli_query($db, $sql3);
    header('location: index.php?preferencesUpdated=Success');
}//end if
?>
