<?php
    class Person{
        protected $name;
        protected $age;
        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
        function display(){
            echo "Name:".$this->name."<br>";
            echo "Age:".$this->age."<br>";
        }
    }
    class Student extends Person{
        private $roll;
        private $branch;
        private $section;
        function __construct($name,$age,$roll,$branch,$section){
            parent::__construct($name, $age);
            $this->roll = $roll;
            $this->branch = $branch;
            $this->section = $section;
        }
          function displayStudent(){
            echo "Name: ".$this->name . "<br>";
            echo "Age: ".$this->age . "<br>";
            echo "Roll No.: ".$this->roll."<br>";
            echo "Branch: ".$this->branch."<br>";
            echo "Section: ".$this->section."<br>";
        }
    }
    $student = new Student("Rashmi", "22", "13", "MCA", "A2");
    $student->displayStudent();

?>