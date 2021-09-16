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
    $column = 0;
    $tmp = '';

    $handle = fopen('./music.csv','r');

    /**
     * Linux環境の場合、事前に適宜setlocale関数を使用してロケールを設定する必要がある
     * 例：setlocale(LC_ALL, 'ja_JP.ujis')
     */
    while($data = fgetcsv($handle, 4096, ',')) {
      //csv各業の列数を取得
      $num = count($data);
      for($i = 0; $i < $num; $i++) {
        if($i === 0) {
        // 初列の場合の処理
          if($column !== 0 && $data[$i] !== $tmp) {
            // 初列でなく、カラムに文字列が存在する
            echo '</ul>';
          }
          //ループが1週目で
          if($data[$i] !== $tmp) {
            //初列且つカラムに文字列が存在する
            $tmp = $data[$i];
            echo "<b>${tmp}</b>";
            echo '<ul>';
          }
        } else {
          // 2列目以降の処理
          echo '<li>';
          echo $data[$i];
          echo '</li>';
        }
      }
      $column++;
    }
    echo '</ul>';

    fclose($handle);
  ?>
</body>
</html>