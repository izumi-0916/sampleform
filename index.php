<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>お問い合わせ</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
  <div class="header">サンプルフォーム</div>
  <div class="title">お問い合わせフォーム</div>
  <form method="post" action="sent.php">
    <div class="form">
      <div class="message-title">こちらからメッセージをお送りください。</div>
      <div class="form-item">
        <div class="title-box">お名前</div>
        <div class="name-input">
          <div class="box">
            姓
            </br>
            <input class="name" type="text" name="first-name" placeholder="例)山田">
          </div>
          <div class="box">
            名
            </br>
            <input class="name" type="text" name="last-name" placeholder="例)太郎">
          </div>
        </div>
      </div>
      <div class="form-item">
        <div class="title-box">フリガナ</div>
        <div class="name-input">
          <div class="box">
            セイ
            </br>
            <input class="name" type="text" name="first-name1" placeholder="例)ヤマダ">
          </div>
          <div class="box">
            メイ
            </br>
            <input class="name" type="text" name="last-name1" placeholder="例)タロウ">
          </div>
        </div>
      </div>
      <div class="form-item">
        <div class="title-box">メールアドレス</div>
        <div class="mail-input">
          <input class="e-mail" type="e-mail" name="e-mail" placeholder="例)sample@sample.com">
        </div>
      </div>
      <div class="form-item">
        <div class="title-box">年齢</div>
        <div class="age-box">
          <select class="age" name="age">
            <?php 
              for ($i=10; $i<="100"; $i++){
                echo "<option value='{$i}'>{$i}</option>";
              }
            ?>
          <select>
        </div>
      </div>
      <div class="text-item">
        <div class="title-box">お問い合わせ内容</div>
        <div class="text-area">
          <textarea class="text" name="text" rows="10"></textarea>
        </div>
      </div>
      <div class="btn-box">
        <input class="btn" type="submit" value="送信">
      </div>
    </div>
  </form>
</body>
</html>