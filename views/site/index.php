<?php include ROOT.'/views/layouts/header.php' ?>
<main class="mdl-layout__content">
<div class="demo">
	<div class="section--center mdl-grid">
		<?php foreach($products as $product):?>
		<div class="demo-card-wide mdl-card  mdl-cell mdl-cell--4-col mdl-shadow--2dp">
			<div class="mdl-card__title"
			style="background:url('<?php echo $product['image']; ?>')center/cover;">
			</div>
			<div class="mdl-card__supporting-text">
				<h2 class="mdl-card__title-text"><?php echo $product['name']; ?></h2>
				<div>
					<div><b>Центральний процесор:</b> <?php echo $product['processor']; ?>; </div>
					<div><b>Пам'ять:</b> <?php echo $product['memory']; ?>; </div>
					<div><b>Жорсткий диск:</b> <?php echo $product['hdd']; ?>; </div>
					<div><b>Екран:</b> <?php echo $product['display']; ?>; </div>
					<div><b>Графічний процесор:</b> <?php echo $product['graphics']; ?></div>
				</div>
			</div>
			<div class="mdl-card__actions mdl-card--border">
				<a class="mdl-button mdl-js-button mdl-button--raised
				mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp
				mdl-color--accent add-to-cart"
				data-id="<?php echo $product['id']; ?>"

				style="color: #fff">В кошик</a>
				<a class="mdl-button mdl-button--colored mdl-js-button
				mdl-js-ripple-effect"
				href="product/<?php echo $product['id']; ?>">Переглянути</a>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>

	<?php include ROOT.'/views/layouts/footer.php' ?>
