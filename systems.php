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
            <div class="col-lg-6">
                <section class="system">
                    <h3><a name="@{ name }" href="@{url}">@{ title | markdown }</a></h3>
                    <hr />
                    <p>@{ text | markdown }</p>
                    <hr />
                    <a href="">DPIA</a>
                    <a href="">Protocol Statement</a>
                </section>
            </div>
        <@ end @>
    </div>
</div>

<@ snippets/javascript.php @>
<@ snippets/footer.php @>