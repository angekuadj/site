<?php $__env->startSection('title'); ?>Checkout
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Checkout</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Ecommerce</li>
		<li class="breadcrumb-item active">Checkout</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="card">
	        <div class="card-header pb-0">
	            <h5>Billing Details</h5>
	        </div>
			<form  action="<?php echo e(route('paiement.store')); ?>" method="POST">
	        <div class="card-body">
	            <div class="row">
	                <div class="col-xl-6 col-sm-12">
						
                            <?php echo csrf_field(); ?>
	                        <div class="row">
	                            <div class="mb-3 col-sm-12">
	                                <label for="inputEmail4">Moyen de Paiement</label>
									<label>Moyen de Paiement</label>
										<select class="form-control" name="typepaiement_id"  >
											<?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													
												<option value=" <?php echo e($item->id); ?> "> <?php echo e($item->nom); ?> </option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
	                        </div>
	                        <div class="row">
	                            <div class="mb-3 col-sm-12">
	                                <label for="inputEmail5">Phone</label>
	                                <input class="form-control" id="inputEmail5" type="number" name="numero" />
	                            </div>
	                        </div>
							<div class="row">
	                            <div class="mb-3 col-sm-12">
									<input class="form-control"  type="text" value="<?php echo e($produit->id); ?>" name="produit_id" hidden  />
	                            </div>
	                        </div>
							
	                        
	                    
	                </div>
	                <div class="col-xl-6 col-sm-12">
	                    <div class="checkout-details">
	                        <div class="order-box">
	                            <div class="title-box">
	                                <div class="checkbox-title">
	                                    <h4 class="mb-0">Product</h4>
	                                    <span>Total</span>
	                                </div>
	                            </div>
	                            <ul class="qty">
	                                <li> <?php echo e($produit->nom); ?> <span> <?php echo e($produit->prix); ?> Frcfa</span></li>
	                            </ul>
	                            <ul class="sub-total">
	                                <li>Subtotal <span class="count"><?php echo e($produit->prix); ?> Frcfa</span></li>
	                                
	                            </ul>
	                            <ul class="sub-total total">
	                                <li>Total <span class="count"><?php echo e($produit->prix); ?> Frcfa</span></li>
	                            </ul>
	                            
	                            <button class="btn btn-primary" type="submit">Payer</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
		</form>
	    </div>
	</div>
	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/angek/Downloads/vihoadmin-10/vihoadmin-10/viho_html_laravel/Viho-Laravel-8/theme/resources/views/Evenement/acheter.blade.php ENDPATH**/ ?>