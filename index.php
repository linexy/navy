<?php
/**
 * 简单的响应式模板
 * 
 * @package Navy
 * @author cho
 * @version 1.0
 * @link http://pagecho.com
 */
 $this->need('header.php');
 ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<?php while($this->next()): ?>
			<article class="post">				
				<date class="post-meta">
					<?php $this->date('F j, Y'); ?>
				</date>
				<header>
					<h2 class="post-title">
						<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h2>
				</heaer>
				<div class="post-content">
					<?php $this->content('阅读更多 -'); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php $this->pageNav('&laquo; Previous','Next &raquo;',10,'...');?>
	</div>
</div>
<?php $this->need('footer.php'); ?>
<?php $this->need('sidebar.php'); ?>

