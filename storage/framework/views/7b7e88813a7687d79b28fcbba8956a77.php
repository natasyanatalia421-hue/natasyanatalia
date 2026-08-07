<footer class="footer">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand mb-3">
                    <i class="bi bi-cpu-fill me-2"></i>RPL SMKN 1
                </div>
                <p class="mb-3" style="font-size:0.9rem; line-height:1.7;">
                    Jurusan Rekayasa Perangkat Lunak yang berdedikasi menghasilkan lulusan kompeten, inovatif, dan siap kerja di era digital.
                </p>
                <div class="d-flex gap-2">
                    <a href="#" class="social-btn" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-btn" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-btn" title="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="social-btn" title="Email"><i class="bi bi-envelope-fill"></i></a>
                </div>
            </div>

            
            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="footer-title">Link Cepat</h6>
                <ul class="list-unstyled mb-0">
                    <li class="footer-link-item"><i class="bi bi-chevron-right"></i><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                    <li class="footer-link-item"><i class="bi bi-chevron-right"></i><a href="<?php echo e(route('profil.index')); ?>">Profil Jurusan</a></li>
                    <li class="footer-link-item"><i class="bi bi-chevron-right"></i><a href="<?php echo e(route('kontak.index')); ?>">Kontak</a></li>
                </ul>
            </div>

            
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-title">Kontak Kami</h6>
                <ul class="list-unstyled mb-0">
                    <li class="footer-link-item">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Jl. Pendidikan No. 123, Bandung</span>
                    </li>
                    <li class="footer-link-item">
                        <i class="bi bi-telephone-fill"></i>
                        <a href="tel:02212345678">(022) 1234-5678</a>
                    </li>
                    <li class="footer-link-item">
                        <i class="bi bi-envelope-fill"></i>
                        <a href="mailto:rpl@smkn1bandung.sch.id">rpl@smkn1bandung.sch.id</a>
                    </li>
                </ul>
            </div>

            
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-title">Jam Operasional</h6>
                <ul class="list-unstyled mb-0">
                    <li class="footer-link-item">
                        <i class="bi bi-clock-fill"></i>
                        <span>Senin – Jumat</span>
                    </li>
                    <li style="padding-left:1.5rem; margin-bottom:0.5rem;">
                        <span>07.00 – 16.00 WIB</span>
                    </li>
                    <li class="footer-link-item">
                        <i class="bi bi-clock"></i>
                        <span>Sabtu</span>
                    </li>
                    <li style="padding-left:1.5rem; margin-bottom:0.5rem;">
                        <span>07.00 – 12.00 WIB</span>
                    </li>
                    <li class="footer-link-item">
                        <i class="bi bi-x-circle-fill" style="color:#ef9a9a;"></i>
                        <span>Minggu & Hari Libur: Tutup</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                <p class="mb-0" style="font-size:0.85rem;">
                    &copy; <?php echo e(date('Y')); ?> <strong style="color:white;">RPL SMKN 1 Bandung</strong>. Hak cipta dilindungi.
                </p>
                <p class="mb-0" style="font-size:0.82rem;">
                    Dibuat dengan <i class="bi bi-heart-fill text-danger"></i> menggunakan Laravel & Bootstrap 5
                </p>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\laragon\www\ProfilRPL\resources\views/layouts/footer.blade.php ENDPATH**/ ?>