<?php
declare(strict_types = 1);

include "Subject.php";

/**
 * Class Post
 */
class Post implements Subject
{
    /**
     * @var array
     */
    private $observerList;

    /**
     * @param Observer $observer
     * @return void
     */
    public function registerObserver(Observer $observer): void
    {
        $this->observerList[] = $observer;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function removeObserver(Observer $observer): void
    {
        if (null === $this->observerList) {
            return;
        }

        $key = array_search($observer, $this->observerList);

        if (false !== $key) {
            unset($this->observerList[$key]);
        }
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        if (null === $this->observerList) {
            return;
        }

        foreach ($this->observerList as $observer) {
            $observer->update();
        }
    }

    /**
     * @param $content
     * @return void
     */
    public function setContent($content): void
    {
        echo $content . ' was set' . PHP_EOL;
    }

    /**
     * @return void
     */
    public function savePost(): void
    {
        echo 'post saved ' . PHP_EOL;

        $this->notify();
    }
}