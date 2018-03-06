<?php

/**
 * Class ToGetHome
 */
class GetHome
{
    /**
     * @var Way
     */
    private $way;

    /**
     * ToGetHome constructor.
     * @param Way $way
     */
    public function __construct(Way $way)
    {
        $this->way = $way;
    }

    /**
     * @param Way $way
     */
    public function setStrategy(Way $way)
    {
        $this->way = $way;
    }

    /**
     * @return  void
     */
    public function getHome(): void
    {
        $this->way->move();
    }
}