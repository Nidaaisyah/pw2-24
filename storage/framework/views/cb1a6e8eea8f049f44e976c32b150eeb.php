

<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blank Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <h1 class="my-4">Daftar kelurahan</h1>
                    <a href="<?php echo e(route('kelurahans.create')); ?>" class="btn btn-primary">Tambah kelurahan</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama kelurahan</th>
                                <th>kecamatan</th>
                                <th>Aciton</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $kelurahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($kel->id); ?></td>
                                    <td><?php echo e($kel->nama); ?></td>
                                    <td><?php echo e($kel->kecamatan_id); ?></td>
                                    <td>
                                     <a href="<?php echo e(route('kelurahans.show', $kel->id)); ?>" class="btn btn-info btn-sm">Read</a>
                                     <a href="<?php echo e(route('kelurahans.edit', $kel->id)); ?>" class="btn btn-warning btn-sm">Update</a>
                                     <form action="<?php echo e(route('kelurahans.destroy', $kel->id)); ?>" method="POST" style="display: inline;">
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('DELETE'); ?>
                                     <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this pasien?')">Delete</button>
                                     </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pw2-ti03\praktikum09\resources\views/kelurahan/index.blade.php ENDPATH**/ ?>