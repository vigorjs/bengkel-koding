<?php
require_once "conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Poliklinik</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Sistem Informasi Poliklinik
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Data Master
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="index.php?page=dokter">
                                        Dokter
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index.php?page=pasien">
                                        Pasien
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=periksa">
                                Periksa
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main role="main" class="container">
        <?php
        if (isset($_GET['page'])) {
        ?>
            <h2 class="mt-4"><?php echo ucwords($_GET['page']) ?></h2>
        <?php
            include($_GET['page'] . ".php");
        } else {
            echo "Selamat Datang di Sistem Informasi Poliklinik";
        }
        ?>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>


</html>