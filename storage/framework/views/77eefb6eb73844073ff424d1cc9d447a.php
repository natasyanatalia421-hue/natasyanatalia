
<?php $__env->startSection('title', 'Kontak – RPL SMKN 1'); ?>

<?php $__env->startSection('content'); ?>


<section class="hero-mini">
    <div class="container position-relative" style="z-index:2;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                <li class="breadcrumb-item active">Kontak</li>
            </ol>
        </nav>
        <h1 class="fs-2 mb-1">Hubungi Kami</h1>
        <p class="text-white-50 mb-0">Kami siap membantu dan menjawab pertanyaan Anda</p>
    </div>
</section>

<section class="py-5">
    <div class="container">

        <?php if(session('success')): ?>
            <div class="alert alert-success d-flex align-items-center gap-2 mb-4 fade-up">
                <i class="bi bi-check-circle-fill fs-5"></i> <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="row g-5">

            
            <div class="col-lg-5 fade-up">
                <p class="text-uppercase fw-semibold mb-1" style="color:var(--accent);font-size:0.82rem;letter-spacing:1px;">Informasi</p>
                <h2 class="section-title mb-2">Kontak & Lokasi</h2>
                <div class="section-divider mb-4"></div>

                
                <div class="d-flex gap-4 mb-4 p-3 rounded-3" style="background:white;box-shadow:var(--card-shadow);">
                    <div style="width:48px;height:48px;background:linear-gradient(135deg,var(--primary),var(--accent));border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="bi bi-geo-alt-fill text-white fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-700 mb-1" style="font-weight:700;">Alamat</h6>
                        <p class="text-muted mb-0" style="font-size:0.9rem;"><?php echo e($kontak->alamat ?? 'Jl. Pendidikan No. 123, Bandung'); ?></p>
                    </div>
                </div>

                
                <div class="d-flex gap-4 mb-4 p-3 rounded-3" style="background:white;box-shadow:var(--card-shadow);">
                    <div style="width:48px;height:48px;background:linear-gradient(135deg,var(--primary),var(--accent));border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="bi bi-telephone-fill text-white fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-700 mb-1" style="font-weight:700;">Telepon</h6>
                        <a href="tel:<?php echo e($kontak->telepon ?? ''); ?>" class="text-decoration-none" style="color:var(--accent);">
                            <?php echo e($kontak->telepon ?? '-'); ?>

                        </a>
                    </div>
                </div>

                
                <div class="d-flex gap-4 mb-4 p-3 rounded-3" style="background:white;box-shadow:var(--card-shadow);">
                    <div style="width:48px;height:48px;background:linear-gradient(135deg,var(--primary),var(--accent));border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="bi bi-envelope-fill text-white fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-700 mb-1" style="font-weight:700;">Email</h6>
                        <a href="mailto:<?php echo e($kontak->email ?? ''); ?>" class="text-decoration-none" style="color:var(--accent);">
                            <?php echo e($kontak->email ?? '-'); ?>

                        </a>
                    </div>
                </div>

                
                <div class="p-3 rounded-3 mb-4" style="background:white;box-shadow:var(--card-shadow);">
                    <h6 class="fw-700 mb-3" style="font-weight:700;">Media Sosial</h6>
                    <div class="d-flex flex-wrap gap-2">
                        <?php if($kontak && $kontak->instagram): ?>
                        <a href="<?php echo e($kontak->instagram); ?>" target="_blank" class="btn btn-sm d-flex align-items-center gap-2"
                           style="background:#e1306c;color:white;border-radius:8px;font-size:0.85rem;">
                            <i class="bi bi-instagram"></i> Instagram
                        </a>
                        <?php endif; ?>
                        <?php if($kontak && $kontak->facebook): ?>
                        <a href="<?php echo e($kontak->facebook); ?>" target="_blank" class="btn btn-sm d-flex align-items-center gap-2"
                           style="background:#1877f2;color:white;border-radius:8px;font-size:0.85rem;">
                            <i class="bi bi-facebook"></i> Facebook
                        </a>
                        <?php endif; ?>
                        <?php if($kontak && $kontak->youtube): ?>
                        <a href="<?php echo e($kontak->youtube); ?>" target="_blank" class="btn btn-sm d-flex align-items-center gap-2"
                           style="background:#ff0000;color:white;border-radius:8px;font-size:0.85rem;">
                            <i class="bi bi-youtube"></i> YouTube
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-7 fade-up">

                
                <?php if($kontak && $kontak->google_maps): ?>
                <div class="mb-4 rounded-4 overflow-hidden" style="box-shadow:var(--card-shadow);">
                    <?php echo $kontak->google_maps; ?>

                </div>
                <?php else: ?>
                <div class="mb-4 rounded-4 overflow-hidden d-flex align-items-center justify-content-center"
                     style="height:250px;background:#e3f2fd;box-shadow:var(--card-shadow);">
                    <div class="text-center">
                        <i class="bi bi-map fs-1 mb-2 d-block" style="color:var(--primary);"></i>
                        <p class="text-muted mb-0">Peta belum dikonfigurasi</p>
                    </div>
                </div>
                <?php endif; ?>

                
                <div class="p-4 rounded-4" style="background:white;box-shadow:var(--card-shadow);">
                    <h5 class="fw-800 mb-1" style="font-weight:800;color:var(--primary);">
                        <i class="bi bi-chat-dots-fill me-2"></i>Hubungi Kami
                    </h5>
                    <p class="text-muted mb-4" style="font-size:0.88rem;">Isi formulir di bawah dan kami akan segera merespons.</p>

                    <form method="POST" action="<?php echo e(route('kontak.kirim')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label class="form-label fw-semibold" style="font-size:0.9rem;">
                                Nama Lengkap <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="nama" value="<?php echo e(old('nama')); ?>"
                                   class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   placeholder="Masukkan nama Anda">
                            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold" style="font-size:0.9rem;">
                                Email <span class="text-danger">*</span>
                            </label>
                            <input type="email" name="email" value="<?php echo e(old('email')); ?>"
                                   class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   placeholder="contoh@email.com">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold" style="font-size:0.9rem;">
                                Pesan <span class="text-danger">*</span>
                            </label>
                            <textarea name="pesan" rows="4"
                                      class="form-control <?php $__errorArgs = ['pesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                      placeholder="Tulis pesan Anda di sini..."><?php echo e(old('pesan')); ?></textarea>
                            <?php $__errorArgs = ['pesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-2">
                            <i class="bi bi-send-fill me-2"></i>Kirim Pesan
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ProfilRPL\resources\views/kontak.blade.php ENDPATH**/ ?>