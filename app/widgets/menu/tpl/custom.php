<li>
	<a href="category/<?=$category['alias'];?>"><?=$category['title'];?></a>
	<?php if ( isset( $category['childs'] ) ) : ?>
		<ul>
			<?php echo $this->getMenuHtml( $category['childs'] ); ?>
		</ul>
	<?php endif; ?>
</li>