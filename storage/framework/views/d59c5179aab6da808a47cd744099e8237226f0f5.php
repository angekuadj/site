<?php $__env->startSection('title'); ?>Product
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/range-slider.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Product</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">ECommerce</li>
		<li class="breadcrumb-item active">Product</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid product-wrapper">
	    <div class="product-grid">
	       
	        <div class="product-wrapper-grid">
	            <div class="row">
                    <?php $__currentLoopData = $produit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                   
	                <div class="col-xl-3 col-sm-6 xl-4">
	                    <div class="card">
	                        <div class="product-box">
	                            <div class="product-img">
	                                <img class="img-fluid" src="<?php echo e(asset('assets/images/ecommerce/01.jpg')); ?>" alt="" />
	                                <div class="product-hover">
	                                    <ul>
	                                        <li>
	                                            <a href="<?php echo e(url('/produit/' . $item->id . '/edit')); ?>"><i class="icon-shopping-cart"></i></a>
	                                        </li>
	                                        <li>
	                                            <a data-bs-toggle="modal" data-bs-target="#exampleModalCenter16"><i class="icon-eye"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="modal fade" id="exampleModalCenter16">
	                                <div class="modal-dialog modal-lg modal-dialog-centered">
	                                    <div class="modal-content">
	                                        <div class="modal-header">
	                                            <div class="product-box row">
	                                                <div class="product-img col-lg-6"><img class="img-fluid" src="<?php echo e(asset('assets/images/ecommerce/01.jpg')); ?>" alt="" /></div>
	                                                <div class="product-details col-lg-6 text-start">
	                                                    <a href="product-page"> <h4> <?php echo e($item->nom); ?> </h4></a>
	                                                    <div class="product-price">
	                                                        <?php echo e($item->prix); ?>Fcfa
	                                                        
	                                                    </div>
	                                                    <div class="product-view">
	                                                        <h6 class="f-w-600">Product Details</h6>
	                                                        <p class="mb-0"><?php echo e($item->description); ?></p>
	                                                    </div>
	                                                    <div class="product-size">
	                                                        <ul>
	                                                            <li>
	                                                                <button class="btn btn-outline-light" type="button">M</button>
	                                                            </li>
	                                                            <li>
	                                                                <button class="btn btn-outline-light" type="button">L</button>
	                                                            </li>
	                                                            <li>
	                                                                <button class="btn btn-outline-light" type="button">Xl</button>
	                                                            </li>
	                                                        </ul>
	                                                    </div>
	                                                    <div class="product-qnty">
	                                                        <h6 class="f-w-600">Quantity</h6>
	                                                        <fieldset>
	                                                            <div class="input-group">
	                                                                <input class="touchspin text-center" type="text" value="1" />
	                                                            </div>
	                                                        </fieldset>
	                                                        <div class="addcart-btn"><a class="btn btn-primary me-3" href="acheter">Passer aux paiement </a></div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="product-details">
	                                <a href="product-page"> <h4><?php echo e($item->nom); ?> </h4></a>
	                                <p> <?php echo e($item->description); ?></p>
	                                <div class="product-price">
                                        <?php echo e($item->prix); ?>Fcfa
	                                    
	                                </div>
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
	<script src="<?php echo e(asset('assets/js/range-slider/ion.rangeSlider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/range-slider/rangeslider-script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/touchspin.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/input-groups.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/product-tab.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/angek/Downloads/vihoadmin-10/vihoadmin-10/viho_html_laravel/Viho-Laravel-8/theme/resources/views/Evenement/produit.blade.php ENDPATH**/ ?>