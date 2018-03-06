<?php
declare(strict_types=1);

/**
 * Class Book
 */
class Book
{
    /**
     * @param $page int
     */
    public function open(int $page): void
    {
        echo 'Open book on ' . $page . ' page' . PHP_EOL;
    }

    /**
     * @return void
     */
    public function close(): void
    {
        echo 'Close book' . PHP_EOL;
    }

}