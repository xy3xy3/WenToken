<?php
function countChineseAndEnglish($str) {
    $chineseCount = preg_match_all('/[\x{4e00}-\x{9fa5}]/u', $str, $matches);
    $englishCount = str_word_count(preg_replace('/[\x{4e00}-\x{9fa5}]/u', ' ', $str));
    
    return array(
        'chineseCount' => $chineseCount,
        'englishCount' => $englishCount
    );
}
//文档地址：https://cloud.baidu.com/doc/WENXINWORKSHOP/s/jlil56u11
function countWenToken($str) {
	$arr = countChineseAndEnglish($str);
	return $arr['chineseCount']+1.3*$arr['englishCount'];//token统计信息，token数 = 汉字数+单词数*1.3 （仅为估算逻辑）
}
