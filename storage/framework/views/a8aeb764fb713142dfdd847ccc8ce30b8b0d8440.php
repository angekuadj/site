<?php $__env->startSection('title'); ?>Lists
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>voir Role</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item"  >Role</li>
    <?php echo $__env->renderComponent(); ?>


		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						
						<?php if($message = Session::get('success')): ?>
			<div class="alert alert-success">
				<p><?php echo e($message); ?></p>
			</div>
		<?php endif; ?>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th scope="col-3">ID</th>
										<th scope="col-3">Nom</th>
                                        <th scope="col-3">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										
									
									<tr>
										<th scope="row"> <?php echo e($item->id); ?> </th>
										<td><?php echo e($item->name); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('role.edit', $item->id)); ?>" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-black rounded-md">Edit</a>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	
	
	
	
	
	
	



<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/angek/Downloads/vihoadmin-10/vihoadmin-10/viho_html_laravel/Viho-Laravel-8/theme/resources/views/roles/index.blade.php ENDPATH**/ ?>