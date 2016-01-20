<?php
class Pessoa{
	public function add(){
		extract($_REQUEST);

		try {

			$sql = "INSERT INTO pessoa (";
			$sql.= " login,";
			$sql.= " senha,";
			$sql.= " nome";
			$sql.= ")";
			$sql.= "VALUES (";
			$sql.= "'" . $login . "',";
			$sql.= "'" . $senha . "',";
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

			$sql = "UPDATE pessoa SET";
			$sql.= " login = '" . $login . "',";
			$sql.= " senha = '" . $senha . "',";
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

			$sql = "DELETE FROM pessoa ";
			$sql.= "WHERE";
			$sql.= "	id = " . $id;

			DBSql::getExecute($sql);

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function getColecaoPessoa($login = null, $senha = null){

		$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 login, ";
		$sql.= "	 senha, ";
		$sql.= "	 nome ";
		$sql.= "FROM ";
		$sql.= "	pessoa ";
		$sql.= "WHERE 1=1 ";
		 if (!empty($login))
			 $sql.= "	 AND login = '" . $login . "'";
		 if (!empty($senha))
			 $sql.= "	 AND senha = '" . $senha . "'";
		$sql.= "ORDER BY id";

		return DBSql::getCollection($sql);

	}

	public function getPessoa($id){


			$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 login, ";
		$sql.= "	 senha, ";
		$sql.= "	 nome ";
			$sql.= " FROM ";
			$sql.= "	pessoa";
			$sql.= " WHERE ";
			$sql.= "	id = " . $id;
		return DBSql::getArray($sql);

	}

}
?>