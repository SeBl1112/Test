<div class="pull-right">
	<a href="<?php echo site_url('equipo/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdEquipo</th>
		<th>Lider de proyecto</th>
		<th>Nombre Proyecto</th>
		<th>Costo</th>
		<th>Duracion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($equipos as $e){ ?>
    <tr>
		<td><?php echo $e['idEquipo']; ?></td>
		<td><?php echo $e['Nombre']; ?></td>
		<td><?php echo $e['NombreProyecto']; ?></td>
		<td><?php echo $e['costo']; ?></td>
		<td><?php echo $e['duracion']; ?></td>
		<td>
            <a href="<?php echo site_url('equipo/edit/'.$e['idEquipo']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('equipo/remove/'.$e['idEquipo']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
