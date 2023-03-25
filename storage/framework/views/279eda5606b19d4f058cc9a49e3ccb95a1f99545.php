<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class="homepage">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </nav>

        <div class="main-contents">
            <?php echo $__env->yieldContent('contents'); ?>
        </div>

        <div class="footer">
            <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="./resources/js/script.js"></script>
</body>
<?php /**PATH E:\studies\paragon\Y3\SEMESTER 1\CS 262 - Advanced Web\web-project\resources\views/layout/master.blade.php ENDPATH**/ ?>