<form method={{ $method }} v-on:submit.prevent={{ $func }}>
<div class="modal fade" id={{ $id }}>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				<h4>{{ $title }}</h4>
			</div>
			<div class="modal-body">
				<label for="keep">{{ $label }}</label>
				<input type="text" name="keep" class="form-control" v-model={{ $vmodel }}>
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value={{ $buttonvalue }}>
			</div>
		</div>
	</div>
</div>
</form>