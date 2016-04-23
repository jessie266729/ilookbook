<?php
	header('Content-Type:text/html;charset=utf-8');
	class MySql{
		private $host;
		private $name;
		private $pass;
		private $table;
		private $encoding;
		function __construct($host,$name,$pass,$table,$encoding){
			$this->host = $host;
			$this->name = $name;
			$this->pass = $pass;
			$this->table = $table;
			$this->encoding = $encoding;
			$this->connect();
		}
		function show($info){
			echo $info;
		}
		function connect(){
			// 连接数据库
			$link = @ mysql_connect($this->host,$this->name,$this->pass) or die($this->error());
			mysql_select_db($this->table,$link) or die("没有该数据库".$this->table);
			mysql_query("set names ".$this->encoding);
		}
		function query($sql,$type=''){
			if(!($query=mysql_query($sql))) $this->show("Say:".$sql);
			return $query;
		}
		function affected_rows(){
			return mysql_affected_rows();
		}
		function result($query,$row){
			return mysql_result($query, $row);
		}
		function num_rows($query){
			return @mysql_num_rows($query);
		}
		function num_fields($query){
			return mysql_num_fields($query);
		}
		function free_result($query){
			return mysql_free_result($query);
		}
		function insert_id(){
			return mysql_insert_id();
		}
		function fetch_row($query){
			return mysql_fetch_row($query);
		}
		function version(){
			return mysql_get_server_info();
		}
		function close(){
			return mysql_close();
		}
		function fetch_array($query){
			return mysql_fetch_array($query);
		}

		// ==================
		function fn_insert($table,$name,$value){
			$this->query("insert into $table ($name) values ($value)");

		}
	}
	$db = new MySql("localhost","root","","test","utf8");
?>