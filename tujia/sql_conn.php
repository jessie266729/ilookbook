<?php
	header('Content-Type:text/html;charset=utf-8');
	class MySql{
		private $host;
		private $sqlName;
		private $sqlPass;
		private $tableName;
		private $encoding;
		function __construct($host,$sqlName,$sqlPass,$tableName,$encoding){
			$this->host = $host;
			$this->sqlName = $sqlName;
			$this->sqlPass = $sqlPass;
			$this->tableName = $tableName;
			$this->encoding = $encoding;
			$this->connect();
		}
		function connect(){
			$link = @ mysql_connect($this->host,$this->sqlName,$this->sqlPass) or die ("数据库连接错误！");
			mysql_select_db($this->tableName,$link) or die ($this->sqlName."中不存在".$this->tableName);
			mysql_query("set names ".$this->encoding);
		}
	}
	$db = new MySql("localhost","root","","test","utf8");
?>