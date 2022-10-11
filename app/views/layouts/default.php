<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->getMeta(); ?>
	<style>
		pre {
			padding: 10px;
			background-color: #eee;
		}
	</style>
</head>
<body>
	<?php echo $content; ?>
	<?php $logs = \R::getDatabaseAdapter()->getDatabase()->getLogger()->grep( 'SELECT' ); ?>
	<?php if ( !empty( $logs ) ) : ?>
		<pre><?php print_r( $logs ); ?></pre>
	<?php endif; ?>
</body>
</html>