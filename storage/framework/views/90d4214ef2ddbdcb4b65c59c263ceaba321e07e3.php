<?php $__env->startSection('title'); ?>General <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/date-picker.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/whether-icon.css')); ?>">
<?php $__env->stopPush(); ?>
    <?php $__env->startSection('content'); ?>
        <?php $__env->startComponent('components.breadcrumb'); ?>
            <?php $__env->slot('breadcrumb_title'); ?>
                <h3>Emploi Du Temps</h3>
            <?php $__env->endSlot(); ?>
            <li class="breadcrumb-item">Cours</li>
            <li class="breadcrumb-item">Emploi Du Temps</li>
        <?php echo $__env->renderComponent(); ?>

<div class="content">
        
   
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                </div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                        </div>

                        <?php echo e($classe->nom); ?>

                    <table class="table table-bordered">
                        <thead>
                            <th width="125">Time</th>
                            <?php $__currentLoopData = $day; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th width="125"> <?php echo e($item->nom); ?> </th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </thead>
                        <tbody>
                           
                            
                            
                                
                            <?php $__currentLoopData = $cours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="d-flex justify-content-end mb-4">
                                <a class="btn btn-primary" href="<?php echo e(URL::to('#')); ?>">Export to PDF</a>
                            </div>
                                <tr>
                                    
                                    <td>
                                        	<?php echo e($item->Dd); ?>-<?php echo e($item->Df); ?>

                                    </td>
                                    <td>
                                        <?php if($item->day_id == 1): ?>
                                            <?php echo e($item->nom); ?>

                                           <?php else: ?> 

                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($item->day_id == 2): ?>
                                        <?php echo e($item->nom); ?>

                                       <?php else: ?> 

                                    <?php endif; ?>

                                    </td>
                                    <td>

                                        <?php if($item->day_id == 3): ?>
                                        <?php echo e($item->nom); ?>

                                       <?php else: ?> 

                                    <?php endif; ?>
                                    </td>
                                    <td>

                                        <?php if($item->day_id == 4): ?>
                                        <?php echo e($item->nom); ?>

                                       <?php else: ?> 

                                    <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($item->day_id == 5): ?>
                                        <?php echo e($item->nom); ?>

                                       <?php else: ?> 

                                    <?php endif; ?>

                                    </td>
                                    <td>
                                        <?php if($item->day_id == 6): ?>
                                        <?php echo e($item->nom); ?>

                                       <?php else: ?> 

                                    <?php endif; ?>

                                    </td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                
                               
                               
                                
                                

                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end mb-4">
                        <a class="btn btn-primary" href="<?php echo e(URL::to('#')); ?>">Export to PDF</a>
                    </div>

                  <?php echo e($classe2->nom); ?>




                    

                    <table class="table table-bordered">
                        <thead>
                            <th width="125">Time</th>
                            <?php $__currentLoopData = $day; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th width="125"> <?php echo e($item->nom); ?> </th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </thead>
                        <tbody>
                           
                            
                            
                                
                            <?php $__currentLoopData = $cours2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    
                                    <td>
                                        	<?php echo e($item->Dd); ?>-<?php echo e($item->Df); ?>

                                    </td>
                                    <td>
                                        <?php if($item->day_id == 1): ?>
                                            <?php echo e($item->nom); ?>

                                           <?php else: ?> 

                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($item->day_id == 2): ?>
                                        <?php echo e($item->nom); ?>

                                       <?php else: ?> 

                                    <?php endif; ?>

                                    </td>
                                    <td>

                                        <?php if($item->day_id == 3): ?>
                                        <?php echo e($item->nom); ?>

                                       <?php else: ?> 

                                    <?php endif; ?>
                                    </td>
                                    <td>

                                        <?php if($item->day_id == 4): ?>
                                        <?php echo e($item->nom); ?>

                                       <?php else: ?> 

                                    <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($item->day_id == 5): ?>
                                        <?php echo e($item->nom); ?>

                                       <?php else: ?> 

                                    <?php endif; ?>

                                    </td>
                                    <td>
                                        <?php if($item->day_id == 6): ?>
                                        <?php echo e($item->nom); ?>

                                       <?php else: ?> 

                                    <?php endif; ?>

                                    </td>
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
<script src="<?php echo e(asset('assets/js/prism/prism.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/clipboard/clipboard.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom-card/custom-card.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/general-widget.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/height-equal.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/angek/Downloads/vihoadmin-10/vihoadmin-10/viho_html_laravel/Viho-Laravel-8/theme/resources/views/Calendrier.blade.php ENDPATH**/ ?>