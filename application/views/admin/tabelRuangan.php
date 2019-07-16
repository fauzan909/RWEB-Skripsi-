<div id="content">
	<table class="table table-hover table-condensed">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Kapasitas</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($ruangan as $ruang){
				echo "<tr><td>". $ruang->kode_ruangan;
				echo "</td><td>". $ruang->kapasitas;
				echo "</td><td>";
				echo "<a href='". base_url() ."index.php/adminController/deleteRuangan/". $ruang->kode_ruangan ."' title='Delete'><i class='icon-remove'></i> Delete</a>";
				echo "</td></tr>";
			}
			?>
		</tbody>
		<tfoot>
			<form action="<?php echo base_url(); ?>index.php/adminController/insertRuangan" method="POST">
				<tr>

					<td></td>
				</tr>
			</form>
		</tfoot>
	</table>
</div>