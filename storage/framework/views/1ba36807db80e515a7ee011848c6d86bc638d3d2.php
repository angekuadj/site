<?php $__env->startSection('title'); ?>Lists
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>voir Les notes</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Notes</li>
    <?php echo $__env->renderComponent(); ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
	<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                </div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                        </div>

                        
                    <table class="table table-bordered">
                        <thead>
                            <th width="125">Etudiant</th>
                            <?php $__currentLoopData = $ma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th width="125"> <?php echo e($item->nom); ?> </th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<th width="125"> Total </th>
							<th width="125"> Moyenne </th>
                            
                        </thead>
                        <tbody>
                           
                            
                            
                                
                            <?php $__currentLoopData = $etudiant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="d-flex justify-content-end mb-4">
                                <a class="btn btn-primary" href="<?php echo e(URL::to('#')); ?>">Export to PDF</a>
                            </div>
                                <tr>
                                    
                                    <td>
                                        	<?php echo e($item->user->name); ?>

                                    </td>
                                    <th>
											<?php echo e($item->note1); ?>

									
											<?php echo e($item->note2); ?> 
                                    </th>
                                    <th>
											<?php echo e($item->note3); ?>

										
											<?php echo e($item->note4); ?>

                                    </th>
                                    <th>
											<?php echo e($item->note5); ?>

											<?php echo e($item->note6); ?>

                                    </th>
									<th>
										k
									</th>
									<th>
										mo
									</th>
                                    
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                
                               
                               
                                
                                

                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end mb-4">
                        <a class="btn btn-primary" href="<?php echo e(URL::to('#')); ?>">Export to PDF</a>
                    </div>




                    

                    


                </div>
            </div>
        </div>
    </div>
</div>
	
	
	
	
<?php endif; ?>








<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'User')): ?>
	<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                </div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                        </div>

                        
                    <table class="table table-bordered">
                        <thead>
                            <th width="125">Etudiant</th>
                            <?php $__currentLoopData = $ma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th width="125"> <?php echo e($item->nom); ?> </th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<th width="125"> Total </th>
							<th width="125"> Moyenne </th>
                            
                        </thead>
                        <tbody>
                           
                            
                            
                            <div class="d-flex justify-content-end mb-4">
                                <a class="btn btn-primary" href="<?php echo e(URL::to('#')); ?>">Export to PDF</a>
                            </div>
                            <?php $__currentLoopData = $et; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            
                                <tr>
                                    
                                    <td>
                                        	<?php echo e(Auth::user()->name); ?>

                                    </td>
                                    <th>
											<?php echo e($item->note1); ?>

									
											<?php echo e($item->note2); ?> 
                                    </th>
                                    <th>
											<?php echo e($item->note3); ?>

										
											<?php echo e($item->note4); ?>

                                    </th>
                                    <th>
                                        <td><?php echo e($item->note5); ?></td>
                                        <td><?php echo e($item->note6); ?></td>
                                    </th>
                                   
									<th>
										k
									</th>
									<th>
										mo
									</th>
                                    
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                
                               
                               
                                
                                

                        </tbody>
                    </table>





                    

                    


                </div>
            </div>
        </div>
    </div>
</div>
	
	
	
	
<?php endif; ?>
	
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
	<?php $__env->stopPush(); ?>
	
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/angek/Downloads/vihoadmin-10/vihoadmin-10/viho_html_laravel/Viho-Laravel-8/theme/resources/views/Note/index.blade.php ENDPATH**/ ?>