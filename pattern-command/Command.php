<?php
declare(strict_types = 1);

/**
 * Interface Command
 */
interface Command
{
    /**
     * @return void
     */
    public function execute(): void;
}