<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Manajemen Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dashboard-card {
            background: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .card-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .btn-custom {
            border-radius: 25px;
            padding: 12px 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.05);
        }
        .welcome-text {
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row min-vh-100 align-items-center">
            <div class="col-12">
                <!-- Header -->
                <div class="text-center mb-5">
                    <h1 class="display-4 welcome-text mb-3">
                        <i class="fas fa-hospital-user me-3"></i>
                        Sistem Manajemen Rumah Sakit
                    </h1>
                    <p class="lead welcome-text">Selamat datang kembali! Kelola data rumah sakit Anda dengan efisien.</p>
                </div>

                <!-- Dashboard Cards -->
                <div class="row g-4 justify-content-center">
                    <!-- Rumah Sakit Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card dashboard-card h-100">
                            <div class="card-body text-center p-5">
                                <div class="card-icon text-primary">
                                    <i class="fas fa-building"></i>
                                </div>
                                <h3 class="card-title mb-3">Data Rumah Sakit</h3>
                                <p class="card-text text-muted mb-4">
                                    Kelola informasi rumah sakit termasuk nama, alamat, email, dan detail kontak.
                                </p>
                                <a href="{{ route('rumahsakit.index') }}" class="btn btn-primary btn-custom">
                                    <i class="fas fa-arrow-right me-2"></i>Akses Data
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Pasien Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card dashboard-card h-100">
                            <div class="card-body text-center p-5">
                                <div class="card-icon text-success">
                                    <i class="fas fa-user-injured"></i>
                                </div>
                                <h3 class="card-title mb-3">Data Pasien</h3>
                                <p class="card-text text-muted mb-4">
                                    Tangani catatan pasien dengan informasi lengkap dan asosiasi rumah sakit.
                                </p>
                                <a href="{{ route('pasien.index') }}" class="btn btn-success btn-custom">
                                    <i class="fas fa-arrow-right me-2"></i>Akses Data
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="text-center mt-5">
                    <p class="text-white-50">
                        <i class="fas fa-copyright me-1"></i>
                        2025 BENI SOPIAN - Sistem Manajemen Rumah Sakit
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
