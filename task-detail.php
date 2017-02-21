<?php
function  PreFormat ($Daten) {
    echo '<pre><code>';
    var_dump($Daten);
    echo '</code></pre>';

}
// var_dump($_GET);

//wenn keine taskid mitgegeben wird, stelle ich die taskliste wieder dar
if (empty($_GET['taskid']) || !is_numeric($_GET['taskid'])) {
    require "taskliste.php";

    //stoppe die ausgabe hier
    exit();
}

// wenn ich hier ankomme bin ich sicher, dass eine nummer in diesem GET parameter drin ist (siehe oben)
$taskid = $_GET['taskid'];

// hole einen Task loader
require_once "DBTaskLoader.php";
$DBTaskLoader = new DBTaskLoader();


// frage den task loader nach dem task mit der id aus der GET parameter
$task = $DBTaskLoader->getTask($taskid);

/*PreFormat($task);

*/

//wenn kein task mit dieser taskid gefunden wurde...
if ($task == null) {
    require "taskliste.php";

    //stoppe die ausgabe hier
    exit();
}

// var_dump($task);


/**
 * Hilfsfunktion für das formatieren von einem datum
 *
 * @param $date string datum
 * @param $target_format string zielformat des datums
 */
function formatDate($date, $target_format = 'd.m.Y') {
    $dateTime = new DateTime($date);
    return $dateTime->format($target_format);
}

?>

<h1><?php echo $task["title"]; ?></h1>
<p>
    ID: <?php echo $task ["id"]; ?> <br/>
    User ID: <?php echo $task["user_id"]; ?> <br/>
    Status ID: <?php echo $task["status_id"]; ?> <br/>
    Beschreibung: <?php echo $task["description"]; ?> <br/>
    </p>
<p>
    <a href="taskliste.php">&lt;-- zurück zur taskliste</a>
</p>