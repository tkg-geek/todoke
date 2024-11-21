<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST;
} else {
    header('Location: post.php');  //直接confirm.phpにアクセスしたらpost.phpに飛ばす
    exit();
}
include 'includes/head.php';
include 'includes/header.php';
?>
<div class="container">
    <h2>内容確認（手抜きレイアウト）</h2>
    <ul>
        <li>ニックネーム: <?php echo htmlspecialchars($data['nickname']); ?></li>
        <li>年代: <?php echo htmlspecialchars($data['age']); ?></li>
        <li>性別: <?php echo htmlspecialchars($data['gender']); ?></li>
        <li>カテゴリ: <?php echo htmlspecialchars($data['category']); ?></li>
        <li>内容: <?php echo nl2br(htmlspecialchars($data['content'])); ?></li>
    </ul>
    <form action="complete.php" method="post">
    <?php foreach ($data as $key => $value): ?>
        <input type="hidden" name="<?php echo $key; ?>" value="<?php echo htmlspecialchars($value); ?>">
    <?php endforeach; ?>
    <div class="confirm-buttons">
        <a href="post.php" class="btn-back">戻る</a>
        <button type="submit" class="btn-submit">送信</button>
    </div>
    
</form>

</div>
