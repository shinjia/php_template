<?php


function random_color_part()
{
   return str_pad( dechex( mt_rand(0,255) ), 2, '0', STR_PAD_LEFT);
}

function random_color()
{
   return random_color_part() . random_color_part() . random_color_part();
}



$color = random_color();

$script = <<< HEREDOC
document.bgColor='{$color}';
HEREDOC;


$content = <<< HEREDOC
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
HEREDOC;



// 指定要套用的樣版檔
$template_file = 'page.html';



// 讓樣版完全分離的用法
$template_code = '$html = <<< HEREDOC
' . file_get_contents($template_file) . '
HEREDOC;
';

eval($template_code);

echo $html;
?>