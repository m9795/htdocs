<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
      <?php
      // 変数に値を代入する
      $user_name = '太郎';

      // 変数の中身を出力する
      echo $user_name;
      echo '<br>';

      // 変数に値を再代入する
      $user_name = '花子';

      // 変数の中身を出力する
      echo $user_name;
      ?>
  </p>
  <p>
      <?php
      $number = 3;
      echo $number - 1.2;
      echo '<br>';

      $my_name = '一郎';
      // 変数と文字列を連結して出力
      echo '私の名前は' . $my_name . 'です。';
      echo '<br>';
      
      // 変数展開はダブルクォーテーションで囲う
      echo "私の名前は{$my_name}です。";
      echo '<br>';
      // シングルクォーテーションで囲うと変数名がそのまま出力される
      echo '私の名前は{$my_name}です。';
      ?>
  </p>
</body>

</html>
