<?php
declare(strict_types = 1);

/**
 * Class Invoker
 */
class Invoker
{

    /**
     * @var array
     */
    private $commands;

    /**
     * @param Command $command
     * @param string $name
     * @return void
     */
    public function setCommand(Command $command, string $name): void
    {
        $this->commands[$name] = $command;
    }

    /**
     * @param string $name
     * @return void
     */
    public function executeCommand(string $name): void
    {
        if (isset($this->commands[$name])) {
            $this->commands[$name]->execute();
        }
    }
}