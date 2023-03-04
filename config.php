<?php

// There is all your configuration

$ad_ddos_query = 5;
$ad_all_file = 'all_ip.txt';
$ad_black_file = 'black_ip.txt';
$ad_check_file = 'check.txt';
$ad_white_file = 'white_ip.txt';
$ad_temp_file = 'ad_temp_file.txt';
$ad_dir = 'anti_ddos/files';
$ad_num_query = 0;
$ad_sec_query = 0;
$ad_end_defense = 0;
$ad_sec = date("s");
$ad_date = date("is");
$ad_defense_time = 100;

$config_status = "";
function Create_File($the_path)
{
	$handle = fopen($the_path, 'w') or die('Cannot open file:  ' . $the_path);
	return "Creating " . $the_path . " .... done";
}


$config_status .= (!file_exists("{$ad_dir}/{$ad_check_file}")) ? Create_File("{$ad_dir}/{$ad_check_file}") : "ERROR: Creating " . "{$ad_dir}/{$ad_check_file}<br>";
$config_status .= (!file_exists("{$ad_dir}/{$ad_temp_file}")) ? Create_File("{$ad_dir}/{$ad_temp_file}") : "ERROR: Creating " . "{$ad_dir}/{$ad_temp_file}<br>";
$config_status .= (!file_exists("{$ad_dir}/{$ad_black_file}")) ? Create_File("{$ad_dir}/{$ad_black_file}") : "ERROR: Creating " . "{$ad_dir}/{$ad_black_file}<br>";
$config_status .= (!file_exists("{$ad_dir}/{$ad_white_file}")) ? Create_File("{$ad_dir}/{$ad_white_file}") : "ERROR: Creating " . "{$ad_dir}/{$ad_white_file}<br>";
$config_status .= (!file_exists("{$ad_dir}/{$ad_all_file}")) ? Create_File("{$ad_dir}/{$ad_all_file}") : "ERROR: Creating " . "{$ad_dir}/{$ad_all_file}<br>";

if (!file_exists("{$ad_dir}/../anti_ddos.php")) {
	$config_status .= "anti_ddos.php does'nt exist!";
}

if (
	!file_exists("{$ad_dir}/{$ad_check_file}") or
	!file_exists("{$ad_dir}/{$ad_temp_file}") or
	!file_exists("{$ad_dir}/{$ad_black_file}") or
	!file_exists("{$ad_dir}/{$ad_white_file}") or
	!file_exists("{$ad_dir}/{$ad_all_file}") or
	!file_exists("{$ad_dir}/../anti_ddos.php")
) {

	$config_status .= "Some files does'nt exist!";
	die($config_status);
}
