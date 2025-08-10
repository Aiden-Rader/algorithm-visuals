<?php
require_once 'db_class.php';

// RenderModel class, used to interact with the database for render data from the dbo.renders table
class RenderModel
{
	private $db;

	/**
	 * Construct a new RenderModel object
	 *
	 * @param db $db The database connection
	 */
	public function __construct($db)
	{
		$this->db = $db;
	}

	/**
	 * Fetch all renders from the database
	 *
	 * @return array|false List of renders or false on failure
	 */
	public function getAllRenders(): mixed
	{
		$sql = "SELECT RenderID, Title, [Description], MediaPath FROM Renders";
		return $this->db->query($sql);
	}

	/**
	 * Fetch a single render by its ID
	 *
	 * @param int $renderID The ID of the render
	 * @return array|false Render details or false if not found
	 */
	public function getRenderById($renderID): array|bool
	{
		$sql = "SELECT RenderID, Title, [Description], MediaPath FROM Renders WHERE RenderID = ?";
		$stmt = sqlsrv_prepare($this->db->get_dbconn(), $sql, [$renderID]);
		if (sqlsrv_execute($stmt)) {
			return sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
		}
		return false;
	}
}
