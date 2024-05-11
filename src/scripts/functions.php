<?php

function dump($data, $format = 1)
{
    echo "<pre>";
    if ($format == 1)
    {
        print_r($data);
    }
    else
    {
        var_dump($data);
    }
    echo "</pre>";
}

function dd($data)
{
    dump($data);
    die;
}