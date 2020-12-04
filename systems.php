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
                        <a class="btn btn-primary @{visibility}" href="@{application_url}" target='_blank'>Link</a>
                    <@ end @>
                    <@ if @{ dpia_url } @>
                        <a class="btn btn-primary" href="@{dpia_url}" download>DPIA</a>
                    <@ end @>
                    <@ if @{ protocol_statement_id } @>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-title="@{ title }" data-protocol-statement-id="@{ protocol_statement_id }">Protocol Statement</button>
                    <@ end @>
                </section>
            </div>
        <@ end @>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>

<@ snippets/javascript.php @>

<script>
$(document).ready(function(){
     $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var protocol_statement_id = button.data('protocol-statement-id');
        var title = button.data('title');

        var modal = $(this);
        modal.find('.modal-title').text('Protocol Statement for ' + title);

        url = "https://info.lbrc.le.ac.uk/information_governance/security_statement/text/" +  protocol_statement_id;

        callback = function(m) {
            return function (data) {
                content = '<p>' + data.replace(/\n([ \t]*\n)+/g, '</p><p>').replace('/\n/g', '<br />') + '</p>';
                m.find('.modal-body').html(content);
            }
        }

        $.get(url, callback(modal));

    });
});
</script>

<@ snippets/footer.php @>

