<?php
/**
 * @package    Com_Admintask
 * @author     __COMPONENT_CONTACT__
 * @copyright  __COMPONENT_COPYRIGHT__
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
JHtml::_('behavior.keepalive');

?>
<script type="text/javascript">
	js = jQuery.noConflict();
	js(document).ready(function () {

	});

	Joomla.submitbutton = function (task) {
		if (task == 'task.cancel') {
			Joomla.submitform(task, document.getElementById('task-form'));
		}
		else {

			if (task != 'task.cancel' && document.formvalidator.isValid(document.id('task-form'))) {

				Joomla.submitform(task, document.getElementById('task-form'));
			}
			else {
				alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED')); ?>');
			}
		}
	}
</script>

<form
	action="<?php echo JRoute::_('index.php?option=com_admintask&layout=edit&id=' . (int) $this->item->id); ?>"
	method="post" enctype="multipart/form-data" name="adminForm" id="task-form" class="form-validate">

	<div class="form-horizontal">
		<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'general')); ?>

		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'general', JText::_('COM_ADMINTASK_TITLE_TASK', true)); ?>
		<div class="row-fluid">
			<div class="span10 form-horizontal">
			<fieldset class="adminform">
				<input type="hidden" name="jform[id]" value="<?php echo $this->item->id; ?>" />
				<?php echo $this->form->renderField('category'); ?>
			</fieldset>
			</div>
		</div>
		<?php echo JHtml::_('bootstrap.endTab'); ?>

		<?php echo JHtml::_('bootstrap.endTabSet'); ?>

		<input type="hidden" name="task" value=""/>
		<?php echo JHtml::_('form.token'); ?>

	</div>
</form>
