<?php
function getArticle()
{
    $arr = [];
    for ($i = 0; $i <= 5; $i++) {
        $arr[] = [
            'title' => 'my title' . $i,
            'content' => 'my content' . $i,
        ];
    }

    return $arr;
}