<?php
require_once __DIR__ . '/Car.php';

class Taxi extends Car
{
    private $passenger;

    public function pickUp($num)
    {
        $this->passenger ++;
        return "{$num}人乗車しました" . PHP_EOL;
    }

    public function lower($num)
    {
        if ($this->passenger - $num >= 0) {
            $this->passenger --;
            $str_num = strval($num);
            return "{$str_num}人降車しました" . PHP_EOL;
        } else {
            $str_num = strval($num);
            return "{$str_num}人は降車できません" . PHP_EOL;
        }
    }
}
