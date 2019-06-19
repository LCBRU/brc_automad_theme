<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<@ snippets/header.php @>



<div>
	<section>
		<h2>@{ title }</h2>
		<p>@{ text_introduction | markdown }</p>
	</section>

	<div class="card">
		<div class="card-header"></div>
		<div class="card-body">
			@{ text_main | markdown }
		</div>
	</div>
</div>

<@ snippets/javascript.php @>
<@ snippets/footer.php @>