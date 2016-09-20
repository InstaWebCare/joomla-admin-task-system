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
 * task Table class
 *
 * @since  1.0
 */
class AdmintaskTabletask extends JTable
{
	/**
	 * Constructor
	 *
	 * @param   JDatabase  &$db  A database connector object
	 */
	public function __construct(&$db)
	{
		parent::__construct('#__admintask_tasks', 'id', $db);
	}

}
