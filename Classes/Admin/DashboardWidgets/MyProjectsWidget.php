<?php

namespace AdminDemo\Admin\DashboardWidgets;

/* *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use Doctrine\ORM\Mapping as ORM;
use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Example Widget
 *
 * @version $Id: AbstractValidator.php 3837 2010-02-22 15:17:24Z robert $
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class MyProjectsWidget extends \Admin\Core\DashboardWidgets\AbstractDashboardWidget {
	/**
	 * @var \Admin\Core\Helper
	 * @FLOW3\Inject
	 */
	protected $helper;
	
	public function initializeWidget() {
		$query = $this->objectManager->get("\AdminDemo\Domain\Repository\ProjectRepository")->createQuery();
		
		$query->setLimit("10");
		$query->matching($query->contains("users", $this->helper->getUser()));
		
		$projects = $query->execute();
		$this->view->assign("projects", $projects);
	}
}
?>