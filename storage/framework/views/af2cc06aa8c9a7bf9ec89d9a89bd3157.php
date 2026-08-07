
<?php $__env->startSection('title', 'Tambah Mapel – Admin'); ?>

<?php $__env->startSection('content'); ?>
<section class="hero-mini" style="padding:3rem 0 2.5rem;">
    <div class="container position-relative" style="z-index:2;">
        <h1 class="fs-3 mb-0">Tambah Mata Pelajaran</h1>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="p-4 rounded-4 bg-white" style="box-shadow:var(--card-shadow);">
                    <h5 class="fw-800 mb-4" style="font-weight:800;color:var(--primary);">
                        <i class="bi bi-journal-plus me-2"></i>Form Tambah Mata Pelajaran
                    </h5>
                    <form method="POST" action="<?php echo e(route('mapel.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('admin.mapel._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <div class="d-flex gap-3 mt-4">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="bi bi-save me-2"></i>Simpan
                            </button>
                            <a href="<?php echo e(route('mapel.index')); ?>" class="btn btn-outline-secondary px-4" style="border-radius:10px;">
                                <i class="bi bi-arrow-left me-2"></i>Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ProfilRPL\resources\views/admin/mapel/create.blade.php ENDPATH**/ ?>