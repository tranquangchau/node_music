<?php

include "convert_note.php";

?>

<html>
	<head>
	<style>
	pre{font-size:18px;}
	</style>
	</head>
	<body>
	
	
	<?php
$content= '

--------------
10 10 14 14 11, 12 11 10 10 14 14 11
Ngồi lại nhấp chén say, lắng trong lòng mình những đắng﻿ cay.
10 10 14 14 11, 12 11 10 10 9 9 10
Ngày dài thắm thoát rơi, muốn quên đi những phận bèo trôi.


10 10 14 14 11, 12 11 10 10 14 14 11
Ngọc ngà cũng mấy phen, lấm trong bùn hoài cũng thấy quen.
10 10 14 14 11, 12 11 10 10 9 9 10
Ngồi buồn ngó gót sen, trách sao cõi đời này đỏ đen.


12 14 15 18, 10 11 12 15 18 14
Chờ người nơi ấy, về đây mang theo dấu yêu.
10 11 12 13 14 11 11 10
Chở che cho nhau những đêm lạnh lùng.

12 14 15 18, 10 11 12 15 18 14
Chờ người đâu thấy người còn hoài xa cách xa.
10 11 12 13 14 11 11 10
Một mình trong đêm lắng nghe gió than.

-----------
10 10 14 14 11, 12 11 10 10 14 14 11
Ngồi lại nhấp chén say, lắng trong lòng mình những đắng﻿ cay.
10 10 14 14 11, 12 11 10 10 9 9 10
Ngày dài thắm thoát rơi, muốn quên đi những phận bèo trôi.


10 10 14 14 11, 12 11 10 10 14 14 11
Ngọc ngà cũng mấy phen, lấm trong bùn hoài cũng thấy quen.
10 10 14 14 11, 12 11 10 10 9 9 10
Ngồi buồn ngó gót sen, trách sao cõi đời này đỏ đen.


12 14 15 18, 10 11 12 15 18 14
Chờ người nơi ấy, về đây mang theo dấu yêu.
10 11 12 13 14 11 11 10
Chở che cho nhau những đêm lạnh lùng.

12 14 15 18, 10 11 12 15 18 14
Chờ người đâu thấy người còn hoài xa cách xa.
10 11 12 13 14 11 11 10
Một mình trong đêm lắng nghe gió than.
--------------



ĐK:

12 14 15 18, 10 11 12 15 18 14
Vì lời ai hứa một ngày dìu em bước đi.
10 11 12 13 14 11 11 10
Tìm về nơi xa , phút giây yên bình.


12 14 15 18,1 0 11 12 15 18 14
Đầu non cuối gió , người còn là mây viễn du.
10 11 12 13 14 11 11 10
Để lại đằng sau tiếng ai thở dài.


10 10 14 14 11, 12 11 10 10 14 14 11
Ngồi lại nhấp chén say, lắng trong mình những đắng﻿ cay.
10 10 14 14 11, 12 11 10 10 9 9 10
Ngày dài thắm thoát rơi, muốn quên đi những phận bèo trôi.

10 10 14 14 11, 12 11 10 10 14 14 11
Ngọc ngà cũng mấy phen, ngấm trong bùn hoài cũng thấy quen.
10 10 14 14 11, 12 11 10 10 9 9 10
Ngồi buồn ngó gót sen, trách sao cõi đời này đỏ đen...
';
$node = new convert_node($content);
?>
	
	<table>
	<tr>
	<th>left</th>
	<th>right</th>
	<th>end</th>
	<tr>
	<tr>
	<td>
	<pre>
<?php
echo $content;
?>
	</pre>
	</td>
	<td>
	<?php
	echo '<pre>' . ( $node->go_convert_tremolo_vn_tre24() ) . '</pre>';	
	?>
	</td>
	<td style=" display: inline-block; ">
	<embed src="http://www.youtube.com/v/chiavKkZW6s?version=3&amp;hl=en_US" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
	<br>
	<embed src="http://www.youtube.com/v/GdsO-YaqJt8?version=3&amp;hl=en_US" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
	</td>
	</tr>
	</table>
	
	
	

<pre>	
10 10 14 14 11
12 11 10 10 14 14 11
10 10 14 14 11
12 11 10 10 9 9 10

10 10 14 14 11
12 11 10 10 14 14 11
10 10 14 14 11
12 11 10 10 9 9 10

ĐK:

12 14 15 18
10 11 12 15 18 14
10 11 12 13 14 11 11 10


12 14 15 18, 10 11 12 15 18 14
10 11 12 13 14 11 11 10

http://www.theharmonica.net/2013/04/harmonica-tabs-cho-nguoi-noi-ay-uyen.html
</pre>
	
	</body>
</html>