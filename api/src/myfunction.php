<?php
function setHeader() {
	header("Content-Type: application/json");
	header("Access-Control-Allow-Origin: *");
}

function FetchData(PDO $pdo, $table, $column = '*', $notNull = true) {
	try {
		$stmt = $pdo->prepare("select {$column} from {$table} " . ($notNull ? "where description not null" : ""));
		$stmt->execute();
		$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return json_encode($res);
	} catch(PDOException $e) {
        return json_encode([['error' => $e->getMessage()]]);
  }
}

function FetchallTable(PDO $pdo, $table, $notNull = true) {
	return FetchData($pdo, $table, '*', $notNull);
}

function FetchColumnTable(PDO $pdo, $table, $column, $notNull = true) {
	return FetchData($pdo, $table, $column, $notNull);
}

// function FetchCode(PDO $pdo, $table, $description, $notNull = true) {
// 	try {
// 		$stmt = $pdo->prepare("SELECT code FROM {$table} WHERE descr = :descr");
// 		$stmt->bindParam(':descr', $description, PDO::PARAM_STR);
// 		$stmt->execute();
// 		$res = $stmt->fetch(PDO::FETCH_ASSOC);
// 		return json_encode($res);
// 	} catch(PDOException $e) {
//         return json_encode([['error' => $e->getMessage()]]);
//     }
// }
