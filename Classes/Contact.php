<?php
/**
 * This code is licensed under AGPLv3 license or AfterLogic Software License
 * if commercial version of the product was purchased.
 * For full statements of the licenses see LICENSE-AFTERLOGIC and LICENSE-AGPL3 files.
 */

namespace Aurora\Modules\ContactObjects\Classes;

/**
 * @license https://www.gnu.org/licenses/agpl-3.0.html AGPL-3.0
 * @license https://afterlogic.com/products/common-licensing AfterLogic Software License
 * @copyright Copyright (c) 2018, Afterlogic Corp.
 *
 * @package ContactObjects
 * @subpackage Classes
 */
class Contact extends \Aurora\System\EAV\Entity
{
	protected $aStaticMap = [
		'Storage'		=> ['string', ''],
		'FullName'		=> ['string', '', true],
		'Address'		=> ['string', ''],
		'Phone'			=> ['string', ''],
		'Email'			=> ['string', ''],
		'Facebook'		=> ['string', ''],
		'LinkedIn'		=> ['string', ''],
		'Instagram'		=> ['string', ''],
		'CustomerUUID'	=> ['string', ''],
		'CompanyUUID'	=> ['string', '']
	];

	public function toResponseArray()
	{
		$aResponse = parent::toResponseArray();
		$aResponse['ContactId'] = $this->EntityId;
		return $aResponse;
	}
}