<?php
	require_once __DIR__ . '/vendor/autoload.php';

	use Vinkla\Instagram\Instagram;

	$instagram = new Instagram('29653439158.1677ed0.4de3bffee7304ba7845c23b3eca61b2a');

	$media = $instagram->media(['count' => 5]);	

	$comments = $instagram->comments('2242106927400496773_29653439158');

	// echo"<pre>";print_r($media); die();

	echo "<pre>";print_r($comments); die();
?>