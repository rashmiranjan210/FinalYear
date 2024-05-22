<?php
    class Employee{
        private $empName;
        private $empNo;
        private $basicSal;
        private $da; 
        private $hra;
        private $grossSal;
        function __construct($empName,$empNo,$basicSal){
            $this ->empName=$empName;
            $this ->empNo =$empNo;
            $this -> basicSal= $basicSal;

        }
        function calGrossSal(){
            $this ->da=0.2 * $this->basicSal;
            $this ->hra=0.1 * $this->basicSal;
            $this->grossSal= $this->basicSal+ $this ->da+$this ->hra;
        }
        function showEmpDetails(){
            echo "Employee Name: ".$this->empName."<br>";
            echo "Employee Number: ".$this->empNo."<br>";
            echo "Basic Salary: " .$this->basicSal."<br>";
            echo "Dearness Allowance: ".$this->da."<br>";
            echo "House Rent Allowance: " .$this->hra."<br>";
            echo "Gross Salary: ".$this->grossSal."<br>";
        }
}
    $c=new Employee('Rashmi',13,1000);
    $c->calGrossSal();
    $c->showEmpDetails();
    echo "<br>";
    $d=new Employee('ashutosh',10,1100);
    $d->calGrossSal();
    $d->showEmpDetails();
?>