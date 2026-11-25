<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数を定義する
        function sort_2way($array, $order) {
          // 昇順か降順か判定
          if ($order === TRUE) {
          sort($array);
          } else {
          rsort($array);
          }

          return $array;
        }
          
          // ソートする配列を宣言
          $nums = [15, 4, 18, 23, 10];

          // 昇順
          echo "昇順にソートします。<br>";
          $ascending = sort_2way($nums, TRUE);
          foreach ($ascending as $num) {
            echo $num . "<br>";
          }

          // 降順
          echo "降順にソートします。<br>";
          $descending = sort_2way($nums, FALSE);
          foreach ($descending as $num) {
            echo $num . "<br>";
          }

        ?>
    </p>
</body>

</html>