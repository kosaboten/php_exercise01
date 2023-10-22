<?php
require_once __DIR__ . '/Car.php';

class Taxi extends Car
{
    private $passenger;

    public function pickUp($num)
    {
        $this->passenger += $num;
        return strval($num) . "人乗車しました" . PHP_EOL;
    }

    public function lower($num)
    {
        if ($this->passenger - $num >= 0) {
            $this->passenger -= $num;
            return strval($num) . "人降車しました" . PHP_EOL;
        } else {
            return strval($num) . "人は降車できません" . PHP_EOL;
        }
    }

    public function information()
    {
        return "車の車種:{$this->getName()}" . PHP_EOL
            . "車体番号:{$this->getNumber()}" . PHP_EOL
            . "カラー:{$this->getColor()}" . PHP_EOL
            . "乗車人数:{$this->passenger}人" . PHP_EOL;
    }
}
