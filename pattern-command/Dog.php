<?php
declare(strict_types = 1);

/**
 * Class Dog
 */
class Dog
{
    /**
     * @return void
     */
    public function run(): void
    {
        echo 'Dog run' . PHP_EOL;
    }

    /**
     * @return void
     */
    public function sleep(): void
    {
        echo 'Dog sleep' . PHP_EOL;
    }

    /**
     * @return void
     */
    public function eat(): void
    {
        echo 'Dog eat' . PHP_EOL;
    }
}