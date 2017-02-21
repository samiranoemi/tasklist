<?php

require_once "Task.php";
require_once "DB.php";


class DBTaskLoader {

    private $tasks;
    private $statement;
    private $task;
    public function getTasks() {

        $this->statement = DB::get()->prepare("SELECT * FROM task WHERE id BETWEEN :start AND :end");

//ausführen mit PDO::FETCH_NUM
        $this->statement->execute(array(':start'=> 0, ':end'=>100));
        $this->tasks = $this->statement->fetchAll(PDO::FETCH_ASSOC);


        return $this->tasks;
    }

    public function getTask($id) {
        $this->statement = DB::get()->prepare("SELECT * FROM task WHERE id = :id");
        $this->statement->execute(array(':id'=> $id));
        $this->task = $this->statement->fetchAll(PDO::FETCH_ASSOC);
        return $this->task [$id ===1];
    }

}