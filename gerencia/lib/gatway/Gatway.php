<?php
class Gatway{
	public function add(){
		extract($_REQUEST);

		try {

			$sql = "INSERT INTO gatway (";
			$sql.= " nome";
			$sql.= ")";
			$sql.= "VALUES (";
			$sql.= "'" . $nome . "'";
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

			$sql = "UPDATE gatway SET";
			$sql.= " nome = '" . $nome . "'";
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

			$sql = "DELETE FROM gatway ";
			$sql.= "WHERE";
			$sql.= "	id = " . $id;

			DBSql::getExecute($sql);

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function getColecaoGatway($id = null){

		$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 nome ";
		$sql.= "FROM ";
		$sql.= "	gatway ";
		$sql.= "WHERE 1=1 ";
		 if (!empty($id))
			 $sql.= "	 AND id = '" . $id . "'";
		$sql.= "ORDER BY id";

		return DBSql::getCollection($sql);

	}

	public function getGatway($id){


			$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 nome ";
			$sql.= " FROM ";
			$sql.= "	gatway";
			$sql.= " WHERE ";
			$sql.= "	id = " . $id;
		return DBSql::getArray($sql);

	}

}
?>