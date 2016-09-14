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
 * Admintask helper.
 *
 * @since  1.0
 */
class AdmintaskHelpersAdmintask
{
	/**
	 * Configure the Linkbar.
	 *
	 * @param   string  $vName  string
	 *
	 * @return void
	 */

	public static function addSubmenu($vName = '')
	{
		JHtmlSidebar::addEntry(
		JText::_('COM_ADMINTASK_TITLE_TASKS'),
			'index.php?option=com_admintask&view=tasks',
			$vName == 'tasks'
			);
	}

	/**
	 * Gets a list of the actions that can be performed.
	 *
	 * @return    JObject
	 *
	 * @since    1.6
	 */
	public static function getActions()
	{
		$user   = JFactory::getUser();
		$result = new JObject;
		$assetName = 'com_admintask';
		$actions = array(
		'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete');

		foreach ($actions as $action)
		{
				$result->set($action, $user->authorise($action, $assetName));
		}

		return $result;
	}
}
