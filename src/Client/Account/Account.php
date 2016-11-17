<?php
/**
 * This file was generated.
 */

namespace Adil\MyTestBundle\Client\Account;

use Adil\MyTestBundle\Entity\Account as ConnectorObject;

class Account
{	

	public function toJson($params = [])
	{		
		$object = new ConnectorObject();
		$object->setParams($params);
		return json_encode($object);
	}	   	


}	