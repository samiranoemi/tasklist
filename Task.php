<?php


class Task {
    private $id;
    private $user_id;
    private $status_id;
    private $title;
    private $description;
    private $duedate;
    private $created;
    private $updated;

    /**
     * Task constructor.
     * @param $id
     * @param $user_id
     * @param $status_id
     * @param $title
     * @param $description
     * @param $duedate
     * @param $created
     * @param $updated
     */
    public function __construct($id, $user_id, $status_id, $title, $description, $duedate, $created, $updated) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->status_id = $status_id;
        $this->title = $title;
        $this->description = $description;
        $this->duedate = $duedate;
        $this->created = $created;
        $this->updated = $updated;
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
    public function getUserId() {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getStatusId() {
        return $this->status_id;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getDuedate() {
        return $this->duedate;
    }

    /**
     * @return mixed
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function getUpdated() {
        return $this->updated;
    }
}