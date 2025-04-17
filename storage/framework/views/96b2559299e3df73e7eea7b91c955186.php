<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo e(config('app.name', 'Goed Grond')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="bg-gray-100 font-sans antialiased">
    <div class="flex min-h-screen">
        
        <aside class="w-64 bg-white border-r p-4 flex flex-col justify-between">
    <div>
        <h1 class="text-[20px] font-bold mb-6">Back-end project</h1>
        <nav class="flex flex-col space-y-2">
            <a href="<?php echo e(route('dashboard')); ?>" class="text-[20px] text-gray-700 hover:text-indigo-600">Dashboard</a>
            <a href="<?php echo e(route('projects.index')); ?>" class="text-[20px] text-gray-700 hover:text-indigo-600">Projecten</a>
            <a href="<?php echo e(route('analyses.index')); ?>" class="text-[20px] text-gray-700 hover:text-indigo-600">Analyses</a>
        </nav>
    </div>

    <div class="mt-10 px-2 pb-4 text-xs text-gray-500 space-y-2">
        <a href="#" class="text-sm block hover:text-gray-700">Repository</a>
        <a href="#" class="text-sm block hover:text-gray-700">Documentation</a>
        <p class="text-[11px] text-gray-400">👤 Rinah Conrad</p>
    </div>
</aside>


        
        <main class="flex-1 p-6">
            <?php if(isset($header)): ?>
            <div class="mb-4 text-xl font-semibold text-gray-800">
                <?php echo e($header); ?>

            </div>
            <?php endif; ?>

            <?php echo e($slot); ?>

        </main>
    </div>
</body>

</html><?php /**PATH D:\School\Back-end project\goed-grond\resources\views/layouts/app.blade.php ENDPATH**/ ?>