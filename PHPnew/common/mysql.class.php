<?php
class mysql{
	private $db_host;//数据库主机名
	private $db_user;//数据库用户名
	private $db_pwd;//数据库用户密码
	private $db_database;//数据库名
	private $conn;//数据库连接标识
	private $result;//执行query命令的结果资源标识
	private $sql;//sql执行语句
	private $row;//返回的条目数
	private $coding;//数据库编码，CBK，UTF8，gb2312
	private $bulletin = true;//是否开启错误记录
	private $show_error = true;//测试阶段，显示所有错误，具有安全隐患，默认关闭
	private $is_error = false;//发现错误是否立即终止，默认true,建议不启用，因为当有问题时用户什么也看不到是很苦恼的

	// 构造函数
	public function __construct($db_host,$db_user,$db_pwd,$db_database,$conn,$coding){
		$this->db_host = $db_host;
		$this->db_user = $db_user;
		$this->db_pwd = $db_pwd;
		$this->db_database = $db_database;
		$this->conn = $conn;
		$this->coding = $coding;
		$this->connect();
	}
	public function show_error($slq1,$sql2){
		echo $slq1.$sql2;
	}
	public function connect(){
		if($this->conn == "pconn"){
			// 永久链接
			$this->conn = mysql_pconnect($this->db_host,$this->db_user,$this->db_pwd);
		}else{
			// 及时链接
			$this->conn = mysqli_connect($this->db_host,$this->db_user,$this->db_pwd,$this->db_database);
		}
		// if(!mysqli_select_db($this->db_database,$this->conn)){
		// 	if($this->show_error){
		// 		$this->show_error("数据库不可用：",$this->db_database);
		// 	}
		// }
		mysqli_query($this->conn,"set names $this->coding");
	}
	// 数据库执行语句，可执行查询添加修改等任何sql语句
	public function query($sql){
		if($sql == ""){
			$this->show_error("SQL语句错误：","SQL查询语句为空");
		}
		$this->sql = $sql;
		$result = mysqli_query($this->conn,$this->sql);
		if(!$result){
			// 调试中使用，sql语句出错时会自动打印出来
			if($this->show_error){
				$this->show_error("SQL语句错误：",$this->sql);
			}
		}else{
			$this->result = $result;
		}
		return $this->result;
	}
	// 创建添加新的数据库
	public function create_database($database_name){
		$sqlDatabase = "create database ".$database_name;
		$this->query($sqlDatabase);
	}
	// 查询服务器所有数据库
	// 将系统数据库与用户数据库分开，风直观的显示？
	public function show_databases(){
		$this->query("show databases");
		echo "现有数据库：".$amount = $this->db_num_rows($rs);
		echo "<br/>";
		$i = 1;
		while ($row = $this->fetch_array($rs)) {
			echo "$i $row[Database]";
			echo "<br/>";
			$i++;
		}
	}
	// 以数组形式返回主机中所有数据库名
	public function databases(){
		$rsPtr = mysql_list_dbs($this->conn);
		$i = 0;
		$cnt = mysql_num_rows($rsPtr);
		while ($i <= $cnt) {
			$rs[] = mysql_db_name($rsPtr, $i);
			$i++;
		}
		return $rs;
	}
	// 查询数据库下所有的表
	public function show_tables($database_name){
		$this->query("show tables");
		echo "现有数据库：".$amount = $this->db_num_rows($rs);
		echo "<br/>";
		$i = 1;
		while ($row = $this->fetch_array($rs)) {
			$columnName = "Tables_in_".$database_name;
			echo "$i $row[$columnName]";
			echo "<br/>";
			$i++;
		}
	}
	// 取得结果数据
	public function mysql_result_li(){
		return mysql_result($str);
	}
	// 取得记录集，获取数组-索引和关联，使用$row['content']
	public function fetch_array(){
		return mysqli_fetch_array($this->result);
	}
	// 获取关联数组，使用$row['字段名']
	public function fetch_assoc(){
		return mysqli_fetch_assoc($this->result);
	}
	// 获取数字索引组，使用$row[0],$row[1],$row[2]
	public function fetch_row(){
		return mysqli_fetch_row($this->result);
	}
	// 获取对象数组，使用$row->content
	public function fetch_object(){
		return mysqli_fetch_object($this->result);
	}
	// 简化查询select
	public function findall($table){
		$this->query("select * from $table");
	}
	// 简化查询select
	public function select($table,$columnName="*",$condition="",$debug=""){
		if($debug){
			echo "select $columnName from $table $condition";
		}else{
			$this->query("select $columnName from $table $condition");
		}
	}
	// 简化删除del
	public function delete($table,$condition,$url=""){
		if($this->query("delete from $table where $condition")){
			if(!empty($url))
				$this->Get_admin_msg($url,"删除成功！");
		}
	}
	// 简化插入
	public function insert($table,$columnName,$value,$url=""){
		if($this->query("insert into $table ($columnName) values ($value)")){
			if(!empty($url))
				$this->Get_admin_msg($url,"添加成功！");
		}
	}
}
?>