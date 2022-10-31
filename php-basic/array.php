<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // 配列に値を代入
    $fruit = ['なし', 'いちご', 'みかん', 'りんご', 'きうい', 'ばなな'];

    // 配列の値を出力
    print_r($fruit);

    // 改行
    echo '<br>';

    // 2番目の要素を更新
    $fruit[1] = 'ぶどう';

    // 末尾に要素を追加
    $fruit[] = 'まんごー';

    // 配列の値を出力
    print_r($fruit);

    // 改行
    echo '<br>';

    // 3番目の要素を出力
    echo $fruit[2];
    ?>
  </p>

  <p>
    <?php
    // 連想配列に値を代入
    $personal_data = ['name' => '太郎', 'age' => 36, 'gender' => '男性'];

    // 連想配列の値を出力
    print_r($personal_data);

    // 改行
    echo '<br>';

    // 'age'をいうキーの値を更新
    $personal_data['age'] = 37;

    // 新しく要素を追加(キーと値)
    $personal_data['address'] = '東京都';

    // 連想配列の値を出力
    print_r($personal_data);

    echo '<br>';
    print_r($personal_data['gender']);
    ?>
  </p>

  <p>
    <?php
    $book1 = ['title' => 'BOOK1', 'content' => 'content1'];
    print_r($book1);
    echo '<br>';
    // echo 'タイトル：';
    print_r('タイトル：' . $book1['title']);
    echo '<br>';
    print_r('内容：' . $book1['content']);
    ?>
  </p>
</body>
</html>
