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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-protocol-statement-id="@{ protocol_statement_id }">Protocol Statement</button>
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
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        alert('Hello');

        var button = $(event.relatedTarget)
        var recipient = button.data('protocol-statement-id')

        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>

<@ snippets/javascript.php @>
<@ snippets/footer.php @>
