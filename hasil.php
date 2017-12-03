<?php 
$nilai = $_GET['hasil']*50;
$waktu = $_GET['timer'];
?>
<tr>
	<td>Nilai Yang Kamu Dapat : </td>
	<td><?php echo $nilai;?></td>
</tr>
<tr>
	<td>Waktu Pengerjaan : </td>
	<td><?php echo $waktu;?></td>
</tr>
<tr>
	<td>Terima Kasih Telah Mengikuti Ujian Online Ini !!</td>
</tr>
<tr>
	<td><input type="button" onclick="window.location.href='choose.php'" value="Back To Menu"></td>
</tr>