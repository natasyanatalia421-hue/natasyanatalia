<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo e($profil->nama_jurusan ?? 'Profil Jurusan RPL'); ?> – SMKN 1</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
:root{--p:#0d47a1;--pd:#0a2d6b;--a:#1976d2;--al:#42a5f5;--s:#e3f2fd;--tm:#546e7a;--cs:0 4px 24px rgba(13,71,161,.10);--hs:0 8px 32px rgba(13,71,161,.20);--r:16px}
html{scroll-behavior:smooth}
*{box-sizing:border-box}
body{font-family:"Plus Jakarta Sans",sans-serif;background:#f8fbff;color:#1a1a2e}

/* NAV */
.nav-c{background:linear-gradient(135deg,var(--pd) 0%,var(--p) 60%,var(--a) 100%);box-shadow:0 2px 20px rgba(13,71,161,.3);padding:.7rem 0}
.nav-c .navbar-brand{font-weight:800;font-size:1.2rem;color:#fff!important}
.nav-c .navbar-brand .ic{background:rgba(255,255,255,.15);padding:2px 10px;border-radius:8px;margin-right:6px}
.nav-c .nav-link{color:rgba(255,255,255,.85)!important;font-weight:500;font-size:.9rem;padding:.4rem .9rem!important;border-radius:8px;transition:all .25s}
.nav-c .nav-link:hover{color:#fff!important;background:rgba(255,255,255,.15)}
.navbar-toggler{border:none!important}.navbar-toggler:focus{box-shadow:none!important}

/* HERO */
.hero{background:linear-gradient(135deg,var(--pd) 0%,var(--p) 55%,var(--a) 100%);min-height:100vh;display:flex;align-items:center;position:relative;overflow:hidden;padding:5rem 0 4rem}
.hero::before{content:"";position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6z'/%3E%3C/g%3E%3C/svg%3E")}
.h-badge{display:inline-flex;align-items:center;gap:6px;background:rgba(255,255,255,.15);backdrop-filter:blur(10px);color:#fff;padding:5px 16px;border-radius:100px;font-size:.82rem;font-weight:600;margin-bottom:1.2rem}
.h-title{font-size:clamp(2rem,5vw,3.5rem);font-weight:800;color:#fff;line-height:1.1;margin-bottom:1.2rem;letter-spacing:-1px}
.h-title .hl{background:linear-gradient(135deg,#90caf9,#e3f2fd);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.h-desc{color:rgba(255,255,255,.82);font-size:1.02rem;line-height:1.75;margin-bottom:2rem}
.btn-hp{background:#fff;color:var(--p);border:none;padding:.7rem 1.8rem;font-weight:700;border-radius:12px;font-size:.9rem;transition:all .3s;text-decoration:none;display:inline-flex;align-items:center;gap:8px}
.btn-hp:hover{transform:translateY(-2px);box-shadow:0 8px 30px rgba(0,0,0,.2);background:#e3f2fd;color:var(--p)}
.btn-ho{background:transparent;color:#fff;border:2px solid rgba(255,255,255,.5);padding:.7rem 1.8rem;font-weight:600;border-radius:12px;font-size:.9rem;transition:all .3s;text-decoration:none;display:inline-flex;align-items:center;gap:8px}
.btn-ho:hover{background:rgba(255,255,255,.15);border-color:#fff;color:#fff}
.h-card{background:rgba(255,255,255,.1);backdrop-filter:blur(20px);border:1px solid rgba(255,255,255,.2);border-radius:24px;padding:2rem;color:#fff}
.h-card-item{background:rgba(255,255,255,.1);border-radius:12px;padding:.9rem;text-align:center}

/* SECTION */
.sec-title{font-size:1.85rem;font-weight:800;color:var(--p);letter-spacing:-.5px}
.sec-sub{color:var(--tm);font-size:.95rem}
.sec-div{width:56px;height:4px;background:linear-gradient(90deg,var(--p),var(--al));border-radius:4px;margin:.5rem 0 1rem}
.sec-div.c{margin:.5rem auto 1rem}
.btn-primary{background:linear-gradient(135deg,var(--p),var(--a));border:none;border-radius:10px;font-weight:600;padding:.6rem 1.4rem;transition:all .3s}
.btn-primary:hover{transform:translateY(-1px);box-shadow:0 4px 15px rgba(13,71,161,.35)}
.btn-outline-primary{border-radius:10px!important}
.form-control,.form-select{border-radius:10px;border:1.5px solid #e0e8f5;padding:.6rem 1rem;font-size:.92rem;transition:all .2s}
.form-control:focus,.form-select:focus{border-color:var(--a);box-shadow:0 0 0 3px rgba(25,118,210,.1)}

/* CARD FITUR */
.cf{background:#fff;border:none;border-radius:var(--r);box-shadow:var(--cs);padding:1.8rem 1.4rem;transition:all .35s;height:100%;position:relative;overflow:hidden}
.cf::before{content:"";position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--p),var(--al));transform:scaleX(0);transition:transform .35s}
.cf:hover{transform:translateY(-5px);box-shadow:var(--hs)}.cf:hover::before{transform:scaleX(1)}
.c-icon{width:56px;height:56px;background:linear-gradient(135deg,var(--s),#bbdefb);border-radius:13px;display:flex;align-items:center;justify-content:center;margin-bottom:1rem;font-size:1.5rem;color:var(--p);transition:all .35s}
.cf:hover .c-icon{background:linear-gradient(135deg,var(--p),var(--a));color:#fff}

/* STAT */
.sc{background:#fff;border-radius:var(--r);box-shadow:var(--cs);padding:1.8rem 1rem;text-align:center;transition:all .35s}
.sc:hover{transform:translateY(-4px);box-shadow:var(--hs)}
.si{font-size:2.5rem;background:linear-gradient(135deg,var(--p),var(--al));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.sn{font-size:2.1rem;font-weight:800;color:var(--p);line-height:1}
.sl{color:var(--tm);font-size:.85rem;font-weight:500}

/* VISI MISI */
.vm{background:#fff;border-radius:var(--r);padding:2rem;box-shadow:var(--cs);height:100%;border-left:5px solid var(--p)}

/* LIST ITEM */
.li{background:#fff;border-radius:12px;padding:1rem 1.2rem;margin-bottom:.6rem;box-shadow:var(--cs);display:flex;align-items:flex-start;gap:12px;transition:all .3s}
.li:hover{transform:translateX(5px);box-shadow:var(--hs)}
.lic{width:38px;height:38px;border-radius:9px;flex-shrink:0;background:linear-gradient(135deg,var(--p),var(--a));display:flex;align-items:center;justify-content:center}

/* GALERI */
.gi{border-radius:var(--r);box-shadow:var(--cs);transition:all .35s;height:180px;display:flex;align-items:center;justify-content:center;flex-direction:column;overflow:hidden}
.gi:hover{transform:scale(1.03);box-shadow:var(--hs)}

/* KONTAK */
.kc{background:#fff;border-radius:12px;padding:1rem 1.2rem;box-shadow:var(--cs);display:flex;align-items:flex-start;gap:14px;margin-bottom:1rem}
.kcic{width:44px;height:44px;flex-shrink:0;border-radius:11px;background:linear-gradient(135deg,var(--p),var(--a));display:flex;align-items:center;justify-content:center}

/* FOOTER */
.footer{background:linear-gradient(180deg,var(--pd) 0%,#071a42 100%);color:rgba(255,255,255,.75);padding:3rem 0 0}
.fb{font-size:1.2rem;font-weight:800;color:#fff}
.ft{font-size:.95rem;font-weight:700;color:#fff;margin-bottom:1rem}
.footer a{color:rgba(255,255,255,.65);text-decoration:none;transition:color .2s;font-size:.88rem}
.footer a:hover{color:var(--al)}
.fli{display:flex;align-items:center;gap:8px;margin-bottom:.45rem}
.fli i{color:var(--al);font-size:.82rem}
.fb-bottom{border-top:1px solid rgba(255,255,255,.1);padding:1rem 0;margin-top:2.5rem}
.soc{width:36px;height:36px;background:rgba(255,255,255,.1);border-radius:9px;display:inline-flex;align-items:center;justify-content:center;color:#fff!important;font-size:.95rem;transition:all .25s}
.soc:hover{background:var(--a);transform:translateY(-2px)}

/* ALERT */
.alert-ok{background:#e8f5e9;border:none;border-left:4px solid #43a047;color:#2e7d32;border-radius:10px;padding:.9rem 1.2rem}
</style>
</head>
<body>


<nav class="navbar navbar-expand-lg nav-c sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#beranda">
      <span class="ic"><i class="bi bi-cpu-fill"></i></span>RPL <span class="d-none d-sm-inline">SMKN 1</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <i class="bi bi-list fs-4 text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto gap-1">
        <li class="nav-item"><a class="nav-link" href="#beranda"><i class="bi bi-house-fill me-1"></i>Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#profil"><i class="bi bi-info-circle-fill me-1"></i>Profil Jurusan</a></li>
        <li class="nav-item"><a class="nav-link" href="#visi-misi"><i class="bi bi-eye-fill me-1"></i>Visi & Misi</a></li>
        <li class="nav-item"><a class="nav-link" href="#prestasi"><i class="bi bi-trophy-fill me-1"></i>Prestasi</a></li>
        <li class="nav-item"><a class="nav-link" href="#galeri"><i class="bi bi-images me-1"></i>Galeri</a></li>
        <li class="nav-item"><a class="nav-link" href="#kontak"><i class="bi bi-envelope-fill me-1"></i>Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>


<section id="beranda" class="hero">
  <div class="container position-relative" style="z-index:2">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="h-badge"><i class="bi bi-patch-check-fill"></i> Jurusan Unggulan SMKN 1 Bandung</div>
        <h1 class="h-title">
          Jurusan<br>
          <span class="hl"><?php echo e($profil->nama_jurusan ?? 'Rekayasa Perangkat Lunak'); ?></span>
        </h1>
        <p class="h-desc">
          <?php echo e($profil->slogan ?? 'Mencetak Generasi Digital Unggul dan Berkarakter'); ?>.<br>
          Bergabunglah bersama kami dan wujudkan mimpimu di dunia teknologi.
        </p>
        <div class="d-flex flex-wrap gap-3">
          <a href="#profil" class="btn-hp"><i class="bi bi-arrow-down-circle-fill"></i>Pelajari Lebih Lanjut</a>
          <a href="#kontak" class="btn-ho"><i class="bi bi-envelope"></i>Hubungi Kami</a>
        </div>
      </div>
      <div class="col-lg-6 d-none d-lg-block">
        <div class="h-card">
          <div class="row g-3 mb-3">
            <div class="col-6"><div class="h-card-item"><i class="bi bi-code-slash fs-2 mb-2 d-block"></i><small class="fw-semibold">Web Development</small></div></div>
            <div class="col-6"><div class="h-card-item"><i class="bi bi-phone fs-2 mb-2 d-block"></i><small class="fw-semibold">Mobile Apps</small></div></div>
            <div class="col-6"><div class="h-card-item"><i class="bi bi-database fs-2 mb-2 d-block"></i><small class="fw-semibold">Database</small></div></div>
            <div class="col-6"><div class="h-card-item"><i class="bi bi-palette fs-2 mb-2 d-block"></i><small class="fw-semibold">UI/UX Design</small></div></div>
          </div>
          <div class="h-card-item text-center"><i class="bi bi-mortarboard-fill me-2"></i><span class="fw-semibold">Siap Kerja &bull; Siap Kuliah &bull; Siap Wirausaha</span></div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php /**PATH C:\laragon\www\ProfilRPL\resources\views/home.blade.php ENDPATH**/ ?>