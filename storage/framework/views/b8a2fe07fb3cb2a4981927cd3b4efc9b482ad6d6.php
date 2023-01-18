<?php $__env->startSection('title'); ?>Step Form Wizard
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Enregistrer Des notes</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Note</li>
		<li class="breadcrumb-item">Creer</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
			<div class="card">
			  <div class="card-header">
				<h5>Veuillez entrez les notes</h5><span>Valider tous les champs</span>
			  </div>
			  <div class="card-body">
				<div class="stepwizard">
				  <div class="stepwizard-row setup-panel">
					<div class="stepwizard-step"><a class="btn btn-primary" href="#step-1"> <?php echo e($ma1->id); ?> </a>
						<p> <?php echo e($ma1->nom); ?> </p>
					  </div>
					  <div class="stepwizard-step"><a class="btn btn-light" href="#step-2"><?php echo e($ma2->id); ?></a>
						<p><?php echo e($ma2->nom); ?></p>
					  </div>
					  <div class="stepwizard-step"><a class="btn btn-light" href="#step-3"><?php echo e($ma3->id); ?></a>
						<p><?php echo e($ma3->nom); ?></p>
					  </div>
					  <div class="stepwizard-step"><a class="btn btn-light" href="#step-4">4</a>
						<p>Examen</p>
					  </div>
					
				  </div>
				</div>

					<form  class="form-control" id="regForm" action="<?php echo e(route('Note.store')); ?>" method="POST">
						<?php echo csrf_field(); ?>
				  <div class="setup-content" id="step-1" >
					<div class="col-xs-12">
					  <div class="col-md-12">

					<div class="form-group">
						<label class="col-form-label">Classe</label>
						<select class="js-example-basic-single col-sm-12 form-control" id="classe" name="classe_id" >
							<?php $__currentLoopData = $cl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value=" <?php echo e($item->id); ?> "> <?php echo e($item->nom); ?> </option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</select>
					</div>
					<div class="form-group">
						<label class="col-form-label">Etudiant</label>
						<select class="js-example-basic-single col-sm-12 form-control" id="etudiant" name="user_id" >
							<?php $__currentLoopData = $etu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value=" <?php echo e($item->id); ?> "> <?php echo e($item->name); ?> </option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
						<div class="form-group">
						  <label class="control-label">Note 1</label>
						  <input class="form-control" type="number" placeholder="Johan" name="note1" >
						</div>
						<div class="form-group">
						  <label class="control-label">Note 2</label>
						  <input class="form-control" type="number" placeholder="Deo" name="note2" >
						</div>
						<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div>
				  
				  <div class="setup-content" id="step-2">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Note 1</label>
							<input class="form-control" type="number" placeholder="Deo" name="note3" >
						  </div><div class="form-group">
							<label class="control-label">Note 2</label>
							<input class="form-control" type="number" placeholder="Deo" name="note4" >
						  </div>
						<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div>
				  <div class="setup-content" id="step-3">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Note 1</label>
							<input class="form-control" type="number" placeholder="Deo" name="note5" >
						  </div>
						  <div class="form-group">
							<label class="control-label">Note 2</label>
							<input class="form-control" type="number" placeholder="Deo" name="note6" >
						  </div>
						  <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div>
				  <div class="setup-content" id="step-4">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Examen</label>
							<input class="form-control" type="number" placeholder="Deo" name="examen" >
						  </div>
						  <button class="btn btn-secondary pull-right" type="submit">Finish!</button>
					  </div>
					</div>
				  </div>
				  


				</form>
			  </div>
			</div>
		  </div>
		</div>
	  </div>













	  
	








	  



	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/form-wizard/form-wizard-two.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
	<?php $__env->stopPush(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/angek/Downloads/vihoadmin-10/vihoadmin-10/viho_html_laravel/Viho-Laravel-8/theme/resources/views/Note/create.blade.php ENDPATH**/ ?>