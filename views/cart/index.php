<?php include ROOT.'/views/layouts/header.php' ?>
<main class="mdl-layout__content">
	<div>
		<section class="section--center mdl-grid">
			<!-- <div class="demo-card-wide mdl-card mdl-cell mdl-cell--12-col mdl-shadow--4dp">
        <div class="mdl-card__supporting-text"> -->
          <!-- <h5>Кошик</h5> -->
          <?php if ($productsInCart): ?>
            <!-- <p>Ви вибрали такі товари:</p> -->
            <!-- <div class="mdl-grid"> -->
              <div class="mdl-cell mdl-cell--12-col">

                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp"
                style="margin: auto;">
                  <thead>
                    <tr>
                      <th>Код</th>
                      <th>Зображення</th>
                      <th class="mdl-data-table__cell--non-numeric">Назва</th>
                      <th>Вартість, грн</th>
                      <th>Кількість, шт</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($products as $product): ?>
                      <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><img src="../../<?php echo $product['image']; ?>" width="50"></td>
                        <td class="mdl-data-table__cell--non-numeric">
                          <a href="/product/<?php echo $product['id']; ?>">
                            <?php echo $product['name']; ?>
                          </a>
                        </td>
                        <td><?php echo $product['price']; ?></td>
                        <td><?php echo $productsInCart[$product['id']]; ?></td>
                        <td>
                          <button class="mdl-button mdl-js-button
                          mdl-button--fab mdl-js-ripple-effect
                          mdl-button--colored"  style="height: 30px; min-width: 30px; width: 30px;">
                            <i class="material-icons">remove circle outline</i>
                          </button>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    <tr>
                      <td colspan="3">Загальна вартість:</td>
                      <td><?php echo $totalPrice; ?></td>
                      <td colspan="2">
												<button class="mdl-button mdl-js-button mdl-button--raised
												mdl-js-ripple-effect mdl-button--accent" style="float: right;">
												Замовити</button>
											</td>
                    </tr>
                  </tbody>
                </table>

              </div>
            <!-- </div> -->
          <?php else: ?>
            <p>Кошик порожній</p>
          <?php endif; ?>
        <!-- </div>
			</div> -->
		</section>
	</div>
	<?php include ROOT.'/views/layouts/footer.php' ?>
