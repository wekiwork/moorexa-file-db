<?php

use Lightroom\Component\FileDB\Client;

// simple wrapper
function fdb($data = null)
{
    // load data
    if ($data !== null)     {
        return Client::load($data);
    }
    // return instance
    return new Client;
}