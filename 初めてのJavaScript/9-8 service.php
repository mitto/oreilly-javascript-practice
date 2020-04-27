<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<title>9-8 例9-7で発生するリクエストを処理するPHPアプリケーション</title>
	</head>
	<body>
		<?php
			
			$color = $_GET['color']; //"?color="に続く文字列が$colorに代入される
			if ($color == 'red') {
				print("<div id='val1'>バラ</div>");
				print("<div id='val2'>リンゴ</div>");
			}
			else if ($color == "blue") {
				print("<div id='val1'>ブルーベリー</div>");
				print("<div id='val2'>空</div>");
			}
			
		?>
	</body>
</html>