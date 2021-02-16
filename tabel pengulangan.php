<!DOCTYPE html>
<html>
<head>
	<title>tabel</title>
	<style>
		.warna{
			background-color: blue;
		}
	</style>
</head>
<body>
<table border="2" cellpadding="20" cellspacing="1">
	<?php for($i = 1; $i <= 6; $i++) : ?>
		<?php if($i % 2 == 1) : ?>
			<tr class="warna">
		<?php else : ?>
			<tr></tr>
		<?php endif; ?>
			<?php for($j =1; $j <= 5; $j++) : ?>
				<td><?php echo "$i, $j"; ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>

</table>
</body>
</html>