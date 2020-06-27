<?php

$Read->ExeRead(DB_POSTS, "WHERE post_name = :nm AND post_date <= NOW() AND post_status = 1", "nm={$URL[1]}");

if (!$Read->getResult()) {
    header('location: ' . BASE . '/404');
} else {
    extract($Read->getResult()[0]);

    $Update = new Update;
    $UpdateView = ['post_views' => $post_views + 1, 'post_lastview' => date('Y-m-d H:i:s')];
    $Update->ExeUpdate(DB_POSTS, $UpdateView, "WHERE post_id = :id", "id={$post_id}");

    $Read->ExeRead(DB_CATEGORIES, "WHERE category_id = :cat", "cat={$post_category}");
    if ($Read->getResult()) {
        $Category = $Read->getResult()[0];
    }
}

// YOUR SINGLE POST 
