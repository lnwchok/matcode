<?php

$app->group('/api', function () {
	// Version 1
	$this->group('/v1', function () {

		// List all mainpart
		$this->get('/mainpart', function ($request, $response) {
			return FetchTable($this->db, 'MainParts');
		});

	});
	// End Version 1
});
