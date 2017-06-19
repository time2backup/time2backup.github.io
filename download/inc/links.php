<?php
	$versions = scandir('../');
	$latest = count($versions) - 2;

	$redirect = '../';

	if ($latest > 1) {
		if (preg_match("/^[0-9].*/", $versions[$latest])) {
			$redirect .= $versions[$latest];
		}
	}
?>
