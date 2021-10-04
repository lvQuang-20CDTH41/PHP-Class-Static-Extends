<?php
abstract class Tinhtoan
{
    public $a, $b;
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    abstract function ketQua();
}
class Cong extends Tinhtoan
{
    function ketQua()
    {
        return $this->a + $this->b;
    }
}
class Tru extends Tinhtoan
{
    function ketQua()
    {
        return $this->a - $this->b;
    }
}
class Nhan extends Tinhtoan
{
    function ketQua()
    {
        return $this->a * $this->b;
    }
}
class Chia extends Tinhtoan
{
    function ketQua()
    {
        return (float)$this->a / $this->b;
    }
}
$cong = new Cong(15, 5);
echo 'a + b = ' . $cong->ketQua();

echo "<br>";

$tru = new Tru(15, 5);
echo 'a - b = ' . $tru->ketQua();

echo "<br>";

$nhan = new Nhan(15, 5);
echo 'a * b = ' . $nhan->ketQua();

echo "<br>";

$chia = new Chia(15, 5);
echo 'a / b = ' . $chia->ketQua();
