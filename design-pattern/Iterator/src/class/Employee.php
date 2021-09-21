<?php
  class Employee {
    private $name;
    private $age;
    private $jov;

    public function __construct($name, $age, $job) {
      $this->name = $name;
      $this->age  = $age;
      $this->job  = $job;
    }
    
    public function getname() {
      return $this->name;
    }

    public function getAge() {
      return $this->age;
    }

    public function getJob() {
      return $this->job;
    }
  }