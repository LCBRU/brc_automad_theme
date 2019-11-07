<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<@ snippets/header.php @>



<div>
	<section>
		<h2>@{ title }</h2>
		<p>@{ text_introduction | markdown }</p>
	</section>

	<section class="links">
		@{ text_main | markdown }
	</section>
</div>

<@ snippets/javascript.php @>
<@ snippets/footer.php @>