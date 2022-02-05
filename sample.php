<?php

header('Content-type: text/html; charset=utf-8');

require 'hanja_to_hangul.php';

$source = "大韓民國은 民主共和國이다.";

$change1 = hanja_to_hangul($source);
$change2 = hanja_to_hangul($source,'ck');
$change3 = hanja_to_hangul($source,'kc','[',']');

echo "<pre><b>원본</b>";
echo $source."<br>";
echo "<b>한자→한글</b>";
echo $change1."<br>";
echo "<b>한자→한자(한글)</b>";
echo $change2."<br>";
echo "<b>한자→한글[한자]</b>";
echo $change3."</pre>";

?>
