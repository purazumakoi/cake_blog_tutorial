<!doctype html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('編集');
?>



</body>
</html>