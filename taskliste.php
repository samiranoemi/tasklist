<?php


// DB Task loader holen
require_once "DBTaskLoader.php";
$DBTaskLoader = new DBTaskLoader();

// tasks aus dem task loader holen
$tasks = $DBTaskLoader->getTasks();



echo "<h1>Taskliste</h1>";
echo "<table cellpadding='5' cellspacing='5'>";
echo "<td><a href='taskcreate.php'>Neue Aufgabe erstellen</a></td>";
echo "<tr><th>Title</th><th>Due Date</th></tr>";


foreach ($tasks as $task) {

    $detail_link = "task-detail.php?taskid=" . $task["id"];
    $delete_link = "delete-task.php?taskid=" . $task["id"];
    $confirm_javascript = "return confirm(\"Willst du den Task mit der id" . $task["id"] . "wirklich löschen?\")";

    echo "<tr>";
    echo "<td>" . $task ["id"] . "</td>";
    echo "<td>" . $task["user_id"] . "</td>";
    echo "<td>" . $task["status_id"] . "</td>";
    echo "<td>" . $task["title"] . "</td>";
    echo "<td>" . $task["description"] . "</td>";
    echo "<td><a href='$detail_link' >Details</a></td>";
    echo "<td><a onclick='$confirm_javascript' href='$delete_link' >Löschen <img src='delete.png'/></a></td>";

    echo "</tr>";
}
echo "</table>";


    /*echo "<td>" . $task->getDuedate() . "</td>";


*/



