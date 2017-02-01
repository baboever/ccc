<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/_lib/config.php';

/*
require_class('class.FastImage');

$image = FastImage::getInstance();
$image->load("http://img.kbs.co.kr/pgm/resource/program/T2015/T2015-0119/T2015-0119.png");

list($width, $height) = $image->getSize();

echo "width=$width, height=$height";
*/

function test () {
	echo "hello";
}


echo test ('a');




exit;

require_class('bl.ProgramInfo');

$bl = ProgramInfo::getInstance();
$arr_active_program = $bl->get_active_programinfo(); //현재 사용중인 방송프로그램정보의 KBS프로그램코드

for ($i=0;$i<count($arr_active_program);$i++) {
	$program_code = $arr_active_program[$i]['program_code'];
	echo $program_code;
}




exit;

require_class('class.DB.MSSQL');

$db = new MSSQL();

$r= $db->select(" select * from TB_ADMIN ");

print_r($r);

