<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			<header>
				<h1 class="post-title">
					<?php $this->title() ?>
				</h1>
			</header>
			<div class="page-content post-content">
				<?php $this->content(); ?>
			</div>
			
			<footer class="post-footer">
				<section class="author">
					<div class="author-ava">
						<img src="http://www.gravatar.com/avatar/24c8403d32caef37a77eecd66188d3e0?s=120&amp;r=X&amp;d=" alt="cho" width="160" height="160" />					</div>
					<p>总有些美好值得我们为之奋斗</p>
				</section>
            </footer>
            
		</article>
		
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>