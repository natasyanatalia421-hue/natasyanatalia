
<?php $__env->startSection('title', 'Profil Jurusan – RPL SMKN 1'); ?>

<?php $__env->startSection('content'); ?>


<section class="hero-mini">
    <div class="container position-relative" style="z-index:2;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                <li class="breadcrumb-item active">Profil Jurusan</li>
            </ol>
        </nav>
        <h1 class="fs-2 mb-1">Profil Jurusan</h1>
        <p class="text-white-50 mb-0"><?php echo e($profil->nama_jurusan ?? 'Rekayasa Perangkat Lunak'); ?></p>
    </div>
</section>

<?php if($profil): ?>


<section class="profil-section bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5 fade-up">
                <?php if($profil->foto_profil): ?>
                    <img src="<?php echo e(asset('storage/' . $profil->foto_profil)); ?>" alt="Foto Jurusan"
                         class="img-fluid w-100 rounded-4 shadow-lg" style="height:350px; object-fit:cover;">
                <?php else: ?>
                    <div class="rounded-4 shadow-lg d-flex align-items-center justify-content-center flex-column"
                         style="height:350px; background:linear-gradient(135deg,#e3f2fd,#bbdefb);">
                        <i class="bi bi-building" style="font-size:5rem;color:#1565c0;"></i>
                        <p class="mt-3 fw-semibold text-primary"><?php echo e($profil->nama_jurusan); ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-7 fade-up">
                <p class="text-uppercase fw-semibold mb-1" style="color:var(--accent);font-size:0.82rem;letter-spacing:1px;">Tentang Kami</p>
                <h2 class="section-title mb-2"><?php echo e($profil->nama_jurusan); ?></h2>
                <div class="section-divider"></div>
                <?php if($profil->slogan): ?>
                    <p class="fst-italic mb-3" style="color:var(--accent);font-size:1.05rem;font-weight:600;">
                        "<?php echo e($profil->slogan); ?>"
                    </p>
                <?php endif; ?>
                <p class="text-muted" style="line-height:1.85;"><?php echo e($profil->deskripsi); ?></p>
            </div>
        </div>
    </div>
</section>


