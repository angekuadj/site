<?php $__env->startSection('title'); ?>
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Roles</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Role</li>
		<li class="breadcrumb-item">edit</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
      
		<div class="py-12 w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                    <div class="flex p-2">
                        <a href="<?php echo e(route('role.index')); ?>"
                            class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Role Index</a>
                    </div>
                    <div class="flex flex-col p-2 bg-slate-100">
                        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                            <form method="POST" action="<?php echo e(route('role.update', $roles->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700"> Role name </label>
                                    <div class="mt-1">
                                        <input type="text" id="name" name="name" value="<?php echo e($roles->name); ?>"
                                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-red-400 text-sm"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="sm:col-span-6 pt-5">
                                    <button type="submit"
                                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-6 p-2 bg-slate-100">
                        <h2 class="text-2xl font-semibold">Role Permissions</h2>
                        <div class="flex space-x-2 mt-4 p-2">
                            <?php if($roles->permissions): ?>
                                <?php $__currentLoopData = $roles->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role_permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST"
                                        action="<?php echo e(route('role.permissions.revoke', [$roles->id, $role_permission->id])); ?>"
                                        onsubmit="return confirm('Are you sure?');">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit"><?php echo e($role_permission->name); ?></button>
                                    </form>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="max-w-xl mt-6">
                            <form method="POST" action="<?php echo e(route('role.permissions', $roles->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="sm:col-span-6">
                                    <label for="permission"
                                        class="block text-sm font-medium text-gray-700">Permission</label>
                                    <select id="permission" name="permission" autocomplete="permission-name"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($permission->name); ?>"><?php echo e($permission->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red-400 text-sm"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <button type="submit"
                                class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Assign</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>
    

    














	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/angek/Downloads/vihoadmin-10/vihoadmin-10/viho_html_laravel/Viho-Laravel-8/theme/resources/views/roles/edit.blade.php ENDPATH**/ ?>