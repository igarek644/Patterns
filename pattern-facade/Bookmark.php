<?php
declare(strict_types=1);

/**
 * Class Bookmark
 */
class Bookmark
{
    /**
     * @var int
     */
    private $page;

    /**
     * Bookmark constructor.
     * @param $page
     */
    public function __construct(int $page)
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param $page
     * @return void
     */
    public function setBookmarkOnPage(int $page)
    {
        $this->page = $page;
    }
}