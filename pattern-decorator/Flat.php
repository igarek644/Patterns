<?php
declare(strict_types=1);


/**
 * Class Flat
 */
class Flat extends Home
{
    /**
     * Flat constructor.
     */
    public function __construct()
    {
        $this->info = 'Flat';
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }
}