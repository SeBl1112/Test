<?php echo form_open('lider/edit/'.$lider['idLider'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Nombre" class="col-md-4 control-label">Nombre</label>
		<div class="col-md-8">
			<input type="text" name="Nombre" value="<?php echo ($this->input->post('Nombre') ? $this->input->post('Nombre') : $lider['Nombre']); ?>" class="form-control" id="Nombre" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>