<?php
$article = array('title' => 'my article title', 'body' => 'lorem ipsum');






function aTag($tag, $attributes, $content){
	
	$html = '<' . $tag;
	foreach($attributes as $key=>$value){
		if(isset($value)){
			$html .= ' ' . $key . '="' . $value . '"';		
		}
		else {
			die('Not an array!');
		}
	}
	$html .= '>' . $content . "</" . $tag . "><br>\n";
	
	//return $html;
	
	echo $html;
	 
}




/*function printarticle($article) {

	foreach($article as $key => $content) {

		switch ($key) {
			case "title":
			$tag = 'h1';
			$attributes = array("class" => "title");
			break;
			case "body":
			$tag = 'p';
			$attributes = array("class" => "content");
			break;
		}
	}
}*/	
function article_writer($content) {
	foreach ($content as $key => $value) {
		$attributes = array('Class' => $key);

		switch ($key) {
			case 'title':
			$tag = 'H1';
			break;
			case 'body':
			$tag = 'p';
			break;
		}

		$html = aTag($tag, $attributes, $value);
	}
	
}

article_writer($article);

?>
