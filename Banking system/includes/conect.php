<?php

$conect=mysqli_connect('localhost','root','','bankingsystem');

if(!$conect)
{
    die ('The connection to the database has failed');
}