<pre>
<?php

$ar1 = [];

for ($i = 1; $i <= 42; $i++) {
    $ar1[] = $i; // 建立陣列並放入第一個元素值 或 推入(push)一個元素值
}

shuffle($ar1);  // 隨機排列, 弄亂

echo implode('-', $ar1); // 接成字串

?>
</pre>