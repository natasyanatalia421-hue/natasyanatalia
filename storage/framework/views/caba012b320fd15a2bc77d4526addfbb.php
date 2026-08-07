
<?php $__env->startSection('title', 'Data Guru – RPL SMKN 1'); ?>

<?php $__env->startSection('content'); ?>


<section class="hero-mini">
    <div class="container position-relative" style="z-index:2;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                <li class="breadcrumb-item active">Data Guru</li>
            </ol>
        </nav>
        <h1 class="fs-2 mb-1">Data Guru</h1>
        <p class="text-white-50 mb-0">Tenaga pendidik profesional Jurusan RPL</p>
    </div>
</section>

<section class="py-5">
    <div class="container">

        
        <?php if(session('success')): ?>
            <div class="alert alert-success d-flex align-items-center gap-2 mb-4 fade-up">
                <i class="bi bi-check-circle-fill fs-5"></i>
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        
        <div class="row align-items-center mb-4 fade-up">
            <div class="col-md-5 mb-3 mb-md-0">
                <h4 class="fw-800 mb-0" style="font-weight:800;color:var(--primary);">
                    <i class="bi bi-people-fill me-2"></i>Daftar Tenaga Pengajar
                    <span class="badge ms-2" style="background:var(--secondary);color:var(--primary);font-size:0.75rem;">
                        <?php echo e($guru->total()); ?> Guru
                    </span>
                </h4>
            </div>
            <div class="col-md-5 mb-3 mb-md-0">
                <form method="GET" action="<?php echo e(route('guru.index')); ?>">
                    <div class="search-box">
                        <i class="bi bi-search"></i>
                        <input type="text" name="search" value="<?php echo e($search ?? ''); ?>"
                               class="form-control"
                               placeholder="Cari nama guru...">
                    </div>
                </form>
            </div>
            <div class="col-md-2 text-md-end">
                <a href="<?php echo e(route('guru.create')); ?>" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-lg me-1"></i>Tambah
                </a>
            </div>
        </div>

        
        <?php if($guru->isEmpty()): ?>
        <div class="text-center py-5 fade-up">
            <i class="bi bi-person-x-fill fs-1 mb-3 d-block" style="color:#bbdefb;"></i>
            <h5 class="text-muted">Guru tidak ditemukan</h5>
            <?php if($search): ?>
                <p class="text-muted">Tidak ada hasil untuk "<strong><?php echo e($search); ?></strong>"</p>
                <a href="<?php echo e(route('guru.index')); ?>" class="btn btn-primary btn-sm">Reset Pencarian</a>
            <?php endif; ?>
        </div>
        <?php else: ?>

        
        <div class="row g-4">
            <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-3 col-lg-4 col-md-6 fade-up">
                <div class="card-guru">
                    
                    <?php if($g->foto): ?>
                        <img src="<?php echo e(asset('storage/' . $g->foto)); ?>" alt="<?php echo e($g->nama_guru); ?>" class="card-img-top">
                    <?php else: ?>
                        <div class="guru-avatar">
                            <i class="bi bi-person-fill"></i>
                        </div>
                    <?php endif; ?>

                    <div class="p-3">
                        <span class="badge-jabatan mb-2 d-inline-block"><?php echo e($g->jabatan ?? 'Guru'); ?></span>
                        <h6 class="fw-700 mb-1 mt-1" style="font-weight:700;"><?php echo e($g->nama_guru); ?></h6>

                        <?php if($g->nip): ?>
                        <p class="text-muted mb-2" style="font-size:0.78rem;">
                            <i class="bi bi-card-text me-1"></i>NIP: <?php echo e($g->nip); ?>

                        </p>
                        <?php endif; ?>

                        <hr class="my-2" style="border-color:#e0e8f5;">

                        <?php if($g->mata_pelajaran): ?>
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="bi bi-book-fill" style="color:var(--accent);font-size:0.82rem;"></i>
                            <span style="font-size:0.84rem;"><?php echo e($g->mata_pelajaran); ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if($g->email): ?>
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="bi bi-envelope-fill" style="color:var(--accent);font-size:0.82rem;"></i>
                            <span style="font-size:0.82rem; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;"><?php echo e($g->email); ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if($g->no_hp): ?>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-telephone-fill" style="color:var(--accent);font-size:0.82rem;"></i>
                            <span style="font-size:0.82rem;"><?php echo e($g->no_hp); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>

                    
                    <div class="px-3 pb-3 d-flex gap-2">
                        <a href="<?php echo e(route('guru.edit', $g->id)); ?>"
                           class="btn btn-sm flex-fill"
                           style="background:#e3f2fd;color:var(--primary);border-radius:8px;font-size:0.82rem;font-weight:600;">
                            <i class="bi bi-pencil me-1"></i>Edit
                        </a>
                        <form method="POST" action="<?php echo e(route('guru.destroy', $g->id)); ?>"
                              onsubmit="return confirm('Hapus data guru ini?')" class="flex-fill">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm w-100"
                                    style="background:#ffebee;color:#c62828;border-radius:8px;font-size:0.82rem;font-weight:600;">
                                <i class="bi bi-trash me-1"></i>Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        
        <?php if($guru->hasPages()): ?>
        <div class="d-flex justify-content-center mt-5 fade-up">
            <?php echo e($guru->links('pagination::bootstrap-5')); ?>

        </div>
        <?php endif; ?>

        <?php endif; ?>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ProfilRPL\resources\views/guru.blade.php ENDPATH**/ ?>