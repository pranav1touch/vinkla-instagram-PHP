<?php
	require_once __DIR__ . '/vendor/autoload.php';

	use Vinkla\Instagram\Instagram;

	$instagram = new Instagram('29653439158.1677ed0.4de3bffee7304ba7845c23b3eca61b2a');

	$media = $instagram->media(['count' => 5]);
	

	foreach ($media as $keyM => $valueM) 
	{
		$media[$keyM]->comments = $instagram->comments($valueM->id);
	}


	


	echo "<pre>";print_r($media); die();
?>