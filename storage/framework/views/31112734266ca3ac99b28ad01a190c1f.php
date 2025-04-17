


<h1>Projecten</h1>
<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($project->name); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Projecten</h1>
        <a href="<?php echo e(route('projects.create')); ?>" class="btn btn-primary">Nieuw Project</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Locatie</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($project->name); ?></td>
                        <td><?php echo e($project->location); ?></td>
                        <td>
                            <a href="<?php echo e(route('projects.show', $project->id)); ?>" class="btn btn-info">Bekijken</a>
                            <a href="<?php echo e(route('projects.edit', $project->id)); ?>" class="btn btn-warning">Bewerken</a>
                            <form action="<?php echo e(route('projects.destroy', $project->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\School\Back-end project\goed-grond\resources\views/projects/index.blade.php ENDPATH**/ ?>