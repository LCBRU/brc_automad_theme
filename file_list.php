<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

<div>
	<section>
		<h2>@{ title }</h2>
		<p>@{ text_introduction }</p>
	</section>

	<div class="card">
		<div class="card-header"></div>
		<div class="card-body">
			@{ text_main }
		</div>
		<ul>
			<@ filelist { 
				glob: @{ files | def ('*.docx, *.pdf, *.pptx') },
				sort: 'asc'
			} @>

			<@ foreach in filelist @>
				<li>
					<a href="@{ :file }" target="_blank" >@{ :caption | stripTags }</a>
				</li>
			<@ end @>
		</ul>
	</div>
</div>
	
<@ snippets/javascript.php @>
<@ snippets/footer.php @>