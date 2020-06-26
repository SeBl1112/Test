<?php echo form_open('equipo/edit/'.$equipo['idEquipo'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="idLider" class="col-md-4 control-label">Lider</label>
		<div class="col-md-8">
			<select name="idLider" class="form-control">
				<option value="">select lider</option>
				<?php 
				foreach($all_lider as $lider)
				{
					$selected = ($lider['idLider'] == $equipo['idLider']) ? ' selected="selected"' : "";

					echo '<option value="'.$lider['idLider'].'" '.$selected.'>'.$lider['Nombre'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="NombreProyecto" class="col-md-4 control-label">NombreProyecto</label>
		<div class="col-md-8">
			<input type="text" name="NombreProyecto" value="<?php echo ($this->input->post('NombreProyecto') ? $this->input->post('NombreProyecto') : $equipo['NombreProyecto']); ?>" class="form-control" id="NombreProyecto" />
		</div>
	</div>
	<div class="form-group">
		<label for="costo" class="col-md-4 control-label">Costo</label>
		<div class="col-md-8">
			<input type="text" name="costo" value="<?php echo ($this->input->post('costo') ? $this->input->post('costo') : $equipo['costo']); ?>" class="form-control" id="costo" />
		</div>
	</div>
	<div class="form-group">
		<label for="duracion" class="col-md-4 control-label">Duracion</label>
		<div class="col-md-8">
			<input type="text" name="duracion" value="<?php echo ($this->input->post('duracion') ? $this->input->post('duracion') : $equipo['duracion']); ?>" class="form-control" id="duracion" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>