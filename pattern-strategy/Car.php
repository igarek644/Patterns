<?php
declare(strict_types = 1);

/**
 * Class RoadToHomeByCar
 */
class Car implements Way
{

    /**
     * @return  void
     */
    public function move(): void
    {
        echo "On car" . PHP_EOL;
    }
}