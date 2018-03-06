<?php
declare(strict_type=1);

/**
 * Class Home
 */
abstract class Home
{
    /**
     * @var string
     */
    protected $info;

    /**
     * @return string
     */
    public abstract function getInfo(): string ;
}