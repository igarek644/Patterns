<?php
declare(strict_types=1);

/**
 * Class Hotel
 */
class Hotel extends Home
{
    /**
     * Hotel constructor.
     */
    public function __construct()
    {
        $this->info = 'Hotel';
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
       return $this->info;
    }
}