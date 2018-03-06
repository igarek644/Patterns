<?php
declare(strict_types=1);

/**
 * Class Decorator
 */
abstract class Decorator extends Home
{
    /**
     * @return string
     */
    abstract public function getInfo(): string;
}