<?php


class User {
    private $id;
    private $username;
    private $password;
    private $name;
    private $lastname;
    private $created;
    private $updated;

    /**
     * Task constructor.
     * @param $id
     * @param $username
     * @param $password
     * @param $name
     * @param $lastname
     * @param $created
     * @param $updated
     */
    public function __construct($id, $username, $password, $name, $lastname, $created, $updated) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
        $this->lastname = $lastname;
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
    public function getUsername() {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
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
    public function getLastname() {
        return $this->lastname;
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