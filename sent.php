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
            <?php echo $_POST['first-name']; ?>
          </div>
          <div class="box">
            <?php echo $_POST['last-name']; ?>
          </div>
        </div>
      </div>
      <div class="form-item">
        <div class="title-box">フリガナ</div>
        <div class="name-input">
          <div class="box">
            <?php echo $_POST['first-name1']; ?>          </div>
          <div class="box">
            <?php echo $_POST['last-name1']; ?>          </div>
        </div>
      </div>
      <div class="form-item">
        <div class="title-box">メールアドレス</div>
        <div class="mail-input">
          <div class="e-mail">
            <?php echo $_POST['e-mail']; ?>
          </div>
        </div>
      </div>
      <div class="form-item">
        <div class="title-box">年齢</div>
        <div class="age-box">
          <div class="age">
            <?php echo $_POST['age']."才"; ?>
          </div>
        </div>
      </div>
      <div class="text-item">
        <div class="title-box">お問い合わせ内容</div>
        <div class="text-area">
        <?php echo $_POST['text']; ?>
        </div>
      </div>
    </div>
  </form>
</body>
</html>