<h1>Data from the database</h1>

<?php if ( !empty( $messages ) ) : ?>
	<?php foreach( $messages as $message ) : ?>
		<h3><?php echo $message->title; ?></h3>
	<?php endforeach; ?>
<?php else: ?>
	<p>Messages not found</p>
<?php endif; ?>