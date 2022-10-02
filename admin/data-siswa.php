<?php
include 'app-atas.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Data Siswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="data-siswa.php">Data Siswa</a></li>
                <li class="breadcrumb-item active">Tambah Data Siswa</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM user");
                                        while($row = mysqli_fetch_assoc($query)){
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row['nama']; ?></td>
                                            <td><?= $row['username']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['status']; ?></td>
                                            <td>
                                                <a href="#">Edit</a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php
    include 'app-bawah.php';
    ?>