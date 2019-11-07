<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<@ snippets/header.php @>

<div>
	<section>
		<h2>@{ title }</h2>
		<p>@{ text_introduction | markdown }</p>
	</section>

    <@ newPagelist { 
        type: 'children',
        excludeHidden: false 
    } @>
    <@ foreach in pagelist @>
        <section class="subsection">
            <h3>@{ title }</h3>
            <hr />
            <p>
                @{ text }
            </p>
        </section>
    <@ end @>
</div>

<@ snippets/javascript.php @>
<@ snippets/footer.php @>
