<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient - Hospital Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .form-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
        }
        .btn-custom {
            border-radius: 25px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.05);
        }
        .form-control {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }
        .form-select:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }
        .page-title {
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .back-link {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            text-decoration: none;
            font-weight: 600;
        }
        .back-link:hover {
            color: #ddd;
        }
        .form-icon {
            color: #28a745;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <a href="{{ route('pasien.index') }}" class="back-link">
        <i class="fas fa-arrow-left me-2"></i>Back to List
    </a>

    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="text-center mb-5">
                    <h1 class="display-4 page-title">
                        <i class="fas fa-user-edit me-3"></i>
                        Edit Patient
                    </h1>
                    <p class="lead text-white">Update patient information below</p>
                </div>

                <div class="card form-card">
                    <div class="card-body p-5">
                        <h3 class="card-title mb-4 text-center">
                            <i class="fas fa-user-injured me-2"></i>Patient Details
                        </h3>

                        <form method="POST" action="{{ route('pasien.update', $data->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label class="form-label">
                                    <i class="fas fa-user form-icon"></i>Patient Name
                                </label>
                                <input type="text" name="nama" value="{{ $data->nama }}" class="form-control form-control-lg" placeholder="Enter patient name" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">
                                    <i class="fas fa-map-marker-alt form-icon"></i>Address
                                </label>
                                <input type="text" name="alamat" value="{{ $data->alamat }}" class="form-control form-control-lg" placeholder="Enter address" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">
                                    <i class="fas fa-phone form-icon"></i>Phone Number
                                </label>
                                <input type="text" name="telepon" value="{{ $data->telepon }}" class="form-control form-control-lg" placeholder="Enter phone number" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">
                                    <i class="fas fa-building form-icon"></i>Hospital
                                </label>
                                <select name="rumah_sakit_id" class="form-select form-select-lg" required>
                                    <option value="">-- Select Hospital --</option>
                                    @foreach ($rumahSakit as $rs)
                                        <option value="{{ $rs->id }}" {{ $data->rumah_sakit_id == $rs->id ? 'selected' : '' }}>{{ $rs->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('pasien.index') }}" class="btn btn-secondary btn-custom me-md-2">
                                    <i class="fas fa-times me-2"></i>Cancel
                                </a>
                                <button type="submit" class="btn btn-warning btn-custom">
                                    <i class="fas fa-save me-2"></i>Update Patient
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
