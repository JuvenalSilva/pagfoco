<?php
class Sistema{
	public function add(){
		extract($_REQUEST);

		try {

			$sql = "INSERT INTO sistema (";
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

			$sql = "UPDATE sistema SET";
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

			$sql = "DELETE FROM sistema ";
			$sql.= "WHERE";
			$sql.= "	id = " . $id;

			DBSql::getExecute($sql);

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function getColecaoSistema(){

		$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 nome ";
		$sql.= "FROM ";
		$sql.= "	sistema ";
		$sql.= "WHERE 1=1 ";
		$sql.= "ORDER BY id";

		return DBSql::getCollection($sql);

	}

	public function getSistema($id){


			$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 nome ";
			$sql.= " FROM ";
			$sql.= "	sistema";
			$sql.= " WHERE ";
			$sql.= "	id = " . $id;
		return DBSql::getArray($sql);

	}

}
?>