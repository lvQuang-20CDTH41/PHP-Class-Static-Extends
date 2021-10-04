<?php
// TH 5.7. Thực hiện bài TH 5.5 bằng thuộc tính và phương thức tĩnh
class Hinhchunhat
{
    private static $rong;
    private static $dai;
    function setDai($dai)
    {
        self::$dai = $dai;
    }
    function getDai()
    {
        return self::$dai;
    }
    function setRong($rong)
    {
        self::$rong = $rong;
    }
    function getRong()
    {
        return self::$rong;
    }
}
$x = new Hinhchunhat();
$x->setDai(7);
echo 'chieu dai: ' . $x->getDai() . '<br>';
$x->setRong(5);
echo 'chieu rong: ' . $x->getRong();
