<?php
//Lesson 2.21 Date and Time object

require __DIR__ . '/../vendor/autoload.php';

//echo strtotime('tomorrow');

// DateTime takes the same arguments as strtotime
//var_dump(new \DateTime('tomorrow'));


//var_dump(new \DateTime('tomorrow', new DateTimeZone('Europe/London')));


//$dateTime = new \DateTime('tomorrow', new DateTimeZone('Europe/London'));

//echo $dateTime->format('m/d/Y g:i A');

//See https://www.php.net/manual/en/book.datetime.php for datetime docs 


//Using the datetime static method create from format 

//European date format
$date = '15/05/24 3:40PM';
$date2 = '20/08/21 4:00AM';

$dateTime = DateTime::createFromFormat('d/m/Y g:iA',$date);
$dateTime2 = DateTime::createFromFormat('d/m/Y g:iA',$date2);

echo $dateTime->diff($dateTime2)->days;

//As well as calculating the difference between dates Gio also covers:
//Adding and subtracting dates
//Problem with date time object and how to solve it
//Immutable date time objects
//Iterating over dates in a period
