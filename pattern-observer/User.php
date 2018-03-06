<?php
declare(strict_types = 1);

include "Observer.php";

/**
 * Class User
 */
class User implements Observer
{

    /**
     * @return void
     */
    public function update(): void
    {
        echo 'email was send' . PHP_EOL;
    }
}