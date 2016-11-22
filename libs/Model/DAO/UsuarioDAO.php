<?php
/** @package Biblioteca::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("UsuarioMap.php");

/**
 * UsuarioDAO provides object-oriented access to the usuario table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Biblioteca::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class UsuarioDAO extends Phreezable
{
	/** @var string */
	public $Idcpf;

	/** @var string */
	public $Logradouro;

	/** @var string */
	public $Bairro;

	/** @var string */
	public $Estado;

	/** @var string */
	public $Telefonefixo;

	/** @var int */
	public $Celular;

	/** @var string */
	public $Cep;

	/** @var string */
	public $Tipousuario;

	/** @var string */
	public $Senha;

	/** @var string */
	public $Email;

	/** @var string */
	public $Pais;

	/** @var string */
	public $Cidade;

	/** @var int */
	public $Numero;

	/** @var string */
	public $Nomeusuario;


	/**
	 * Returns a dataset of Movimentacao objects with matching Idcpf
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetIdcpfMovimentacaos($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "fkDevolucaoUsuario", $criteria);
	}

	/**
	 * Returns a dataset of Reserva objects with matching Dcpf
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetDcpfReservas($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "fkReservaUsuario", $criteria);
	}


}
?>