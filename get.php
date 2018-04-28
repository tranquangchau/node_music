<?php
	$link = 'https://bitbucket.org/!api/2.0/snippets/tranchau1991/6e8BRB/5928f136d5b89aa185106873e8e5f8a3984d8d5a/files/test.html';
	$data =file_get_contents($link);
	echo $data;