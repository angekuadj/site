<?php $__env->startSection('title'); ?>Ecole
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Learning List</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Learning</li>
		<li class="breadcrumb-item active">Learning List</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="row learning-block">
	        <div class="col-xl-9 xl-60">
	            <div class="row">
                    <?php $__currentLoopData = $cour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    
	                <div class="col-xl-4 xl-50 col-sm-12 box-col-12">
	                    <div class="card">
	                        <div class="product-box learning-box">
	                            <div class="product-img">
	                                <img class="img-fluid top-radius-blog" src="<?php echo e(asset('assets/images/faq/3.jpg')); ?>" alt="" />
	                                <div class="product-hover">
	                                    <ul>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-link"></i></a>
	                                        </li>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-import"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="details-main">
	                                <a href="learning-detailed.html">
	                                    <div class="bottom-details">
	                                        <h6> <?php echo e($item->nom); ?> </h6>
	                                    </div>
	                                </a>
	                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                
	            </div>
	        </div>
	        
	    </div>
	</div>

	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/angek/Downloads/vihoadmin-10/vihoadmin-10/viho_html_laravel/Viho-Laravel-8/theme/resources/views/stac.blade.php ENDPATH**/ ?>