<?php
// �ޤJtemplate��l��
include "Vincent_TP/template.inc.php";
include "Vincent_TP/template_vincent.inc.php";


// �]�wtemplate�ɮ�
$html_file = "1d.htm";
$tp = new VINCENT_TP($html_file);


//
$field1 = "���H��";
$field2 = "shinjia@ms5.hinet.net";
$field3 = "Taipei.....";


// ���wtemplate���ܼ�
$tp->set("F1", $field1);
$tp->set("F2", $field2);
$tp->set("F3", $field3);


// ���html�X
$tp->show();

?>