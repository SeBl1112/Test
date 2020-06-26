<div class="pull-right">
	<a href="<?php echo site_url('lider/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdLider</th>
		<th>Nombre</th>
		<th>Actions</th>
    </tr>
	<?php foreach($lider as $l){ ?>
    <tr>
		<td><?php echo $l['idLider']; ?></td>
		<td><?php echo $l['Nombre']; ?></td>
		<td>
            <a href="<?php echo site_url('lider/edit/'.$l['idLider']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('lider/remove/'.$l['idLider']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
