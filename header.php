<?php
  require_once("url.php");
  require_once("message.php");
  require_once("auth_process.php");

  $FlassMessage = $message->getMessage();
  $message = new Message($BASE_URL);

  if(!empty($FlassMessage["msg"])) {

  }

?>
<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset = "UTF-8">
  <meta name="viewport" content = "width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $BASE_URL ?>style.css">
  <link rel="stylesheet" href="<?= $BASE_URL ?>db.php">
  <link rel="stylesheet" href="<?= $BASE_URL ?>index.php">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
  <body>
  <div class="logo">TRC</div>
</header>
<?php if(!empty($FlassMessage["msg"])): ?>
  <div class="msg-container">
  <p class="msg <?= $FlassMessage["type"] ?>"><?= $FlassMessage["msg"] ?></p>
  </div>
<?php endif; ?>   
  </body>
</html>