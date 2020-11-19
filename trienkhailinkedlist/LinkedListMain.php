<?php
include_once('LinkList.php');

$linkedList = new LinkList();

try {
    $linkedList->insertFirst(11);
    $linkedList->insertFirst(22);
    //$linkedList->insertLast(333);
    $linkedList->insert(333, 1);
} catch (Exception $e) {
    echo $e->getMessage();
}