<h3>Manage</h3>
<table>
	<thead>
		<tr>
			<td>Name</td>
			<td>Email</td>
			<td>Gender</td>
			<td>Language</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
	<?php
		foreach($student_arr as $data)
		{
	?>
		<tr>
			<td><?php echo $data->Name ?></td>
			<td><?php echo $data->Email ?></td>
			<td><?php echo $data->Gender ?></td>
			<td><?php echo $data->Language ?></td>
			<td><a href="edit_student?btn_Student_id=<?php echo $data->Student_id;?>">Edit</a></td>
		</tr>
	<?php
		}
	?>
	</tbody>
</table>