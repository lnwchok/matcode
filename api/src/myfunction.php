<?php

function FetchTable(PDO $pdo, $table) {
	try {
		$stmt = $pdo->prepare("select * from {$table}");
		$stmt->execute();
		$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return json_encode($res);
	} catch(PDOException $e) {
        return json_encode([['error' => $e->getMessage()]]);
    }

}

function FetchCode(PDO $pdo, $table, $description) {
	try {
		$stmt = $pdo->prepare("SELECT code FROM {$table} WHERE descr = :descr");
		$stmt->bindParam(':descr', $description, PDO::PARAM_STR);
		$stmt->execute();
		$res = $stmt->fetch(PDO::FETCH_ASSOC);
		return json_encode($res);
	} catch(PDOException $e) {
        return json_encode([['error' => $e->getMessage()]]);
    }
}