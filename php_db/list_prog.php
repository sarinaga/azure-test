<?php


/**
 * ユーザーリスト一覧取得
 */
function getUserList(){

	    header('Content-Type: text/plain; charset=UTF-8', true, 500);	
	    print("Error connecting to SQL Server.");

	// Azure SQL server接続
	try {
	    $pdo = new PDO("sqlsrv:server = tcp:takahata.database.windows.net,1433; Database = takahata", "takahata", "Aaaa1euy");
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
	    header('Content-Type: text/plain; charset=UTF-8', true, 500);	
	    print("Error connecting to SQL Server.");
    	die(print_r($e));
	}

	// userテーブル全取得
	try {
		$stmt = $pdo->query('SELECT * FROM users');
	} catch (PDOException $e) {
	    header('Content-Type: text/plain; charset=UTF-8', true, 500);	
	    print("Error database access.");
    	die(print_r($e));
	}

	return $stmt;

}


