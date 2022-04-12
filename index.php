<?php
	require('config/db.php');

	// Create Query
	$query = 'SELECT * FROM posts';

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
	<div>
	<head>
		<title>PHP Blog</title>
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/cerulean/bootstrap.min.css">
	</head>
	<body>
	<h1>Posts</h1>
	<?php foreach($posts as $post) : ?>
		<div class="well">
				<h3><?php echo $post['title']; ?></h3>
				<small>Created on <?php echo $post['created_at']; ?> by
				<?php echo $post['author']; ?></small>
				<p><?php echo $post['body']; ?></p>
		</div>
		<?php endforeach; ?>
	</body>
	</div>
</html>