<section class="profil-section" style="background:#f0f8ff;">
    <div class="container">
        <div class="text-center mb-5 fade-up">
            <h2 class="section-title">Visi & Misi</h2>
            <div class="section-divider center"></div>
        </div>
        <div class="row g-4">
            <div class="col-lg-5 fade-up">
                <div class="visi-misi-card" style="border-left-color:#1976d2;">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div style="width:50px;height:50px;background:linear-gradient(135deg,#1565c0,#42a5f5);border-radius:12px;display:flex;align-items:center;justify-content:center;">
                            <i class="bi bi-eye-fill text-white fs-5"></i>
                        </div>
                        <h4 class="fw-800 mb-0" style="font-weight:800;color:var(--primary);">Visi</h4>
                    </div>
                    <p class="text-muted mb-0" style="line-height:1.8;"><?php echo e($profil->visi); ?></p>
                </div>
            </div>
            <div class="col-lg-7 fade-up">
                <div class="visi-misi-card" style="border-left-color:#42a5f5;">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div style="width:50px;height:50px;background:linear-gradient(135deg,#1565c0,#42a5f5);border-radius:12px;display:flex;align-items:center;justify-content:center;">
                            <i class="bi bi-bullseye text-white fs-5"></i>
                        </div>
                        <h4 class="fw-800 mb-0" style="font-weight:800;color:var(--primary);">Misi</h4>
                    </div>
                    <div class="text-muted" style="line-height:1.8; white-space:pre-line;"><?php echo e($profil->misi); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="profil-section bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center fade-up">
                <h2 class="section-title mb-2">Tujuan Jurusan</h2>
                <div class="section-divider center mb-4"></div>
                <div class="text-start">
                    <?php $__currentLoopData = explode("\n", $profil->tujuan); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tujuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(trim($tujuan)): ?>
                        <div class="d-flex align-items-start gap-3 mb-3 p-3 rounded-3" style="background:#f0f8ff;">
                            <i class="bi bi-check-circle-fill mt-1" style="color:var(--accent);font-size:1.1rem;flex-shrink:0;"></i>
                            <span><?php echo e(trim($tujuan)); ?></span>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="profil-section" style="background:#f0f8ff;">
    <div class="container">
        <div class="text-center mb-5 fade-up">
            <h2 class="section-title">Kompetensi yang Dipelajari</h2>
            <div class="section-divider center"></div>
            <p class="section-subtitle">Keahlian yang akan Anda kuasai selama belajar di jurusan ini</p>
        </div>
        <div class="row g-3">
            <?php $__currentLoopData = explode("\n", $profil->kompetensi); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(trim($item)): ?>
                <div class="col-lg-6 fade-up">
                    <div class="kompetensi-item">
                        <div style="width:36px;height:36px;background:linear-gradient(135deg,#1565c0,#42a5f5);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <i class="bi bi-code-slash text-white" style="font-size:0.9rem;"></i>
                        </div>
                        <span style="font-size:0.93rem;"><?php echo e(ltrim(trim($item), '•')); ?></span>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="profil-section bg-white">
    <div class="container">
        <div class="text-center mb-5 fade-up">
            <h2 class="section-title">Peluang Karier</h2>
            <div class="section-divider center"></div>
            <p class="section-subtitle">Berbagai pilihan karier menjanjikan menanti lulusan kami</p>
        </div>
        <div class="row g-3">
            <?php
                $karierIcons = ['bi-laptop','bi-phone','bi-server','bi-brush','bi-bug','bi-headset','bi-rocket-takeoff','bi-graph-up'];
                $karierIdx = 0;
            ?>
            <?php $__currentLoopData = explode("\n", $profil->peluang_karier); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(trim($item)): ?>
                <div class="col-lg-6 col-md-6 fade-up">
                    <div class="karier-item">
                        <div style="width:42px;height:42px;background:linear-gradient(135deg,var(--primary),var(--accent));border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <i class="bi <?php echo e($karierIcons[$karierIdx % count($karierIcons)]); ?> text-white"></i>
                        </div>
                        <span style="font-size:0.93rem;font-weight:500;"><?php echo e(ltrim(trim($item), '•')); ?></span>
                    </div>
                    <?php $karierIdx++ ?>
                </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="profil-section" style="background:#f0f8ff;">
    <div class="container">
        <div class="text-center mb-5 fade-up">
            <h2 class="section-title">Fasilitas Jurusan</h2>
            <div class="section-divider center"></div>
            <p class="section-subtitle">Sarana dan prasarana lengkap untuk mendukung pembelajaran</p>
        </div>
        <div class="row g-3">
            <?php
                $fasilitasIcons = ['bi-display','bi-wifi','bi-camera-video','bi-book','bi-lightbulb','bi-hdd-network'];
                $fasilitasIdx = 0;
            ?>
            <?php $__currentLoopData = explode("\n", $profil->fasilitas); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(trim($item)): ?>
                <div class="col-lg-4 col-md-6 fade-up">
                    <div class="fasilitas-item">
                        <div style="width:42px;height:42px;background:linear-gradient(135deg,#1565c0,#42a5f5);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <i class="bi <?php echo e($fasilitasIcons[$fasilitasIdx % count($fasilitasIcons)]); ?> text-white"></i>
                        </div>
                        <span style="font-size:0.9rem;"><?php echo e(ltrim(trim($item), '•')); ?></span>
                    </div>
                    <?php $fasilitasIdx++ ?>
                </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="profil-section bg-white">
    <div class="container">
        <div class="text-center mb-5 fade-up">
            <h2 class="section-title">Prestasi Jurusan</h2>
            <div class="section-divider center"></div>
        </div>
        <div class="row g-4">
            <?php
                $prestasi = [
                    ['icon'=>'bi-trophy-fill','judul'=>'Juara 1 LKS Tingkat Kota','desc'=>'Lomba Kompetensi Siswa bidang Web Technologies','tahun'=>'2024','color'=>'#ffd700'],
                    ['icon'=>'bi-award-fill','judul'=>'Juara 2 LKS Tingkat Provinsi','desc'=>'Lomba Kompetensi Siswa Jawa Barat bidang IT Software Solution','tahun'=>'2023','color'=>'#c0c0c0'],
                    ['icon'=>'bi-star-fill','judul'=>'Best Project Hackathon','desc'=>'Hackathon Nasional Aplikasi Pendidikan Digital','tahun'=>'2024','color'=>'#42a5f5'],
                    ['icon'=>'bi-patch-check-fill','judul'=>'Sertifikasi 100%','desc'=>'Semua siswa kelas XII lulus uji kompetensi LSP','tahun'=>'2023','color'=>'#66bb6a'],
                    ['icon'=>'bi-lightning-fill','judul'=>'Startup Terbaik','desc'=>'Program Wirausaha Muda SMK tingkat nasional','tahun'=>'2022','color'=>'#ffa726'],
                    ['icon'=>'bi-shield-fill-check','judul'=>'Akreditasi A','desc'=>'Akreditasi jurusan dengan predikat sempurna','tahun'=>'2023','color'=>'#ab47bc'],
                ];
            ?>
            <?php $__currentLoopData = $prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 fade-up">
                <div class="card-feature">
                    <div class="d-flex align-items-start gap-3">
                        <i class="bi <?php echo e($p['icon']); ?> fs-2" style="color:<?php echo e($p['color']); ?>;flex-shrink:0;"></i>
                        <div>
                            <span class="badge mb-2" style="background:var(--secondary);color:var(--primary);font-size:0.75rem;"><?php echo e($p['tahun']); ?></span>
                            <h6 class="fw-700 mb-1" style="font-weight:700;"><?php echo e($p['judul']); ?></h6>
                            <p class="text-muted mb-0" style="font-size:0.88rem;"><?php echo e($p['desc']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="profil-section" style="background:#f0f8ff;">
    <div class="container">
        <div class="text-center mb-5 fade-up">
            <h2 class="section-title">Galeri Kegiatan</h2>
            <div class="section-divider center"></div>
            <p class="section-subtitle">Momen berharga selama kegiatan belajar mengajar</p>
        </div>
        <div class="row g-3">
            <?php
                $galeri = [
                    ['icon'=>'bi-people','label'=>'Kegiatan Praktik'],
                    ['icon'=>'bi-laptop','label'=>'Lab Komputer'],
                    ['icon'=>'bi-trophy','label'=>'Lomba LKS'],
                    ['icon'=>'bi-mortarboard','label'=>'Wisuda Siswa'],
                    ['icon'=>'bi-building','label'=>'Kunjungan Industri'],
                    ['icon'=>'bi-camera','label'=>'Dokumentasi'],
                ];
                $colors = ['#e3f2fd','#e8f5e9','#fff8e1','#fce4ec','#f3e5f5','#e0f2f1'];
            ?>
            <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 fade-up">
                <div class="rounded-4 overflow-hidden" style="height:200px;background:<?php echo e($colors[$idx % count($colors)]); ?>;display:flex;align-items:center;justify-content:center;flex-direction:column;box-shadow:var(--card-shadow);transition:all 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
                    <i class="bi <?php echo e($g['icon']); ?>" style="font-size:3rem;color:var(--primary);"></i>
                    <p class="mt-2 mb-0 fw-semibold" style="color:var(--primary);"><?php echo e($g['label']); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php else: ?>
<section class="py-5">
    <div class="container text-center">
        <i class="bi bi-info-circle-fill fs-1 text-warning mb-3 d-block"></i>
        <p class="text-muted">Data profil jurusan belum tersedia.</p>
    </div>
</section>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ProfilRPL\resources\views/profil.blade.php ENDPATH**/ ?>