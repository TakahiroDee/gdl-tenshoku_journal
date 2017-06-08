<?php

function dynamicSubstring($string)
{
    if(mb_strlen($string) >= 15)
    {
        $string = mb_substr($string,0,14);
        $string .= '...';
    }

    return $string;
}


function make_relative_path($path)
{
    return preg_replace('/http(s)?:\/\/([\w-]+\.)+[\w-]+/','',$path);
}
