<?php
class Complex{
    private $real;
    private $img;

    function __construct($r=0, $i=0){
        $this->real = $r;
        $this->img = $i;
    }

    function add(Complex $a, Complex $b){
        $c = new Complex();
        $c->real = $a->real + $b->real;
        $c->img = $a->img + $b->img;
        return $c;
    }
    function subtract(Complex $d, Complex $e) {
        $f = new Complex();
        $f->real = $d->real - $e->real;
        $f->img = $d->img - $e->img;
        return $f;
    }

    function multiply(Complex $d, Complex $e) { 
        $h = new Complex();
        $h->real = $d->real * $e->real - $d->img * $e->img;
        $h->img = $d->real * $e->img + $d->img * $e->real;
        return $h;
    }



    function display(){
        echo "$this->real + $this->img i";
    }
}

$c1 = new Complex(1,2);
echo "the first Complex number is: ";
$c1->display();
echo '<br>';
$c2 = new Complex(3,5);
echo "the second Complex number is: ";
$c2->display();
echo '<br><br>';
$sum = new Complex();
$sum = $sum->add($c1, $c2);
echo "The Sum is: ";
$sum->display();
echo "<br>";
$difference = new Complex();
$difference = $difference->subtract($c1,$c2);
echo "The difference is: ";
$difference->display();
echo "<br>";
$product= new Complex();
$product = $product->multiply($c1,$c2);
echo "The product is: ";
$product->display();

?>