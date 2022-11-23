<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP+DB</title>
</head>

<body>
    <p>
        <?php
        $dsn = 'mysql:dbname=php_db;host=localhost;charset=utf8mb4';
        $user = 'root';
        $password = '';
        
        try {
            $pdo = new PDO($dsn, $user, $password);

            // usersテーブルからidカラムとnameカラムのデータを取得するためのSQL文を変数に代入
            $sql = 'SELECT id, name FROM users';
            /* テーブルから複数カラムを取得
               SELECT カラム名1,カラム名2 FROM テーブル名; */
            
            // SQL文を実行する
            $pdo->query($sql);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
        ?>
    </p>
</body>

</html>
