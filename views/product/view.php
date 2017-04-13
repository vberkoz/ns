<?php include ROOT.'/views/layouts/header.php' ?>
<main class="mdl-layout__content">
<div>
	<section class="section--center mdl-grid">
		<div class="demo-card-wide mdl-card mdl-cell mdl-cell--12-col mdl-shadow--4dp">
			<div class="mdl-card__title" style="background: url('<?php echo '../../'.$product[1][0]['image']; ?>') center / cover; height: 400px;">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" style="top: 200px; left: 690px;">
				<!-- <i class="material-icons" role="presentation">add</i> -->
				<!-- <span class="visuallyhidden">Add</span> -->
				<span>Купити</span>
				</button>
			</div>
			<div class="mdl-card__supporting-text">
				<h2 class="mdl-card__title-text" style="margin: 15px; align-self: flex-start;">
				<?php echo $product[0]['name'] .' ('. $product[0]['price'] . ' грн)'; ?>
				</h2>
				<p><?php echo $product[0]['description']; ?></p>
				<br>
				<p><b>Процесор:</b> <?php echo $product[0]['processor']; ?>;</p>
				<p><b>Пам'ять:</b> <?php echo $product[0]['memory']; ?>;</p>
				<p><b>Жорсткий диск:</b> <?php echo $product[0]['hdd']; ?>;</p>
				<p><b>Екран:</b> <?php echo $product[0]['display']; ?>;</p>
				<p><b>Відеокарта:</b> <?php echo $product[0]['graphics']; ?>;</p>
				<p><b>Оптичний диск:</b> <?php echo $product[0]['optical']; ?>;</p>
				<p><b>Комплектація:</b> <?php echo $product[0]['options']; ?></p>

                <section class="section--center mdl-grid">
					<?php foreach ($product[1] as $value): ?>
					<div class="demo-card-image mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col" style="background: url('<?php echo '../../'.$value['image']; ?>') center / cover;">
	                  <div class="mdl-card__title  mdl-card--expand"></div>
	                  <div class="mdl-card__actions">
	                    <a href="<?php echo '../../'.$value['image']; ?>" style="text-decoration: none;">
	                      <span class="demo-card-image__filename"><?php echo $product[0]['name'] ?></span>
	                    </a>
	                  </div>
	                </div>
					<?php endforeach; ?>
            	</section>

				<br>
				<p>Ноутбук був професійно протестований і ми гарантуємо що він повністю в робочому стані. Так само було очищено від пилу і замінена термопаста.</p>
			</div>
			<!-- Comments -->
			<div class="comments">
				<form class="form">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<textarea rows=1 class="mdl-textfield__input" id="comment"></textarea>
						<label for="comment" class="mdl-textfield__label">Join the discussion</label>
					</div>
					<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
					<i class="material-icons" role="presentation">check</i><span class="visuallyhidden">
						add comment
					</span>
					</button>
				</form>
				<div class="comment mdl-color-text--grey-700">
					<header class="comment__header">
						<img src="../../images/co1.jpg" class="comment__avatar">
						<div class="comment__author">
							<strong>James Splayd</strong>
							<span>2 days ago</span>
						</div>
					</header>
					<div class="comment__text">
						In in culpa nulla elit esse. Ex cillum enim aliquip sit sit ullamco ex eiusmod fugiat. Cupidatat ad minim officia mollit laborum magna dolor tempor cupidatat mollit. Est velit sit ad aliqua ullamco laborum excepteur dolore proident incididunt in labore elit.
					</div>
					<nav class="comment__actions">
						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
						<i class="material-icons" role="presentation">thumb_up</i><span class="visuallyhidden">like comment</span>
						</button>
						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
						<i class="material-icons" role="presentation">thumb_down</i><span class="visuallyhidden">dislike comment</span>
						</button>
						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
						<i class="material-icons" role="presentation">share</i><span class="visuallyhidden">share comment</span>
						</button>
					</nav>
					<form class="form">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<textarea rows=1 class="mdl-textfield__input" id="comment"></textarea>
							<label for="comment" class="mdl-textfield__label">Answer</label>
						</div>
						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
						<i class="material-icons" role="presentation">check</i><span class="visuallyhidden">
							add comment
						</span>
						</button>
					</form>
					<div class="comment__answers">
						<div class="comment">
							<header class="comment__header">
								<img src="../../images/co2.jpg" class="comment__avatar">
								<div class="comment__author">
									<strong>John Dufry</strong>
									<span>2 days ago</span>
								</div>
							</header>
							<div class="comment__text">
								Yep, agree!
							</div>
							<nav class="comment__actions">
								<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
								<i class="material-icons" role="presentation">thumb_up</i><span class="visuallyhidden">like comment</span>
								</button>
								<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
								<i class="material-icons" role="presentation">thumb_down</i><span class="visuallyhidden">dislike comment</span>
								</button>
								<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
								<i class="material-icons" role="presentation">share</i><span class="visuallyhidden">share comment</span>
								</button>
							</nav>
						</div>
						<form class="form">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<textarea rows=1 class="mdl-textfield__input" id="comment"></textarea>
								<label for="comment" class="mdl-textfield__label">Answer</label>
							</div>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
							<i class="material-icons" role="presentation">check</i><span class="visuallyhidden">
								add comment
							</span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php include ROOT.'/views/layouts/footer.php' ?>