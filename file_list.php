<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

<div>
	<section>
		<h2>@{ title }</h2>
		<p>@{ text_introduction | markdown }</p>
	</section>

	<section>
		<p>
			@{ text_main | markdown }
		</p>
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
		</section>
</div>
	
<@ snippets/javascript.php @>
<@ snippets/footer.php @>