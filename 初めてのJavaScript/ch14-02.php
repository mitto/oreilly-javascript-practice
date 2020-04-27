<?php
	if (empty($_GET['pref'])) {
		echo "都道府県が指定されていません";
	}
	else {
		//検索対象から始めと終わりのホワイトスペースを取り除く
		$search = trim($_GET['pref']);
		switch ($search) {
			case "HO" :
				$result = "<option value='札幌'>札幌</option>" .
				"<option value='旭川'>旭川</option>" .
				"<option value='根室'>根室</option>";
				break;
			
			case "FU" :
				$result = "<option value='福井'>福井</option>" .
				"<option value='鯖江'>鯖江</option>" .
				"<option value='越前'>越前</option>";
				break;
				
			case "NA" :
				$result = "<option value='長野'>長野</option>" .
				"<option value='松本'>松本</option>" .
				"<option value='Web 3.0シティ'>Web 3.0シティ</option>";
				break;
				
			case "NA" :
				$result = "<option value='那覇'>那覇</option>" .
				"<option value='石垣'>石垣</option>" .
				break;
				
			default :
				$result = "都市が見つかりません";
				break;

		}
		echo $result;
	}
?>