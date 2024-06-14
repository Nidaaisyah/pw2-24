<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       $nilai = 90;
    ?>
    <?php if($nilai >= 90): ?>
       <h1>Nilai Anda A</h1>
    <?php endif; ?>
    <h1> Nilai saya <?php echo e($nilai); ?> </h1>
</body>
</html><?php /**PATH C:\xampp\htdocs\pw2-ti03\praktikum09\resources\views/nilai.blade.php ENDPATH**/ ?>