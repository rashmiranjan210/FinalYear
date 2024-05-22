<?php
    class Employee{
        private $empId;
        private $empName;
        private $designation;
        function __construct($a,$b,$c){
            $this ->empId=$a;
            $this ->empName=$b;
            $this ->designation=$c;
        }
        function __display(){
            echo "Name= ". $this ->empName;
            echo '<br>';
            echo "id= ". $this ->empId;
            echo '<br>';
            echo "Designation=". $this ->designation;
            echo '<br>';
            echo '<br>';
        }

    }
    $d =new Employee(13,'Rashmi','student');
    $d->__display();
    $e =new Employee(14,'abhisekh','student');
    $e->__display();
    $f =new Employee(15,'Jyoti','student');
    $f->__display();

?>