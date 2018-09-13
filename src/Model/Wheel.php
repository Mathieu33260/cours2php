<?php

namespace Model;

class Wheel {

    /** @var integer $id */
    private $id;

    /** @var boolean $flat */
    private $flat;

    public function __construct($id, $flat) {
        $this->id = $id;
        $this->flat = $flat;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return bool
     */
    public function isFlat()
    {
        return $this->flat;
    }

    /**
     * @param bool $flat
     */
    public function setFlat($flat)
    {
        $this->flat = $flat;
    }
}