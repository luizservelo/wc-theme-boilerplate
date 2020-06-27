<?php 

$Read->ExeRead(DB_CATEGORIES, "WHERE category_name = :nm", "nm={$URL[1]}");

if (!$Read->getResult()){
    header('location: ' . BASE . '/404');
}
else{
    extract($Read->getResult()[0]);
}

$Page = (!empty($URL[2]) ? $URL[2] : 1);
$Pager = new Pager(BASE . "/artigos/{$category_name}/", "<<", ">>", 5);
$Pager->ExePager($Page, 5);
$Read->ExeRead(DB_POSTS, "WHERE post_status = 1 AND post_date <= NOW() AND (post_category = :ct OR FIND_IN_SET(:ct, post_category_parent)) ORDER BY post_date DESC LIMIT :limit OFFSET :offset", "limit={$Pager->getLimit()}&offset={$Pager->getOffset()}&ct={$category_id}");

if (!$Read->getResult()){
    $Pager->ReturnPage();
    echo Erro("Ainda não existe posts cadastrados. Por favor, volte mais tarde :)", E_USER_NOTICE);
}
else{
    foreach($Read->getResult() as $article){
        // YOUR POST IS HERE

    }

}

$Pager->ExePaginator(DB_POSTS, "WHERE post_status = 1 AND post_date <= NOW() AND (post_category = :ct OR FIND_IN_SET(:ct, post_category_parent))", "ct={$category_id}");
echo $Pager->getPaginator();

?>