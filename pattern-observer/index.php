<?php

include "User.php";
include "Post.php";

$user = new User();

$post = new Post();
$post->registerObserver($user);
$post->setContent('bla bla');
$post->savePost();

$post->removeObserver($user);

