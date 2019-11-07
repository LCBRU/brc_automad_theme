<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<@ snippets/header.php @>

<div>
	<section>
		<h2>@{ title }</h2>
		<p>@{ text_introduction | markdown }</p>
	</section>

	<section class="subsections">
        <@ newPagelist { 
            type: 'children',
            excludeHidden: false 
        } @>
        <@ foreach in pagelist @>
            <div class="subsection">
                <h2>@{ title }</h2>
                <hr />
                <p>
                    @{ text }
                </p>
            </div>
        <@ end @>
	</section>
</div>

<@ snippets/javascript.php @>
<@ snippets/footer.php @>
