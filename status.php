<?php


class Status {
    private $id;
    private $name;
    private $display_name;

    /**
     * User constructor.
     * @param $id
     * @param $name
     * @param $display_name
     */
    public function __construct($id, $name, $display_name) {
        $this->id = $id;
        $this->name = $name;
        $this->display_name = $display_name;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDisplayName() {
        return $this->display_name;
    }

}