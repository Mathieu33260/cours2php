<?php

namespace Model;

use ArrayObject;

class Car {

    /** @var integer $id */
    private $id;

    /** @var boolean $broken */
    private $broken;

    /** @var string $brand */
    private $brand;

    /** @var int $nbCar */
    private static $nbCar = 0;

    /** @var int $nbWheel */
    private $nbWheel = 0;

    /** @var ArrayObject|Wheel[] $wheels */
    private $wheels;

    public function __construct($broken, $brand) {
        self::$nbCar++;
        $this->id = self::$nbCar;
        $this->broken = $broken;
        $this->brand = $brand;
        for($i=0;$i<4;$i++) {
            $this->nbWheel++;
            $this->wheels[$i] = new Wheel($this->nbWheel, false);
        }
    }

    /**
     * @return int
     */
    public static function getNbCar()
    {
        return self::$nbCar;
    }

    /**
     * @param int $nbCar
     */
    public static function setNbCar($nbCar)
    {
        self::$nbCar = $nbCar;
    }

    /**
     * @return int
     */
    public function getNbWheel()
    {
        return $this->nbWheel;
    }

    /**
     * @param int $nbWheel
     */
    public function setNbWheel($nbWheel)
    {
        $this->nbWheel = $nbWheel;
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
    public function isBroken()
    {
        return $this->broken;
    }

    /**
     * @param bool $broken
     */
    public function setBroken($broken)
    {
        $this->broken = $broken;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return ArrayObject|Wheel[]
     */
    public function getWheels()
    {
        return $this->wheels;
    }

    /**
     * @param ArrayObject|Wheel[] $wheels
     */
    public function setWheels($wheels)
    {
        $this->wheels = $wheels;
    }


}