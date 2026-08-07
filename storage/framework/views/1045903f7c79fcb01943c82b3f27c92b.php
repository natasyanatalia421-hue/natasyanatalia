<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Profil Jurusan Rekayasa Perangkat Lunak">
    <title><?php echo $__env->yieldContent('title', 'Profil Jurusan RPL'); ?></title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary:       #0d47a1;
            --primary-light: #1565c0;
            --primary-dark:  #0a2d6b;
            --accent:        #1976d2;
            --accent-light:  #42a5f5;
            --secondary:     #e3f2fd;
            --text-dark:     #1a1a2e;
            --text-muted:    #546e7a;
            --white:         #ffffff;
            --card-shadow:   0 4px 24px rgba(13,71,161,0.10);
            --hover-shadow:  0 8px 32px rgba(13,71,161,0.20);
            --border-radius: 16px;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-dark);
            background: #f8fbff;
        }

        /* ===== NAVBAR ===== */
        .navbar-custom {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 60%, var(--accent) 100%);
            box-shadow: 0 2px 20px rgba(13,71,161,0.3);
            padding: 0.75rem 0;
        }
        .navbar-custom .navbar-brand {
            font-weight: 800;
            font-size: 1.25rem;
            color: var(--white) !important;
            letter-spacing: -0.5px;
        }
        .navbar-custom .navbar-brand span {
            background: rgba(255,255,255,0.15);
            padding: 2px 10px;
            border-radius: 8px;
            margin-right: 6px;
        }
        .navbar-custom .nav-link {
            color: rgba(255,255,255,0.85) !important;
            font-weight: 500;
            font-size: 0.92rem;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: all 0.25s;
            position: relative;
        }
        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-link.active {
            color: var(--white) !important;
            background: rgba(255,255,255,0.15);
        }
        .navbar-custom .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0; left: 50%; transform: translateX(-50%);
            width: 24px; height: 3px;
            background: var(--accent-light);
            border-radius: 2px;
        }
        .navbar-toggler {
            border: none;
            color: white !important;
        }
        .navbar-toggler:focus { box-shadow: none; }

        /* ===== HERO ===== */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 50%, var(--accent) 100%);
            min-height: 92vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute; inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .hero-section .floating-shapes {
            position: absolute; inset: 0; pointer-events: none;
        }
        .hero-section .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
        }
        .hero-section .shape-1 { width: 300px; height: 300px; top: -80px; right: -80px; }
        .hero-section .shape-2 { width: 200px; height: 200px; bottom: 60px; left: -60px; }
        .hero-section .shape-3 { width: 120px; height: 120px; top: 40%; right: 15%; }

        .hero-badge {
            display: inline-flex; align-items: center; gap: 6px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            color: white;
            padding: 6px 16px;
            border-radius: 100px;
            font-size: 0.82rem;
            font-weight: 600;
            letter-spacing: 0.3px;
            margin-bottom: 1.2rem;
        }
        .hero-title {
            font-size: clamp(2.2rem, 5vw, 3.8rem);
            font-weight: 800;
            color: white;
            line-height: 1.1;
            margin-bottom: 1.2rem;
            letter-spacing: -1px;
        }
        .hero-title .highlight {
            background: linear-gradient(135deg, #90caf9, #e3f2fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero-desc {
            color: rgba(255,255,255,0.82);
            font-size: 1.08rem;
            line-height: 1.75;
            margin-bottom: 2rem;
        }
        .btn-hero-primary {
            background: white;
            color: var(--primary);
            border: none;
            padding: 0.8rem 2rem;
            font-weight: 700;
            border-radius: 12px;
            font-size: 0.95rem;
            transition: all 0.3s;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }
        .btn-hero-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
            background: #e3f2fd;
            color: var(--primary);
        }
        .btn-hero-outline {
            background: transparent;
            color: white;
            border: 2px solid rgba(255,255,255,0.5);
            padding: 0.8rem 2rem;
            font-weight: 600;
            border-radius: 12px;
            font-size: 0.95rem;
            transition: all 0.3s;
        }
        .btn-hero-outline:hover {
            background: rgba(255,255,255,0.15);
            border-color: white;
            color: white;
        }
        .hero-image-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 24px;
            padding: 2rem;
            color: white;
        }

        /* ===== SECTION ===== */
        .section-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            letter-spacing: -0.5px;
        }
        .section-subtitle {
            color: var(--text-muted);
            font-size: 1rem;
        }
        .section-divider {
            width: 60px; height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--accent-light));
            border-radius: 4px;
            margin: 0.5rem 0 1rem;
        }
        .section-divider.center { margin: 0.5rem auto 1rem; }

        /* ===== CARDS ===== */
        .card-feature {
            background: white;
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
            padding: 2rem 1.5rem;
            transition: all 0.35s cubic-bezier(0.4,0,0.2,1);
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        .card-feature::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--accent-light));
            transform: scaleX(0);
            transition: transform 0.35s;
        }
        .card-feature:hover {
            transform: translateY(-6px);
            box-shadow: var(--hover-shadow);
        }
        .card-feature:hover::before { transform: scaleX(1); }

        .card-icon {
            width: 60px; height: 60px;
            background: linear-gradient(135deg, var(--secondary), #bbdefb);
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 1.2rem;
            font-size: 1.6rem;
            color: var(--primary);
            transition: all 0.35s;
        }
        .card-feature:hover .card-icon {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: white;
        }

        /* ===== STATS ===== */
        .stat-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
            padding: 2rem 1rem;
            text-align: center;
            transition: all 0.35s;
        }
        .stat-card:hover { transform: translateY(-4px); box-shadow: var(--hover-shadow); }
        .stat-icon {
            font-size: 2.8rem;
            background: linear-gradient(135deg, var(--primary), var(--accent-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .stat-number {
            font-size: 2.4rem;
            font-weight: 800;
            color: var(--primary);
            line-height: 1;
        }
        .stat-label { color: var(--text-muted); font-size: 0.9rem; font-weight: 500; }

        /* ===== HERO KECIL ===== */
        .hero-mini {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 60%, var(--accent) 100%);
            padding: 5rem 0 4rem;
            position: relative;
            overflow: hidden;
        }
        .hero-mini::before {
            content: '';
            position: absolute; inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .hero-mini h1 { color: white; font-weight: 800; letter-spacing: -0.5px; }
        .hero-mini .breadcrumb-item, .hero-mini .breadcrumb-item a { color: rgba(255,255,255,0.7); font-size: 0.88rem; }
        .hero-mini .breadcrumb-item.active { color: rgba(255,255,255,0.95); }
        .hero-mini .breadcrumb-divider, .breadcrumb-item + .breadcrumb-item::before { color: rgba(255,255,255,0.5); }

        /* ===== TABLE ===== */
        .table-modern { border-radius: 12px; overflow: hidden; box-shadow: var(--card-shadow); }
        .table-modern thead th {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: white;
            font-weight: 600;
            border: none;
            padding: 1rem;
        }
        .table-modern tbody tr { transition: background 0.2s; }
        .table-modern tbody tr:hover { background: #e3f2fd; }
        .table-modern tbody td { padding: 0.85rem 1rem; vertical-align: middle; }

        /* ===== PROFIL SECTION ===== */
        .profil-section { padding: 5rem 0; }
        .profil-section:nth-child(even) { background: #f0f8ff; }
        .visi-misi-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 2.5rem;
            box-shadow: var(--card-shadow);
            height: 100%;
            border-left: 5px solid var(--primary);
        }
        .kompetensi-item, .karier-item, .fasilitas-item {
            background: white;
            border-radius: 12px;
            padding: 1.2rem 1.5rem;
            margin-bottom: 0.75rem;
            box-shadow: var(--card-shadow);
            display: flex;
            align-items: flex-start;
            gap: 12px;
            transition: all 0.3s;
        }
        .kompetensi-item:hover, .karier-item:hover, .fasilitas-item:hover {
            transform: translateX(6px);
            box-shadow: var(--hover-shadow);
        }

        /* ===== FOOTER ===== */
        .footer {
            background: linear-gradient(180deg, var(--primary-dark) 0%, #071a42 100%);
            color: rgba(255,255,255,0.75);
            padding: 4rem 0 0;
        }
        .footer-brand { font-size: 1.35rem; font-weight: 800; color: white; }
        .footer-title { font-size: 1rem; font-weight: 700; color: white; margin-bottom: 1.2rem; }
        .footer a { color: rgba(255,255,255,0.65); text-decoration: none; transition: color 0.2s; font-size: 0.9rem; }
        .footer a:hover { color: var(--accent-light); }
        .footer-link-item { display: flex; align-items: center; gap: 8px; margin-bottom: 0.5rem; }
        .footer-link-item i { color: var(--accent-light); font-size: 0.85rem; }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 1.25rem 0;
            margin-top: 3rem;
        }
        .social-btn {
            width: 38px; height: 38px;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            display: inline-flex; align-items: center; justify-content: center;
            color: white !important;
            font-size: 1rem;
            transition: all 0.25s;
        }
        .social-btn:hover { background: var(--accent); transform: translateY(-2px); }

        /* ===== ALERTS ===== */
        .alert-success { background: #e8f5e9; border: none; border-left: 4px solid #43a047; color: #2e7d32; }

        /* ===== FORM ===== */
        .form-control, .form-select {
            border-radius: 10px;
            border: 1.5px solid #e0e8f5;
            padding: 0.65rem 1rem;
            font-size: 0.93rem;
            transition: all 0.2s;
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(25,118,210,0.1);
        }
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border: none;
            border-radius: 10px;
            font-weight: 600;
            padding: 0.65rem 1.5rem;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(13,71,161,0.35);
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
        }

        /* ===== SCROLL ANIMATIONS ===== */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ===== PAGINATION ===== */
        .pagination .page-link {
            border-radius: 8px !important;
            margin: 0 2px;
            color: var(--primary);
            border: 1.5px solid #e0e8f5;
        }
        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-color: var(--primary);
        }
        .pagination .page-link:hover {
            background: var(--secondary);
            color: var(--primary);
        }
    </style>

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>

    
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <span><i class="bi bi-cpu-fill"></i></span>RPL <span class="d-none d-sm-inline">SMKN 1</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <i class="bi bi-list fs-4 text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto gap-1">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>"
                           href="<?php echo e(route('home')); ?>"><i class="bi bi-house-fill me-1"></i>Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('profil*') ? 'active' : ''); ?>"
                           href="<?php echo e(route('profil.index')); ?>"><i class="bi bi-info-circle-fill me-1"></i>Profil Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('kontak*') ? 'active' : ''); ?>"
                           href="<?php echo e(route('kontak.index')); ?>"><i class="bi bi-envelope-fill me-1"></i>Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <?php echo $__env->yieldContent('content'); ?>

    
    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Scroll animation observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
    </script>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\ProfilRPL\resources\views/layouts/app.blade.php ENDPATH**/ ?>