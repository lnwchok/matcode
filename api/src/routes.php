<?php

$app->group('/api', function () {
	// Version 1
	$this->group('/v1', function () {

		/**
		 * DB Table list
		 * categories
		 * connections
		 * gaskets
		 * materials
		 * types
		 * walls
		 *
		 */

		// List all mainpart
		$this->get('/mainpart', function ($request, $response) {
			return FetchTable($this->db, 'mainparts');
		});

		// List all rating
		$this->get('/rating', function ($request, $response) {
			return FetchTable($this->db, 'ratings');
		});



	});
	// End Version 1
});
