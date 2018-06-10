<?php
include "BehaviourTrait.php";

class Human {
    use BehaviourTrait;

    private $firstName;
    private $lastName;
    private $age;
    private $gender;
    private $hairColor;
    private $eyesColor;
    private $height;
    private $weight;

    public function __construct($firstName, $lastName, $age, $gender, $hairColor, $eyesColor, $height, $weight) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->gender = $gender;
        $this->hairColor = $hairColor;
        $this->eyesColor = $eyesColor;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function getFullName() {
        return $this->firstName ." ". $this->lastName;
    }

    public function getAge() {
          return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getHair() {
        return $this->hairColor;
    }

    public function getEyes() {
        return $this->eyesColor;
    }

    public function getMature()
    {
        $age = $this->getAge();

        if ($age > 18) {
            return "Adult";
        } else {
            return "Child";
        }
    }

    public function getHeight() {
        return $this->height;
    }

    public function getWeight() {
        return $this->weight;
    }

}
