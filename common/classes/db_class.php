<?php

require_once COMMON_PATH . 'config.php';

// Database class, mainly used to connect to the database, is the base class for all other classes that interact with the database
class db
{
	public $catalog = '';
	public $server = '';
	public $username = '';
	public $password = '';
	public $testactive = false;
	public $ReturnDatesAsStrings = false;
	public $dboptions = [
		'ANSI_NULLS' => 'ON',
		'ANSI_WARNINGS' => 'ON'
	];

	private $handle;

	/**
	 * Constructs a new db object, gives default values if not set
	 *
	 * @param string $server The server name or IP address
	 * @param string $username The username to connect with
	 * @param string $password The password to connect with
	 * @param string $catalog The database name
	 *
	 * @throws Exception if the connection fails
	 */
	public function __construct($server = 'localhost', $username = 'sa', $password = '', $catalog = '')
	{
		$this->server = $server;
		$this->username = $username;
		$this->password = $password;
		$this->catalog = $catalog;
	}

	/**
	 * Destructor for the db object
	 *
	 * Automatically disconnects the database when the db object is
	 * being destroyed.
	 */
	public function __destruct()
	{
		$this->disconnect();
	}

	/**
	 * Reconnects to the database
	 *
	 * Disconnects from the database and then reconnects.
	 */
	public function reconnect(): void
	{
		$this->disconnect();
		$this->connect();
	}

	/**
	 * Connects to the database
	 *
	 * Checks if the server is a development server and if so, appends '_TEST' to the catalog name.
	 * Then, connects to the database using the sqlsrv_connect() function.
	 *
	 * @throws Exception if the connection fails
	 */
	public function connect(): void
	{
		if (strtoupper($_SERVER['SERVER_NAME']) != strtoupper($this->server) && $this->testactive) {
			$this->catalog .= '_TEST';
		}

		$connectionInfo = [
			"Database" => $this->catalog,
			"UID" => $this->username,
			"PWD" => $this->password,
			"ReturnDatesAsStrings" => $this->ReturnDatesAsStrings
		];

		$this->handle = sqlsrv_connect($this->server, $connectionInfo);

		if (!$this->handle) {
			die(print_r(sqlsrv_errors(), true));
		}

		foreach ($this->dboptions as $option => $value) {
			sqlsrv_query($this->handle, "SET $option $value;");
		}
	}

	/**
	 * Disconnects the database connection
	 *
	 * This function is automatically called when the db object is being
	 * destroyed. It is recommended to call this function explicitly when the
	 * database is no longer needed.
	 */
	public function disconnect(): void
	{
		if ($this->handle) {
			sqlsrv_close($this->handle);
			$this->handle = null;
		}
	}

	/**
	 * Runs a SQL query
	 *
	 * @param string $sql The SQL query to be executed
	 *
	 * @return mixed The result of the query. If the query was an update, insert or delete, the number of rows affected is returned. If the query was a select, an array of associative arrays is returned, where each array represents a row in the result set.
	 */
	public function query($sql, $params = []): array
	{
		$result = sqlsrv_query($this->handle, $sql, $params);

		if ($result === false) {
			throw new Exception("SQL Query failed: " . print_r(sqlsrv_errors(), true));
		}

		$recordset = [];
		while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
			$recordset[] = $row;
		}

		return $recordset;
	}


	/**
	 * Returns the database connection resource
	 *
	 * @return resource The database connection resource
	 */
	public function get_dbconn()
	{
		return $this->handle;
	}

	/**
	 * Populates an associative array with values from a result set.
	 *
	 * @param array $result The result set containing data to load.
	 * @param array &$array The associative array to be populated with data.
	 * @param int $order Optional. If set to a non-zero value, it specifies the index to start populating from.
	 *                   Default is 0, which means the first element of the result set is used.
	 *
	 * @return array Returns an associative array filled with values from the result set.
	 *               Keys not present in the result set will have null values.
	 */
	public function load_array($result, &$array, $order = 0): array
	{
		$index = $order ? sizeof($result) : 0;
		$return = array_fill_keys(array_keys($array), null);

		foreach ($result[$index] as $key => $value) {
			if (array_key_exists($key, $return)) {
				$return[$key] = $value;
			}
		}

		return $return;
	}
}
