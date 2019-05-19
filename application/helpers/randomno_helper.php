<?php

function generate_code($length = 8)
{
    $nps = "";
    for($i=0;$i<$length;$i++)
    {
        $nps .= chr( (mt_rand(1, 36) <= 26) ? mt_rand(97, 122) : mt_rand(48, 57 ));
    }
    return strtoupper($nps);
}
