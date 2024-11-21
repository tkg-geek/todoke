<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="container">
    <p class="form-description">
        日常の中で感謝していること。当たり前に利用していること。<br>普段の生活の中で当たり前に思えることも、誰かの頑張りが支えています。影で頑張っている人に感謝し、ポジティブな声を届けよう！
    </p>
    <form action="confirm.php" method="post">
        <label for="nickname">ニックネーム</label>
        <input type="text" id="nickname" name="nickname" required>

        <label for="age">年代</label>
        <select id="age" name="age">
            <option value="未選択">選択して下さい</option>
            <option value="10代">10代</option>
            <option value="20代">20代</option>
            <option value="30代">30代</option>
            <option value="40代">40代</option>
            <option value="40代">50代</option>
            <option value="40代">60代</option>
            <option value="50代以上">70代以上</option>
        </select>

        <label for="gender">性別</label>
        <select id="gender" name="gender">
            <option value="未選択">選択して下さい</option>
            <option value="男性">男性</option>
            <option value="女性">女性</option>
            <option value="その他">その他</option>
        </select>

        <label for="category">カテゴリ</label>
        <select id="category" name="category">
            <option value="未選択">選択して下さい</option>
            <option value="暮らし・住まい">暮らし・住まい</option>
            <option value="環境">環境</option>
            <option value="医療・福祉">医療・福祉</option>
            <option value="教育">教育</option>
            <option value="交通・安全">交通・安全</option>
            <option value="公共サービス">公共サービス</option>
            <option value="小売店">小売店</option>
            <option value="飲食店">飲食店</option>
            <option value="美容・健康">美容・健康</option>
            <option value="デジタル・家電">デジタル・家電</option>
            <option value="アプリ・webサービス">アプリ・webサービス</option>
            <option value="生活関連サービス">生活関連サービス</option>
            <option value="宿泊・観光・レジャー">宿泊・観光・レジャー</option>
            <option value="人間関係">人間関係</option>
            <option value="仕事">仕事</option>
            <option value="その他">その他</option>
        </select>

        <label for="content">内容</label>
        <textarea id="content" name="content" rows="5" required></textarea>
        
        <convai-checker
     input-id='content'
     demo-settings-json="{
      &quot;gradientColors&quot;: [&quot;#25C1F9&quot;,&quot;#7C4DFF&quot;,&quot;#D400F9&quot;],
      &quot;toxicScoreThreshold&quot;:&quot;0.7&quot;,
      &quot;neutralScoreThreshold&quot;:&quot;0.1&quot;,
      &quot;showFeedbackForNeutralScores&quot;: false,
      &quot;showFeedbackForLowScores&quot;: false,
      &quot;feedbackText&quot;: [&quot;x% likely to be toxic. Great job!&quot;,&quot;We're not sure about that.&quot;,&quot;x% likely to be toxic. Please edit.&quot;],
      &quot;loadingIconStyle&quot;: &quot;circle_square_diamond&quot;,
      &quot;usePluginEndpoint&quot;: true,
      & &quot;modelName&quot;: &quot;TOXICITY&quot;,
      &quot;communityId&quot;: &quot;plugin-user_1610529593886-239823&quot;,
      &quot;fontFamily&quot;: &quot;Merriweather, serif&quot;
      }">
  </convai-checker>

        <button type="submit" class="submit-post">送信内容を確認</button>
    </form>
</div>
<!-- <script>
// フォーム送信前に有害度をチェック
document.getElementById('contentForm').addEventListener('submit', function(event) {
    const content = document.getElementById('content').value;

    // Perspective APIのURL（簡易スニペットを利用）
    const url = 'https://commentanalyzer.googleapis.com/v1alpha1/comments:analyze';

    // リクエストのペイロード
    const payload = {
        comment: {
            text: content
        },
        requestedAttributes: {
            TOXICITY: {}
        }
    };

    // Perspective APIにPOSTリクエスト
    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(payload)
    })
    .then(response => response.json())
    .then(data => {
        const toxicityScore = data.attributeScores.TOXICITY.summaryScore.value;

        if (toxicityScore >= 0.5) {  // 50%以上の場合
            alert('この内容は不適切と判断されました。送信できません。');
            event.preventDefault();  // 送信をキャンセル
        }
    })
    .catch(error => {
        console.error('エラーが発生しました:', error);
    });
});
</script> -->