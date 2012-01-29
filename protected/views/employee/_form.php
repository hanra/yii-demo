<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'departmentId'); ?>
		<?php echo $form->textField($model,'departmentId'); ?>
		<?php echo $form->error($model,'departmentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ext'); ?>
		<?php echo $form->textField($model,'ext'); ?>
		<?php echo $form->error($model,'ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hireDate'); ?>
		<?php echo $form->textField($model,'hireDate'); ?>
		<?php echo $form->error($model,'hireDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'leaveDate'); ?>
		<?php echo $form->textField($model,'leaveDate'); ?>
		<?php echo $form->error($model,'leaveDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->