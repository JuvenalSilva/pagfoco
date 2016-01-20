<?php
class Status{
	public function add(){
		extract($_REQUEST);

		try {

			$sql = "INSERT INTO status (";
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

			$sql = "UPDATE status SET";
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

			$sql = "DELETE FROM status ";
			$sql.= "WHERE";
			$sql.= "	id = " . $id;

			DBSql::getExecute($sql);

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function getColecaoStatus(){

		$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 nome ";
		$sql.= "FROM ";
		$sql.= "	status ";
		$sql.= "WHERE 1=1 ";
		$sql.= "ORDER BY id";

		return DBSql::getCollection($sql);

	}

	public function getStatus($id){


			$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 nome ";
			$sql.= " FROM ";
			$sql.= "	status";
			$sql.= " WHERE ";
			$sql.= "	id = " . $id;
		return DBSql::getArray($sql);

	}

}
?>