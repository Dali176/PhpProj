<?php
include_once('database.php');

$taskID = $_GET["taskID"];

if($taskID != false) {
    $query = "DELETE FROM tasks WHERE Id = :task_id";
    $statement = $db->prepare($query);
    $statement->bindValue(":task_id", $taskID);
    $success = $statement->execute();
    $statement->closeCursor();
}

header('Location: todo_list.php');
?>