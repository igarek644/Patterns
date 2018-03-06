<?php
declare(strict_types=1);

/**
 * Class ReadBookFacade
 */
class ReadBookFacade
{
    /**
     * @var Book
     */
    private $book;

    /**
     * @var Bookmark
     */
    private $bookmark;

    /**
     * @var Light
     */
    private $light;

    /**
     * @var Read
     */
    private $read;

    /**
     * ReadBookFacade constructor.
     * @param Book $book
     * @param Bookmark $bookmark
     * @param Light $light
     * @param Read $read
     */
    public function __construct(Book $book, Bookmark $bookmark, Light $light, Read $read)
    {
        $this->book = $book;
        $this->bookmark = $bookmark;
        $this->light = $light;
        $this->read = $read;
    }

    /**
     * @return void
     */
    public function startReadingBook(): void
    {
        $this->light->turnOn();
        $page = $this->bookmark->getPage();
        $this->book->open($page);
        $this->read->start();
    }

    /**
     * @return void
     */
    public function stopReadingBook(): void
    {
        $this->read->stop();
        $this->bookmark->setBookmarkOnPage($this->read->getReadPagesNumber() + $this->bookmark->getPage());
        $this->book->close();
        $this->light->turnOff();
    }
}