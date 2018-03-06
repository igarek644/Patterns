<?php
declare(strict_types=1);

/**
 * Class Read
 */
class Read
{
    /**
     * @return void
     */
    public function start(): void
    {
        echo 'Reading....' . PHP_EOL;
    }

    /**
     * @return void
     */
    public function stop():void
    {
        echo 'Stop read' . PHP_EOL;
    }

    /**
     * @return int
     */
    public function getReadPagesNumber(): int
    {
        return rand(0, 30);
    }
}