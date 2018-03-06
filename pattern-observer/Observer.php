<?php
declare(strict_types = 1);

/**
 * Interface Observer
 */
interface Observer
{
    /**
     * @return void
     */
    public function update(): void;
}