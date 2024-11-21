<?php
include 'answer.php';
$answer = new Answer('data/answers.json');
$data = $answer->read();

//条件絞り込みのための処理、フォーム入力から値を取得
$keyword = $_GET['keyword'] ?? '';
$categoryFilter = $_GET['category'] ?? '';

if ($keyword !== '') {
    $data = array_filter($data, function ($entry) use ($keyword) {
        return stripos($entry['content'], $keyword) !== false || stripos($entry['nickname'], $keyword) !== false;
    });
}

if ($categoryFilter !== '') {
    $data = array_filter($data, function ($entry) use ($categoryFilter) {
        return $entry['category'] === $categoryFilter;
    });
}

include 'includes/header.php';
include 'includes/head.php';
?>

<div class="container">
    <h2>回答一覧</h2>
    <p>全国から届いた感謝の声です。</p>

    <form method="get" class="filter-form">
        <input type="text" name="keyword" placeholder="キーワードを入力" value="<?php echo htmlspecialchars($keyword); ?>">
        <select name="category">
            <option value="">カテゴリを選択</option>
            <?php
            $categories = [
                "暮らし・住まい", "環境", "医療・福祉", "教育", "交通・安全",
                "公共サービス", "小売店", "飲食店", "美容・健康", "デジタル・家電",
                "アプリ・webサービス", "生活関連サービス", "宿泊・観光・レジャー",
                "人間関係", "仕事", "その他"
            ];
            foreach ($categories as $category) {
                echo '<option value="' . $category . '" ' . ($categoryFilter === $category ? 'selected' : '') . '>' . $category . '</option>';
            }
            ?>
        </select>
        <button type="submit">絞り込み</button>
    </form>

    <div class="card-grid">
        <?php foreach ($data as $entry): ?>
            <div class="card">
                <h3><?php echo htmlspecialchars($entry['nickname']); ?></h3>
                <p>年代: <?php echo htmlspecialchars($entry['age']); ?></p>
                <p>性別: <?php echo htmlspecialchars($entry['gender']); ?></p>
                <p>カテゴリ: <?php echo htmlspecialchars($entry['category']); ?></p>
                <p><?php echo nl2br(htmlspecialchars($entry['content'])); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
