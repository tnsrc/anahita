<? defined('ANAHITA') or die('Restricted access');?>

<? if (is_array($object)) : ?>
<data name="title">
	<?= sprintf(@text('COM-TODOS-STORY-TODOS-OPENED'), @name($subject)) ?>
</data>
<data name="body">
<ol>
	<? foreach ($object as $obj) : ?>
	<?
        $priority = '';
        switch ($obj->priority) {
            case ComTodosDomainEntityTodo::PRIORITY_HIGHEST: $priority = @text('COM-TODOS-TODO-PRIORITY-HIGHEST');break;
            case ComTodosDomainEntityTodo::PRIORITY_HIGH: $priority = @text('COM-TODOS-TODO-PRIORITY-HIGH');break;
            case ComTodosDomainEntityTodo::PRIORITY_NORMAL: $priority = @text('COM-TODOS-TODO-PRIORITY-NORMAL');break;
            case ComTodosDomainEntityTodo::PRIORITY_LOW:$priority = @text('COM-TODOS-TODO-PRIORITY-LOW');break;
            default : $priority = @text('COM-TODOS-TODO-PRIORITY-LOWEST');break;
        }
    ?>
	<li><?= @link($obj) ?> <span class="an-meta"> - (<?= @text('COM-TODOS-TODO-PRIORITY') ?>: <?=$priority?>)</span></li>
	<? endforeach; ?>
</ol>
</data>
<? else : ?>
<data name="title">
	<?= sprintf(@text('COM-TODOS-STORY-TODO-OPENED'), @name($subject), @route($object->getURL()))?>
</data>
<data name="body">
	<?
        $priority = '';
        switch ($object->priority) {
            case ComTodosDomainEntityTodo::PRIORITY_HIGHEST: $priority = @text('COM-TODOS-TODO-PRIORITY-HIGHEST');break;
            case ComTodosDomainEntityTodo::PRIORITY_HIGH: $priority = @text('COM-TODOS-TODO-PRIORITY-HIGH');break;
            case ComTodosDomainEntityTodo::PRIORITY_NORMAL: $priority = @text('COM-TODOS-TODO-PRIORITY-NORMAL');break;
            case ComTodosDomainEntityTodo::PRIORITY_LOW:$priority = @text('COM-TODOS-TODO-PRIORITY-LOW');break;
            default : $priority = @text('COM-TODOS-TODO-PRIORITY-LOWEST');break;
        }
    ?>
	<div>
		<?= @link($object) ?> <span class="an-meta"> - (<?= @text('COM-TODOS-TODO-PRIORITY') ?>: <?=$priority?>)</span>
	</div>
</data>
<? endif; ?>
