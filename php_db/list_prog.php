<?php


/**
 * ���[�U�[���X�g�ꗗ�擾
 */
function getUserList{

	// Azure SQL server�ڑ�
	try {
	    $conn = new PDO("sqlsrv:server = tcp:takahata.database.windows.net,1433; Database = takahata", "takahata", "Aaaa1euy");
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
	    header('Content-Type: text/plain; charset=UTF-8', true, 500);	
	    print("Error connecting to SQL Server.");
    	die(print_r($e));
	}

	// user�e�[�u���S�擾
	try {
		$stmt = $pdo->query('SELECT * FROM users');
	} catch (PDOException $e) {
	    header('Content-Type: text/plain; charset=UTF-8', true, 500);	
	    print("Error database access.");
    	die(print_r($e));
	}

	return $stmt;

}


