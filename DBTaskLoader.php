<?php

require_once "Task.php";


class DBTaskLoader {

    private $tasks;

    /**
     * DBTaskLoader constructor.
     */
    public function __construct() {
        $this->tasks = array(
            1 => new Task(1, 1, 1, "einkaufen", " im coop", "2013-05-12", "2018-05-12", "2018-05-12"),
            2 => new Task(2, 2, 2, "aufräumen", "zu Hause", "2012-05-12", "2018-05-12", "2018-05-12"),
            3 => new Task(3, 3, 1, "aufräumen", "im Geschäft", "2011-05-12", "2018-05-12", "2018-05-12"),
            4 => new Task(4, 4, 3, "staubsaugen", "im Estrich", "2017-05-12", "2018-05-12", "2018-05-12"),
            5 => new Task(5, 5, 3, "Müll raustragen", "es stinkt schon!", "2022-05-12", "2018-05-12", "2018-05-12"),
            6 => new Task(6, 2, 2, "Kühlschrank ausmisten", "einkaufen im coop", "2009-05-12", "2018-05-12", "2018-05-12"),
            7 => new Task(7, 3, 3, "Büro aufräumen", "", "2018-05-12", "2018-05-12", "2015-05-12"),
            8 => new Task(8, 6, 1, "abstauben", "zuerst noch einen Abstaublappen kaufen", "2016-05-12", "2018-05-12", "2018-05-12"),
            9 => new Task(9, 7, 2, "Estrich wischen", "nicht im Sommer, zu heiss!", "2014-05-12", "2018-05-12", "2018-05-12"),
            10 => new Task(10, 1, 1, "Weinkeller auffüllen", "im November gibts imer viele Aktionen", "2017-05-12", "2018-05-12", "2018-05-12")
        );

    }

    public function getTasks() {
        return $this->tasks;
    }

    public function getTask($id) {
        if (array_key_exists($id, $this->tasks))
            return $this->tasks[$id];
        else {
            return null;
        }
    }

}