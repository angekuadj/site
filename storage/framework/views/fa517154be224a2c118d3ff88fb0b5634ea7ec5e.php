<?php $__env->startSection('title'); ?>
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Validation Forms</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Classe</li>
		<li class="breadcrumb-item">Creer</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
      
		<div class="row">
			<div class="col-sm-12">

                <div class="card">
					
					<div class="card-body">
                        <form  action="<?php echo e(url('/user/' .$users->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <?php echo method_field("PATCH"); ?>
							<div class="col-md-12 position-relative">
								<label class="form-label" for="validationTooltip01">Nom</label>
								<input class="form-control" id="validationTooltip01" name="nom" value="<?php echo e($users->name); ?>" type="text"  required="" />
								<div class="valid-tooltip">Looks good!</div>
							</div>
                            <div class="col-md-12 position-relative">
								<label class="form-label" for="validationTooltip01">Email</label>
								<input class="form-control" id="validationTooltip01" name="email" value="<?php echo e($users->email); ?>" type="text"  required="" />
								<div class="valid-tooltip">Looks good!</div>
							</div>
                            <div class="col-md-12 position-relative">
								<label class="form-label" for="validationTooltip01">Password</label>
								<input class="form-control" id="validationTooltip01" name="password" value="<?php echo e($users->password); ?>" type="password"  required="" />
								<div class="valid-tooltip">Looks good!</div>
							</div>
                            
							
							<div class="col-12">
								<button class="btn btn-primary" type="submit">Modifier</button>
							</div>
						</form>
					</div>
				</div>
            </div>
        </div>
    </div>
    

    














	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/angek/Downloads/vihoadmin-10/vihoadmin-10/viho_html_laravel/Viho-Laravel-8/theme/resources/views/users/edit.blade.php ENDPATH**/ ?>