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
 * @copyright Copyright (c) 2019, Afterlogic Corp.
 *
 * @package ContactObjects
 * @subpackage Classes
 */
class Company extends \Aurora\System\EAV\Entity
{
	protected $aStaticMap = [
		'Title'			=> ['string', '', true],
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