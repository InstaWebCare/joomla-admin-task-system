<?php
/**
 * @package    Com_Admintask
 * @author     __COMPONENT_CONTACT__
 * @copyright  __COMPONENT_COPYRIGHT__
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

/**
 * Task controller class.
 *
 * @since  1.0
 */
class AdmintaskControllerTask extends JControllerForm
{
	/**
	 *  Constructor
	 *
	 * @throws Exception
	*/

	public function __construct()
	{
			$this->view_list = 'tasks';
			parent::__construct();
	}
}
