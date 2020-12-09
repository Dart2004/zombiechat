<?php
	$name = $_POST["name"];
	$message = $_POST["message"];
	if($name != "" && $message != ""){
		$chat = file_get_contents("chat.html");
		$file = @fopen("chat.html","w");
		fwrite($file, '<p class="msg">
	<span class="user">'.$name.'</span>
	'.str_replace('<','"/>',str_replace('>','<call arg="',$message)).'
</p>
'.$chat);
	}
?>
<link href="style.css" rel="stylesheet">
<title>Hi</title>
<form class="post">
<input required placeholder="Full Name" id="name" name="name" /><br>
<input required placeholder="Message" id="message" name="message" />
<input type="submit" value="Send"/>
</form>
<chat>
	<?php
		include "chat.html";
	?>
</chat>
