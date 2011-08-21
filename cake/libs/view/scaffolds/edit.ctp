<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.scaffolds
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="<?php echo $pluralVar;?> form">
<?php
	echo $this->Form->create();
	echo $this->Form->inputs($scaffoldFields, array('created', 'modified', 'updated'));
	echo $this->Form->end(__('Enviar', true));
?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
<?php if ($this->action != 'add'):?>
		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value($modelClass.'.'.$primaryKey)), null, __('Esta seguro que desea eliminar?', true).' #' . $this->Form->value($modelClass.'.'.$primaryKey)); ?></li>
<?php endif;?>
		<li><?php echo $this->Html->link(__('Listar', true).' '.$pluralHumanName, array('action' => 'index'));?></li>
<?php
		$done = array();
		foreach ($associations as $_type => $_data) {
			foreach ($_data as $_alias => $_details) {
				if ($_details['controller'] != $this->name && !in_array($_details['controller'], $done)) {
					echo "\t\t<li>" . $this->Html->link(sprintf(__('Listar %s', true), Inflector::humanize($_details['controller'])), array('controller' => $_details['controller'], 'action' =>'index')) . "</li>\n";
					echo "\t\t<li>" . $this->Html->link(sprintf(__('Nuevo %s', true), Inflector::humanize(Inflector::underscore($_alias))), array('controller' => $_details['controller'], 'action' =>'add')) . "</li>\n";
					$done[] = $_details['controller'];
				}
			}
		}
?>
	</ul>
</div>
