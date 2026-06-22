<!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('/') ?>">
                    <i class="bi bi-grid"></i>
                    <span>Home</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('keranjang') ?>">
                    <i class="bi bi-cart-check"></i>
                    <span>Keranjang</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('produk') ?>">
                    <i class="bi bi-receipt"></i>
                    <span>Produk</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link <?php echo(uri_string() == 'history') ? "" : "collapsed" ?>" href="history">
                    <i class="bi bi-person"></i>
                    <span>History</span>
                </a>
            </li><!-- End History Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('profile') ?>">
                    <i class="bi bi-person"></i>
                    <span>Profil</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('faq') ?>">
                    <i class="bi bi-question-circle"></i>
                    <span>FAQ</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('contact') ?>">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li><!-- End Dashboard Nav -->

        </ul>

    </aside><!-- End Sidebar-->