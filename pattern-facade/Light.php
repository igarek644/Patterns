<?php
declare(strict_types=1);

/**
 * Class Light
 */
class Light
{
    /**
     * @var bool
     */
    public $status = false;

    /**
     * @return void
     */
    public function turnOn(): void
    {
        $this->status = true;
        echo 'Light on' . PHP_EOL;
    }

    /**
     * @return void
     */
    public function turnOff(): void
    {
        $this->status = false;
        echo 'Light off' . PHP_EOL;
    }
}