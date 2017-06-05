<?php

	require_once 'PHPWord.php';

	$PHPWord = new PHPWord();

	//$template = $PHPWord->loadTemplate('template.docx');
	$template = $PHPWord->loadTemplate('附件2 租赁物明细表.docx');

	$template->setValue('carBrand', 'hello');
	//$template->setValue('test2', 'whats');
//	$template->setValue('test3', 'up');
//	$template->setValue('test4', 'koby');
//	$template->setValue('test5', '!!!!!!');
//	$template->setValue('name', 'wo');
//$template->setValue('name1', 'wo');
	$template->save('王健- 宝.docx');
	//$template->setValue('Street', 'Coming-Undone-Street 32');

?>