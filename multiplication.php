<style>
	table, tr, td {border: solid #abcdef 1px; border-collapse: collapse; text-align: center;}
	tr {line-height: 30px;}
	td {padding: 0 15px;}

</style>
<?php 
	function multi($num) {
		echo '<table><tr><td><b>0</b></td>';
		for($i = 1; $i <= $num; $i++){
			echo '<td><b>' . $i . '</b></td>';
		}
		echo '</tr>';

		for($i = 1; $i <= $num; $i++){
			echo '<tr><td><b>' . $i . '</b></td>';
			for($j = $i; $j <= $num; $j++){
				echo '<td>' . $i * $j . '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
	
	multi(15);
?>