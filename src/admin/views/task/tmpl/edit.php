<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Admintask
 * @author     Tasolglobal <testing@tasolglobal.com>
 * @copyright  2016 Tasolglobal
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
JHtml::_('behavior.keepalive');

// Import CSS
$document = JFactory::getDocument();
$document->addStyleSheet(JUri::root() . 'media/com_admintask/css/form.css');
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
				<?php echo $this->form->renderField('title'); ?>
				<?php echo $this->form->renderField('description'); ?>
				<?php echo $this->form->renderField('state'); ?>
				<?php echo $this->form->renderField('assigned_to'); ?>
				<?php echo $this->form->renderField('assignee'); ?>
				<input type="hidden" name="jform[ordering]" value="<?php echo $this->item->ordering; ?>" />
				<?php echo $this->form->renderField('category');

				if (empty($this->item->created_by))
				{
				?>
					<input type="hidden" name="jform[created_by]" value="<?php echo JFactory::getUser()->id; ?>" />

				<?php}
				else{ ?>
					<input type="hidden" name="jform[created_by]" value="<?php echo $this->item->created_by; ?>" />

				<?php}
				echo $this->form->renderField('due_date');
				?>
				<input type="hidden" name="jform[priority]" value="<?php echo $this->item->priority; ?>" />
				<?php echo $this->form->renderField('comments_thread');

				if ($this->state->params->get('save_history', 1)) :
				?>
					<div class="control-group">
						<div class="control-label"><?php echo $this->form->getLabel('version_note'); ?></div>
						<div class="controls"><?php echo $this->form->getInput('version_note'); ?></div>
					</div>
				<?php
				endif;
				?>
				</fieldset>
			</div>
		</div>
		<?php echo JHtml::_('bootstrap.endTab'); ?>

		<?php echo JHtml::_('bootstrap.endTabSet'); ?>

		<input type="hidden" name="task" value=""/>
		<?php echo JHtml::_('form.token'); ?>

	</div>
</form>
