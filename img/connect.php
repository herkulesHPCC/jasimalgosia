<?php
    try {
	
        $pdo = new PDO('mysql:host=localhost;dbname=28967964_jasimalgosia;encoding=utf8', '28967964_jasimalgosia', 'Herkules2018');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
        $pdo -> query ('SET NAMES utf8');
        $pdo -> query ('SET CHARACTER_SET utf8_unicode_ci');
    } catch( PDOException $e ) {
        echo 'ERROR: ' . $e->getMessage();        
    }

?>