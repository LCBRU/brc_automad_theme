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
            sort: "title asc"
        } @>
        <@ foreach in pagelist @>
            <div class="col-lg-6">
                <section class="system">
                    <h3 class="@{visibility}">@{ title }</h3>
                    <@ if @{ text } @>
                        <hr />
                        <p>@{ text | markdown }</p>
                    <@ end @>

                    <hr />
                    <@ if @{ application_url } @>
                        <a class="btn btn-primary @{visibility}" href="@{application_url}" download>Link</a>
                    <@ end @>
                    <@ if @{ dpia_url } @>
                        <a class="btn btn-primary" href="@{dpia_url}" download>DPIA</a>
                    <@ end @>
                    <@ if @{ protocol_statement_id } @>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Protocol Statement
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body protocol_statement" data-protocol-statement-id="@{ protocol_statement_id }"></div>
                        </div>
                    <@ end @>
                </section>
            </div>
        <@ end @>
    </div>
</div>

<@ snippets/javascript.php @>
<@ snippets/footer.php @>
