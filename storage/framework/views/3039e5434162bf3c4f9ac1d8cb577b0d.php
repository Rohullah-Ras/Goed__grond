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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nieuw project toevoegen
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="max-w-3xl mx-auto py-10 px-6 bg-white shadow rounded-lg">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Nieuw Project</h1>

        <form action="<?php echo e(route('projects.store')); ?>" method="POST" class="space-y-6">
            <?php echo csrf_field(); ?>

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                <input type="text" name="name" id="name"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500"
                    required>
            </div>

            <div>
                <label for="location" class="block text-sm font-medium text-gray-700">Locatie</label>
                <input type="text" name="location" id="location"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Beschrijving</label>
                <textarea name="description" id="description" rows="4"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500"></textarea>
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition">
                    Opslaan
                </button>
            </div>
        </form>
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
<?php endif; ?>
<?php /**PATH D:\School\Back-end project\goed-grond\resources\views/projects/create.blade.php ENDPATH**/ ?>