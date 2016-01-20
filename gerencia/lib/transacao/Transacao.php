<?php
class Transacao{
	public function add(){
		extract($_REQUEST);

		try {

			$sql = "INSERT INTO transacao (";
			$sql.= " pessoa_id,";
			$sql.= " sistema_id,";
			$sql.= " status_id,";
			$sql.= " produto,";
			$sql.= " valor,";
			$sql.= " data";
			$sql.= ")";
			$sql.= "VALUES (";
			$sql.= "'" . $pessoa_id . "',";
			$sql.= "'" . $sistema_id . "',";
			$sql.= "'" . $status_id . "',";
			$sql.= "'" . $produto . "',";
			$sql.= "'" . $valor . "',";
			$sql.= "'" . $data . "'";
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

			$sql = "UPDATE transacao SET";
			$sql.= " pessoa_id = '" . $pessoa_id . "',";
			$sql.= " sistema_id = '" . $sistema_id . "',";
			$sql.= " status_id = '" . $status_id . "',";
			$sql.= " produto = '" . $produto . "',";
			$sql.= " valor = '" . $valor . "',";
			$sql.= " data = '" . $data . "'";
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

			$sql = "DELETE FROM transacao ";
			$sql.= "WHERE";
			$sql.= "	id = " . $id;

			DBSql::getExecute($sql);

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function getColecaoTransacao($pessoa_id = null, $sistema_id = null, $status_id = null){

		$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 pessoa_id, ";
		$sql.= "	 sistema_id, ";
		$sql.= "	 status_id, ";
		$sql.= "	 produto, ";
		$sql.= "	 valor, ";
		$sql.= "	 data ";
		$sql.= "FROM ";
		$sql.= "	transacao ";
		$sql.= "WHERE 1=1 ";
		 if (!empty($pessoa_id))
			 $sql.= "	 AND pessoa_id = '" . $pessoa_id . "'";
		 if (!empty($sistema_id))
			 $sql.= "	 AND sistema_id = '" . $sistema_id . "'";
		 if (!empty($status_id))
			 $sql.= "	 AND status_id = '" . $status_id . "'";
		$sql.= "ORDER BY id";

		return DBSql::getCollection($sql);

	}

	public function getTransacao($id){


			$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 pessoa_id, ";
		$sql.= "	 sistema_id, ";
		$sql.= "	 status_id, ";
		$sql.= "	 produto, ";
		$sql.= "	 valor, ";
		$sql.= "	 data ";
			$sql.= " FROM ";
			$sql.= "	transacao";
			$sql.= " WHERE ";
			$sql.= "	id = " . $id;
		return DBSql::getArray($sql);

	}

}
?>