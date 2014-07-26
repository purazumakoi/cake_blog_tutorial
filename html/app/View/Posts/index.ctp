<!doctype html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<?php
echo $this->Html->link(
	'Add Post',
	array('controller' => 'posts', 'action' => 'add')
);
?>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Action</th>
		<th>Created</th>
	</tr>

	<!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

	<?php foreach ($posts as $post): ?>
		<tr>
			<td><?php echo $post['Post']['id']; ?></td>
			<td>
				<?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Form->postLink(
					'Delete',
					array('action' => 'delete', $post['Post']['id']),
					array('confirm' => 'Are you sure?'));
				?>
				<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>

			</td>
			<td>
				<?php echo $post['Post']['created']; ?>
			</td>
		</tr>
	<?php endforeach; ?>
	<?php unset($post); ?>
</table>


</body>
</html>