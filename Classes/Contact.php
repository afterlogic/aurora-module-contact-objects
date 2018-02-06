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

class Contact extends \Aurora\System\EAV\Entity
{
	protected $aStaticMap = [
		'Storage'		=> ['string', '', true],
		'FullName'		=> ['string', '', true],
		'Address'		=> ['string', '', true],
		'Phone'			=> ['string', '', true],
		'Email'			=> ['string', '', true],
		'Facebook'		=> ['string', '', true],
		'LinkedIn'		=> ['string', '', true],
		'Instagram'		=> ['string', '', true],
		'CustomerUUID'	=> ['string', '', true],
		'CompanyUUID'	=> ['string', '', true]
	];

	public function toResponseArray()
	{
		$aResponse = parent::toResponseArray();
		$aResponse['ContactId'] = $this->EntityId;
		return $aResponse;
	}
}