<?php

namespace Demo\ContentManagement\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "Contacts".                   *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License as published by the Free   *
 * Software Foundation, either version 3 of the License, or (at your      *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        *
 * You should have received a copy of the GNU General Public License      *
 * along with the script.                                                 *
 * If not, see http://www.gnu.org/licenses/gpl.html                       *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use Doctrine\ORM\Mapping as ORM;
use TYPO3\FLOW3\Annotations as FLOW3;
use TYPO3\Admin\Annotations as CM;

/**
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 * @CM\Active
 * @CM\Group("Testcases")
 */
class Inline {
	
	/**
	 * @var \Demo\ContentManagement\Domain\Model\Address
	 * @ORM\ManyToOne(inversedBy="comments", cascade={"all"})
	 * @CM\Inline(variant="Foo.ContentManagement:InlineStacked")
	 * @CM\Label("A single Address in stacked Layout")
	 */
	protected $addressStacked;
	
	/**
	 * @var \Demo\ContentManagement\Domain\Model\Address
	 * @ORM\ManyToOne(inversedBy="comments", cascade={"all"})
	 * @CM\Inline
	 */
	protected $addressTabular;
	
	/**
	 * @var \Doctrine\Common\Collections\Collection<\Demo\ContentManagement\Domain\Model\Address>
	 * @ORM\ManyToMany(inversedBy="widgets_manytomany", cascade={"all"})
	 * @CM\Inline(variant="Foo.ContentManagement:InlineStacked")
	 */
	protected $addressesStacked;
	
	/**
	 * @var \Doctrine\Common\Collections\Collection<\Demo\ContentManagement\Domain\Model\Address>
	 * @ORM\ManyToMany(inversedBy="widgets_manytomany", cascade={"all"})
	 * @CM\Inline
	 */
	protected $addressesTabular;

	/**
	 * @param  $addressStacked
	 */
	public function setAddressStacked($addressStacked) {
		$this->addressStacked = $addressStacked;
	}
	
	/**
	 * @return 
	 */
	public function getAddressStacked() {
		return $this->addressStacked;
	}
	
	/**
	 * @param  $addressTabular
	 */
	public function setAddressTabular($addressTabular) {
		$this->addressTabular = $addressTabular;
	}
	
	/**
	 * @return 
	 */
	public function getAddressTabular() {
		return $this->addressTabular;
	}

	/**
	 * @param  $addressesStacked
	 */
	public function setAddressesStacked($addressesStacked) {
		$this->addressesStacked = $addressesStacked;
	}
	
	/**
	 * @return 
	 */
	public function getAddressesStacked() {
		return $this->addressesStacked;
	}

	/**
	 * @param  $addressesTabular
	 */
	public function setAddressesTabular($addressesTabular) {
		$this->addressesTabular = $addressesTabular;
	}
	
	/**
	 * @return 
	 */
	public function getAddressesTabular() {
		return $this->addressesTabular;
	}
}

?>