<?php
declare(strict_types = 1);

/**
 * Interface Subject
 */
interface Subject
{
    /**
     * @param Observer $observer
     * @return void
     */
    public function registerObserver(Observer $observer): void;

    /**
     * @param Observer $observer
     * @return void
     */
    public function removeObserver(Observer $observer): void;

    /**
     * @return void
     */
    public function notify(): void;
}