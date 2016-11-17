<?php
/**
 * This file was generated.
 */

namespace Adil\MyTestBundle\Entity\Definition;

/**
 * Definition class for the Account connector object
 *
 */
trait AccountDefinition
{
	/**
	* @var string
	*/	
	private $params;    

	/**
	* Get params
	*
	* @return string
	*/
	public function getParams()
	{
		return $this->params;
	}

	/**
	* Set params
	*
	* @param  string $params
	* @return Account
	*/
	public function setParams($params)
	{
		$this->params = $params;
		
		return $this;
	}
}