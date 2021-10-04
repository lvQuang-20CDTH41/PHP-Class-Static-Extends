<?php
// TH 5.7. Thực hiện bài TH 5.5 bằng thuộc tính và phương thức tĩnh
class Hinhhtron
{
    private static $bankinh;
    function setBankinh($bankinh)
    {
        self::$bankinh = $bankinh;
    }
    function getBankinh()
    {
        return self::$bankinh;
    }
}
$x = new Hinhhtron();
$x->setBankinh(6);
echo $x->getBankinh();
