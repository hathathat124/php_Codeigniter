<?php
/**
 * index.php
 * Contains datebase  and folder configuration
 * @author Tayyib Oladoja
 * @version 1.0
 * @date 10-05-2016
 * @website www.tayyiboladoja.com
 * @package Email Tracker
**/


		$mysql_hostname = 'localhost';
		$mysql_username = 'root';
		$mysql_password = '';
		$mysql_dbname = 'email-tracking';
		$protocol ='http';
		$folder_path = 'email-tracker';


include "create-table.php";
?>
