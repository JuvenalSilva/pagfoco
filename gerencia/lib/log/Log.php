<?php
class Log{
	public function add(){
		extract($_REQUEST);

		try {

			$sql = "INSERT INTO log (";
			$sql.= " pessoa_id,";
			$sql.= " gatway_id,";
			$sql.= " sistema_id,";
			$sql.= " transacao_id,";
			$sql.= " configuracao_usada,";
			$sql.= " data,";
			$sql.= " produto";
			$sql.= ")";
			$sql.= "VALUES (";
			$sql.= "'" . $pessoa_id . "',";
			$sql.= "'" . $gatway_id . "',";
			$sql.= "'" . $sistema_id . "',";
			$sql.= "'" . $transacao_id . "',";
			$sql.= "'" . $configuracao_usada . "',";
			$sql.= "'" . $data . "',";
			$sql.= "'" . $produto . "'";
			$sql.= ")";


			DBSql::getExecute($sql);

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function edit(){
		extract($_REQUEST);

		try {

			$sql = "UPDATE log SET";
			$sql.= " pessoa_id = '" . $pessoa_id . "',";
			$sql.= " gatway_id = '" . $gatway_id . "',";
			$sql.= " sistema_id = '" . $sistema_id . "',";
			$sql.= " transacao_id = '" . $transacao_id . "',";
			$sql.= " configuracao_usada = '" . $configuracao_usada . "',";
			$sql.= " data = '" . $data . "',";
			$sql.= " produto = '" . $produto . "'";
			$sql.="WHERE";
			$sql.="	id = " . $id;

			DBSql::getExecute($sql);

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function delete(){
		extract($_REQUEST);

		try {

			$sql = "DELETE FROM log ";
			$sql.= "WHERE";
			$sql.= "	id = " . $id;

			DBSql::getExecute($sql);

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function getColecaoLog($pessoa_id = null, $gatway_id = null, $sistema_id = null, $transacao_id = null){

		$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 pessoa_id, ";
		$sql.= "	 gatway_id, ";
		$sql.= "	 sistema_id, ";
		$sql.= "	 transacao_id, ";
		$sql.= "	 configuracao_usada, ";
		$sql.= "	 data, ";
		$sql.= "	 produto ";
		$sql.= "FROM ";
		$sql.= "	log ";
		$sql.= "WHERE 1=1 ";
		 if (!empty($pessoa_id))
			 $sql.= "	 AND pessoa_id = '" . $pessoa_id . "'";
		 if (!empty($gatway_id))
			 $sql.= "	 AND gatway_id = '" . $gatway_id . "'";
		 if (!empty($sistema_id))
			 $sql.= "	 AND sistema_id = '" . $sistema_id . "'";
		 if (!empty($transacao_id))
			 $sql.= "	 AND transacao_id = '" . $transacao_id . "'";
		$sql.= "ORDER BY id";

		return DBSql::getCollection($sql);

	}

	public function getLog($id){


			$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 pessoa_id, ";
		$sql.= "	 gatway_id, ";
		$sql.= "	 sistema_id, ";
		$sql.= "	 transacao_id, ";
		$sql.= "	 configuracao_usada, ";
		$sql.= "	 data, ";
		$sql.= "	 produto ";
			$sql.= " FROM ";
			$sql.= "	log";
			$sql.= " WHERE ";
			$sql.= "	id = " . $id;
		return DBSql::getArray($sql);

	}

}
?>