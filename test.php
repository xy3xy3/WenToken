<?php
include './function.php';
$str = "Hello world 你好，世界的man！";
$result = countChineseAndEnglish($str);
echo "汉字数量：" . $result['chineseCount'] . "<br>";
echo "英文单词数量：" . $result['englishCount'] . "<br>";
echo "token估算：" . countWenToken($str);
