<?php 

require 'func.php';





$data_game = query("SELECT * FROM heroes_tb");



 ?>

<h1>Daftar GAMES</h1>

<a href="add.php">Tambah</a>


 <table border="1" cellspacing="0" cellpadding="1" center>

<tr>
	
	<th>No</th>
	<th>Name</th>
	<th>Photo</th>
	<th>AKSI</th>

</tr>

<?php $i=1; ?>
<?php  foreach ($data_game as $k ) :?>
<tr>
	
	<td><?=  $i;?></td>
	<td><?= $k ?></td>
	<td><img src="img/<?php $k['photo'] ?>"></td>
	<td>
		<a href="hapus.php?id= <?= $k['id']; ?>">hapus</a>
		<a href="edit.php">edit</a>

	</td>



</tr>

<?php $i++; ?>

<?php endforeach; ?>




 </table>