<?php 


class User extends Db_object {

	protected static $db_table = "users";
	protected static $db_table_fields = array('username', 'password', 'first_name', 'last_name');

	public $id;
	public $username;
	public $password; 
	public $first_name;
	public $last_name;





	public static function verify_user($username, $password) {
		global $database;


//cleaning the username and password
		$username = $database->escape_string($username);
		$password = $database->escape_string($password);

		$sql = "SELECT * FROM users WHERE ";
		$sql .= "username = '{$username}' ";
		$sql .= "AND password = '{$password}' ";
		$sql .= "LIMIT 1";

		$the_result_array = self::find_this_query($sql);
		//array_shift - to get the first result
		return !empty($the_result_array) ? array_shift($the_result_array) : false;

	}

	



	protected function properties() {
		//return get_object_vars($this);

		$properties = array();

		foreach (self::$db_table_fields as $db_fields) {

			if(property_exists($this, $db_fields)) {
				$properties[$db_fields] = $this->$db_fields;
			}
		}
		return $properties;
	} //end of properties


	protected function clean_properties() {

		global $database;

		$clean_properties = array();


		foreach ($this->properties() as $key => $value) {
			$clean_properties[$key] = $database->escape_string($value);
		}

		return $clean_properties;
	}



	public function create() {
		global $database;
//$properties is an array
		$properties = $this->clean_properties();

		$sql = "INSERT INTO " . self::$db_table . " ( " . implode(",", array_keys($properties)) . " )";
		$sql .= "VALUES ('" . implode("', '", array_values($properties)) . "')";

if($database->query($sql)) {

	$this->id = $database->the_insert_id();

	return true;

} else {

	return false;

}
} //end of create method

public function save() {

return isset($this->id) ? $this->update() : $this->create();
 }

public function update() {

	global $database;

	$properties = $this->clean_properties();
	$properties_pairs = array();

	foreach ($properties as $key => $value) {
	 	$properties_pairs[] = "{$key}='{$value}'";
	 } 


	$sql = "UPDATE " . self::$db_table . " SET ";
	$sql .= implode(", ", $properties_pairs);
	$sql .= " WHERE id=" . $database->escape_string($this->id);

	$database->query($sql);

	return (mysqli_affected_rows($database->connection) == 1) ? true : false;


} //end of update method

public function delete() {
	global $database;

	$sql = "DELETE FROM users ";
	$sql .= "WHERE id = " . $database->escape_string($this->id);
	$sql .= " LIMIT 1";

	$database->query($sql);

	return (mysqli_affected_rows($database->connection) == 1) ? true : false;
}


} //end of User class
