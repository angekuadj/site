<?php $__env->startSection('title'); ?>Form Wizard 1
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Creer un Etudiant</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Etudiant</li>
		<li class="breadcrumb-item">Creer</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Veillez Creer un Etudiant</h5>
						<span>Remplissez tous les champs</span>
					</div>
					<div class="card-body">
						<form  class="form-wizard" id="regForm" action="<?php echo e(route('Etudiant.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
							<div class="tab">
								
								<div class="form-group">
									<div class="mb-2">
										<label class="col-form-label">User</label>
										<select class="form-control" name="user_id" >
											<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													
												<option value=" <?php echo e($item->id); ?> "> <?php echo e($item->name); ?> </option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
									</div>

								<div class="form-group">
									<label for="contact">Date de naissance</label>
									<input class="form-control datetimepicker-input digits" id="contact" name="DN" type="date" placeholder="123456789" />
								</div>
							</div>
							<div class="tab">

								<div class="form-group">
								<div class="mb-2">
									<label class="col-form-label">Classe</label>
									<select class="form-control" name="classe_id" >
										<?php $__currentLoopData = $cla; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												
											<option value=" <?php echo e($item->id); ?> "> <?php echo e($item->nom); ?> </option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
								</div>

								<div class="form-group">
									<div class="mb-2">
										<label class="col-form-label">Filiere</label>
										<select class="form-control" name="filiere_id" >
											<?php $__currentLoopData = $fi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												
											<option value=" <?php echo e($item->id); ?> "> <?php echo e($item->nom); ?> </option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
									</div>

								<div class="form-group">
									<div class="mb-2">
										<label class="col-form-label">Sexe</label>
										<select class="form-control" name="sexe" >
											<option value="Homme">Homme</option>
											<option value="Femme">Femme</option>
										</select>
									</div>
									</div>
							</div>
									<div class="tab">
								<div class="form-group">
									<label for="exampleInputPassword1">Contact</label>
									<input class="form-control" id="exampleInputcPassword1" type="number" name="contact"  />
								</div>
							
								<div class="form-group">
									<label for="exampleFormControlInput1">Contact parent</label>
									<input class="form-control digits" type="number" name="contactP" />
								</div>
								<div class="form-group">
									<label class="control-label">Matricule</label>
									<input class="form-control digits" name="matricule" type="text" />
								</div>
							</div>
							
							<div>
								<div class="text-end btn-mb">
									<button class="btn btn-secondary" id="prevBtn" type="button" onclick="nextPrev(-1)">Previous</button>
									<button class="btn btn-primary" id="nextBtn" type="button" onclick="nextPrev(1)">Next</button>
								</div>
							</div>
							<!-- Circles which indicates the steps of the form:-->
							<div class="text-center"><span class="step"></span><span class="step"></span><span class="step"></span></div>
							<!-- Circles which indicates the steps of the form:-->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/form-wizard/form-wizard.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/angek/Downloads/vihoadmin-10/vihoadmin-10/viho_html_laravel/Viho-Laravel-8/theme/resources/views/Etudiant/create.blade.php ENDPATH**/ ?>