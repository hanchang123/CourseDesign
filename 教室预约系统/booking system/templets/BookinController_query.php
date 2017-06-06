<?php
	if (!$result == false) {
		$i = 0;
		echo "<table>";
		foreach ($result as $roomName) {
			if ($i == 0)
			echo "<tr>";
?>
		<td onclick="$('#content').load('index.php?controller=BookinController&action=book&date=<?php
			echo $date;?>&period=<?php echo $period?>&roomName=<?php echo $roomName?>')"><?php echo $roomName?></td>
<?php
			$i++;
			if ($i == 4) {
				$i = 0;
				echo "</tr>";
			}
		}
		echo "</table>";
	}
	else {
		echo "<p>已经没有空闲的了-_-!!</p>";
	}
?>
