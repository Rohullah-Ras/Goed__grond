<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        Dashboard
     <?php $__env->endSlot(); ?>
    <div class="grid grid-cols-2 gap-6">
        <div>
            <h2 class="font-semibold text-lg mb-2">Een lijst van de laatste 10 projecten.</h2>
            <table class="w-full bg-white rounded shadow">
                <thead class="bg-gray-200 text-left">
                    <tr>
                        <th class="p-2">Titel</th>
                        <th class="p-2">Opdrachtgever</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-t">
                        <td class="p-2"><?php echo e($project->title); ?></td>
                        <td class="p-2"><?php echo e($project->client); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <div>
            <h2 class="font-semibold text-lg mb-2">Een lijst van de laatste 20 analyses.</h2>
            <table class="w-full bg-white rounded shadow">
                <thead class="bg-gray-200 text-left">
                    <tr>
                        <th class="p-2">Datum</th>
                        <th class="p-2">Analyse</th>
                        <th class="p-2">Project</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $analyses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $analyse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-t">
                        <td class="p-2"><?php echo e($analyse->date); ?></td>
                        <td class="p-2"><?php echo e($analyse->method); ?></td>
                        <td class="p-2"><?php echo e($analyse->project->title); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\School\Back-end project\goed-grond\resources\views/dashboard.blade.php ENDPATH**/ ?>