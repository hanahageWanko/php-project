<?php
require_once './class/ReaderFactory.php';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>作曲家と作品たち</title>
</head>

<body>
  <?php
  /**
   * 入力ファイル
   */
  $filename = 'music.xml';

  $factory = new ReaderFactory();
  $data = $factory->create($filename);
  $data->read();
  $data->display();

  ?>
</body>

</html>