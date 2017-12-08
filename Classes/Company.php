<?php
/**
 * @copyright Copyright (c) 2017, Afterlogic Corp.
 * @license AGPL-3.0 or AfterLogic Software License
 *
 * This code is licensed under AGPLv3 license or AfterLogic Software License
 * if commercial version of the product was purchased.
 * For full statements of the licenses see LICENSE-AFTERLOGIC and LICENSE-AGPL3 files.
 */

namespace Aurora\Modules\ContactObjects\Classes;

/**
 *
 * @package ContactObjects
 * @subpackage Classes
 */

class Company extends \Aurora\System\EAV\Entity
{
	protected $aStaticMap = [
		'Title'			=> ['string', ''],
		'Description'	=> ['string', ''],
		'Address'		=> ['string', ''],
		'Phone'		=> ['string', ''],
		'Website'		=> ['string', ''],
		'CustomerUUID'	=> ['string', '']
	];

	public function toResponseArray()
	{
		$aResponse = parent::toResponseArray();
		$aResponse['CompanyId'] = $this->EntityId;
		return $aResponse;
	}
}