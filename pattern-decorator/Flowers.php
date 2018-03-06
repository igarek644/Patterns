<?php
declare(strict_types=1);

/**
 * Class Flowers
 */
class Flowers extends Decorator
{
    /**
     * @var Home
     */
    private $home;

    /**
     * Flowers constructor.
     * @param Home $home
     */
    public function __construct(Home $home)
    {
        $this->home = $home;
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->home->getInfo() . ', with Flowers';
    }
}