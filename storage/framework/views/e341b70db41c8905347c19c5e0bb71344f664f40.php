

<?php $__env->startSection('contents'); ?>
    <div class="container">
        <div class="ticket">
            <?php if(session('message')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>
            <?php $__currentLoopData = $tpl_bus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h1>Choose number of seats</h1>
                <?php if($bus->seat_avail > 0): ?>
                    <form class="form mt-3" action="<?php echo e(url('add_cart', $bus->id)); ?>" method="Post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-2">
                            <input type="number" name="booked" class="form-control" min="1"
                                placeholder="No. of Seat(s)">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Confirm Booking
                        </button>
                    </form>
                <?php else: ?>
                    <h1> Please choose a different bus</h1>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\studies\paragon\Y3\SEMESTER 1\CS 262 - Advanced Web\web-project\resources\views/ticket_detail.blade.php ENDPATH**/ ?>