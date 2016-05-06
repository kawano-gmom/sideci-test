<?php
    $text = 'hoge';
    $result = _test($text);
    
    echo $result;

function _test($a)
{
    $r = "test" . $a;
    return $r;
}
