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
