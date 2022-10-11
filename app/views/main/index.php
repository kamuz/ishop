<h1>Hello, World!</h1>

<p>My name is <?php echo $name; ?>, I'm from <?php echo $country; ?>.</p>

<p>I work as <?php echo $work['position'] ?> on <?php echo $work['company'] ?> platform.</p>

<?php if ( !empty( $todo ) ) : ?>
	<ul>
		<?php foreach( $todo as $task ) : ?>
			<li><?php echo $task; ?></li>
		<?php endforeach; ?>
	</ul>
<?php else: ?>
	<p>I'm free today</p>
<?php endif; ?>