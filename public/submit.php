<?php

include '../vendor/autoload.php';

use Joli\JoliNotif\Notification;
use Joli\JoliNotif\NotifierFactory;

$title = $_POST['title'];
$message = $_POST['message'];

$notifier = NotifierFactory::create();

$notification = (new Notification())
                ->setTitle($title)
                ->setBody($message)
                ->setIcon(__DIR__.'/icons/info.png');

$notifier->send($notification);

header("Location: index.php");
