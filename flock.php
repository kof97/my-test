<?php 

function processWriteInFile($path, $mode, $data)
{
	fopen($path, $mode);

	$times = 0;

	while (true) {

		if ($times > 30) {
			echo "file locked";
			return 0;
		}

		if (flock($path, LOCK_EX)) {
			fwrite($path, $data);

			break;
		} else {
			$times++;
			usleep(1000);
		}
	}

	flock($path, LOCK_UN);
	fclose($path);

}


