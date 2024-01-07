<?php 
session_start();
$logged_in = $_SESSION["logged_in"];

include("../model/database.php");
include("../controller/TaskQueue.php");

if ($logged_in) {
    $dbo = new DataBaseConnector();
    $taskQueue = new TaskQueue($logged_in);
    $tableData = $taskQueue->getQueueData($dbo);
    echo $taskQueue->runTaskQueue($tableData);
} else {
    echo "<a href='login.php'>Login To Server</a>";
}

?>