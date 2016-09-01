<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Admintask
 * @author     Tasolglobal <>
 * @copyright  2016 Tasolglobal
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Task controller class.
 *
 * @since  1.6
 */
class AdmintaskControllerTask extends JControllerForm
{
	/**
	 * Constructor
	 *
	 * @throws Exception
	 */
	public function __construct()
	{
		$this->view_list = 'tasks';
		parent::__construct();
	}
}
