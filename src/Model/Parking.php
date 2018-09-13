<?php

namespace Model;

use ArrayObject;

class Parking {

    /** @var integer $id */
    private $id;

    /** @var ArrayObject|Car[] $cars */
    private $cars;

    /** @var int $nbParking */
    private static $nbParking = 0;

    public function __construct() {
        self::$nbParking++;
        $this->id = self::$nbParking;
    }

    /**
     * @param  Car
     */
    public function addCar(Car $car) {
        $this->cars[] = $car;
    }

    /**
     * @return int
     */
    public static function getNbParking()
    {
        return self::$nbParking;
    }

    /**
     * @param int $nbParking
     */
    public static function setNbParking($nbParking)
    {
        self::$nbParking = $nbParking;
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
     * @return ArrayObject|Car[]
     */
    public function getCars()
    {
        return $this->cars;
    }

    /**
     * @param ArrayObject|Car[] $cars
     */
    public function setCars($cars)
    {
        $this->cars = $cars;
    }
}