<div id="editModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				    <h5 class="text-center" id="mtitle"></h5>
				<span id="form_result"></span>
				<form method="post" id="add" class="form-horizontal" enctype="multipart/form-data">
					@csrf
					<div id="newform">
						
					</div>


					<br />
					<div class="form-group" align="center">
						<input type="hidden" name="hidden_id" id="hidden_id" />
						<input type="hidden" name="ktg_id" id="ktg_id" />
						<input type="submit" name="action_button" id="action_button" class="btn btn-primary" value="Simpan" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>