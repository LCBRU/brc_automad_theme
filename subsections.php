<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<@ snippets/header.php @>

<div>
	<section>
		<h2>@{ title }</h2>
		<p>@{ text_introduction | markdown }</p>
	</section>

    <div class="sebsections row">
        <@ newPagelist { 
            type: 'children',
            excludeHidden: false,
            sort: "order asc"
        } @>
        <@ foreach in pagelist @>
            <div class="col-md-6">
                <section class="subsection">
                    <h3>@{ title | markdown }</h3>
                    <hr />
                    <p>@{ text | markdown }</p>
                </section>
            </div>
        <@ end @>
    </div>
</div>

<@ snippets/javascript.php @>
<@ snippets/footer.php @>
