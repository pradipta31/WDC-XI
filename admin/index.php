<?php
    include 'app-atas.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Static Navigation</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Static Navigation</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="mb-0">
                            Selamat datang <?= $rw['email']; ?> di Sistem Informasi Manajemen Siswa SMK TI Bali Global Denpasar. <br/>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-primary" role="alert">
                            A simple primary alert—check it out!
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php
    include 'app-bawah.php';
?>
                