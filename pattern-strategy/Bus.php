<?php
declare(strict_types = 1);

/**
 * Class RoadToHomeByBus
 */
class Bus implements Way
{

    /**
     * @return void
     */
    public function move(): void
    {
        echo 'On bus' . PHP_EOL;
    }
}