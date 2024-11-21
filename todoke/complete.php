<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'answer.php';
    $answer = new Answer('data/answers.json');
    $answer->save($_POST);
} else {
    header('Location: index.php');
    exit();
}
include 'includes/head.php';

include 'includes/header.php';
?>
<div class="container">
    <h2>送信しました。</h2>
    <a href="read.php" class="view-answers">回答一覧を見る</a>
</div>
