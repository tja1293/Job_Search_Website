<?php 
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class UserModel extends Model {
	
	protected $db;
	public function __construct(ConnectionInterface &$db) {
		$this->db =& $db;
	}

	function add($data) {
		return $this->db
                        ->table('user_info')
                        ->insert($data);
	}
	
}