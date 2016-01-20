<?php
class PessoaGatwayConfiguracao{
	public function add(){
		extract($_REQUEST);

		try {

			$sql = "INSERT INTO pessoa_gatway_configuracao (";
			$sql.= " pessoa_id,";
			$sql.= " gatway_id,";
			$sql.= " credendial_1,";
			$sql.= " credencial_2";
			$sql.= ")";
			$sql.= "VALUES (";
			$sql.= "'" . $pessoa_id . "',";
			$sql.= "'" . $gatway_id . "',";
			$sql.= "'" . $credendial_1 . "',";
			$sql.= "'" . $credencial_2 . "'";
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

			$sql = "UPDATE pessoa_gatway_configuracao SET";
			$sql.= " pessoa_id = '" . $pessoa_id . "',";
			$sql.= " gatway_id = '" . $gatway_id . "',";
			$sql.= " credendial_1 = '" . $credendial_1 . "',";
			$sql.= " credencial_2 = '" . $credencial_2 . "'";
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

			$sql = "DELETE FROM pessoa_gatway_configuracao ";
			$sql.= "WHERE";
			$sql.= "	id = " . $id;

			DBSql::getExecute($sql);

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function getColecaoPessoaGatwayConfiguracao($pessoa_id = null, $gatway_id = null){

		$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 pessoa_id, ";
		$sql.= "	 gatway_id, ";
		$sql.= "	 credendial_1, ";
		$sql.= "	 credencial_2 ";
		$sql.= "FROM ";
		$sql.= "	pessoa_gatway_configuracao ";
		$sql.= "WHERE 1=1 ";
		 if (!empty($pessoa_id))
			 $sql.= "	 AND pessoa_id = '" . $pessoa_id . "'";
		 if (!empty($gatway_id))
			 $sql.= "	 AND gatway_id = '" . $gatway_id . "'";
		$sql.= "ORDER BY id";

		return DBSql::getCollection($sql);

	}

	public function getPessoaGatwayConfiguracao($id){


			$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 pessoa_id, ";
		$sql.= "	 gatway_id, ";
		$sql.= "	 credendial_1, ";
		$sql.= "	 credencial_2 ";
			$sql.= " FROM ";
			$sql.= "	pessoa_gatway_configuracao";
			$sql.= " WHERE ";
			$sql.= "	id = " . $id;
		return DBSql::getArray($sql);

	}

}
?>