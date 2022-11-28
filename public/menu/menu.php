<?php $parent = isset( $category['childs'] ); ?>
<li>
	<a href="category=<?php echo $category['alias']; ?>"><?php echo $category['title'] ?></a>
	<?php debug( $category['childs'] ); ?>
	<?php if ( isset( $category['childs'] ) ) : ?>
		<ul>
			<?php debug( $this ); ?>
			<?php echo $this->getMenuHtml(  ); ?>
		</ul>
	<?php endif; ?>
</li>