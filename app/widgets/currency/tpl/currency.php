<option value="<?php echo $this->currency['code']; ?>" class="label"><?php echo $this->currency['code']; ?></option>
<?php foreach ( $this->currencies as $k => $v ) : ?>
	<?php if ( $k !== $this->currency['code'] ) : ?>
		<option value="<?php echo $k; ?>"><?php echo $k; ?></option>
	<?php endif; ?>
<?php endforeach; ?>