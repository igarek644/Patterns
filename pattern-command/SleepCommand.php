<?php
declare(strict_types = 1);

class SleepCommand implements Command
{
    /**
     * @var Dog
     */
    private $dog;

    /**
     * RunCommand constructor.
     * @param Dog $dog
     */
    public function __construct(Dog $dog)
    {
        $this->dog = $dog;
    }
    /**
     * @return void
     */
    public function execute(): void
    {
        $this->dog->sleep();
    }
}