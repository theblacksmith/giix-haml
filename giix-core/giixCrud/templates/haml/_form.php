<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
 $ajax = ($this->enable_ajax_validation) ? 'true' : 'false';
?>
.form
:php
		$form = $this->beginWidget('GxActiveForm', array(
			'id' => '<?php echo $this->class2id($this->modelClass); ?>-form',
			'enableAjaxValidation' => <?php echo $ajax; ?>,
		));

	%p.note
		= Yii::t('app', 'Fields with')
		%span.required *
		= Yii::t('app', 'are required') . '.'
	
	= $form->errorSummary($model)
	
	%ul.fields-list
	
	<?php foreach ($this->tableSchema->columns as $column): ?>
		<?php if (!$column->autoIncrement): ?>
		%li.row
			= <?php echo $this->generateActiveLabel($this->modelClass, $column); ?>
			- <?php echo $this->generateActiveField($this->modelClass, $column); ?>
			= $form->error($model,'<?php echo $column->name ?>');
		<?php endif; ?>
	<?php endforeach; ?>
	
	<?php foreach ($this->getRelations($this->modelClass) as $relation): ?>
		<?php if ($relation[1] == GxActiveRecord::HAS_MANY || $relation[1] == GxActiveRecord::MANY_MANY): ?>
			%label= echo GxHtml::encode($model->getRelationLabel('<?php echo $relation[0]; ?>'));
			- <?php echo $this->generateActiveRelationField($this->modelClass, $relation); ?>
		<?php endif; ?>
	<?php endforeach; ?>
	
	:php
		GxHtml::submitButton(Yii::t('app', 'Save'));
		$this->endWidget();