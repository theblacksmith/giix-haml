<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
.wide.form
	:php
		$form = $this->beginWidget('GxActiveForm', array(
			'action' => Yii::app()->createUrl($this->route),
			'method' => 'get',
		));
		
	%ul.fields-list
	
<?php foreach($this->tableSchema->columns as $column): ?>
	<?php
		$field = $this->generateInputField($this->modelClass, $column);
		if (strpos($field, 'password') !== false)
			continue;
	?>
		%li.field
			= $form->label($model, '<?php echo $column->name; ?>')
			- <?php echo $this->generateSearchField($this->modelClass, $column); ?>
<?php endforeach; ?>

		%li.buttons
			= GxHtml::submitButton(Yii::t('app', 'Search'));

	- $this->endWidget()