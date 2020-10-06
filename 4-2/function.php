<?php

require_once('db_connect.php');

function check_user_login(){
    if(empty($_SESSION['user_name'])){
        header("location: login.php");
        exit;
    }
}

function show_book_table(){
    $show_book_pdo = db_connect();
    $show_book_sql = "SELECT * FROM books ORDER BY id ASC";
    $show_book_stmt = $show_book_pdo->prepare($show_book_sql);
    $show_book_stmt->execute();
    return $show_book_stmt;
}


?>