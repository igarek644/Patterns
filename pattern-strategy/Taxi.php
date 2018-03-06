<?php
declare(strict_types = 1);

/**
 * Class RoadToHomeByTaxi
 */
class Taxi implements Way
{

    /**
     * @return void
     */
    public function move(): void
    {
        echo "On taxi" . PHP_EOL;
    }
}