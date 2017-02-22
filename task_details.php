<?php
include_once('database.php');

$taskID = $_GET["taskID"];

if($taskID == 0) {
    $task = null;
    $isAddition = 1;
} else {
    $isAddition = 0;
    $query = "SELECT * FROM tasks WHERE ID = task_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':task_id', $taskID);
    $statement->execute();
    $game = $statement->fetch();
    $statement->closeCursor();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Details</title>
    <!-- CSS Section -->
    <link rel="stylesheet" href="./Scripts/lib/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Scripts/lib/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./Scripts/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="./Content/app.css">
</head>
<body>

<div class="container">
    <div class="row">
        <dvi class="col-md-offset-3 col-md-6">
            <h1>Task Details</h1>
            <form action="update_database.php" method="post">
                <div class="form-group">
                    <label for="IDTextField" hidden>Task Number</label>
                    <input type="hidden" class="form-control" id="IDTextField" name="IDTextField" placeholder="Task Number" value="<?php echo $task['Id']; ?>">
                </div>
                <div class="form-group">
                    <label for="NameTextField">Task Name</label>
                    <input type="text" class="form-control" id="NameTextField" name="NameTextField" placeholder="Task Name" required value="<?php echo $task['task']; ?>">
                </div>
            </form>
        </dvi>
    </div>
</div>
</body>
</html>