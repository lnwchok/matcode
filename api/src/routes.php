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
			setHeader();
			return FetchallTable($this->db, 'mainparts');
			// return FetchData($this->db, 'mainparts',true, 'description');
		});

		// List all rating
		$this->get('/rating', function ($request, $response) {
			setHeader();
			return FetchallTable($this->db, 'ratings');
		});

		// List all material
		$this->get('/material', function ($request, $response) {
			setHeader();
			return FetchallTable($this->db, 'materials');
		});


	});
	// End Version 1
});
