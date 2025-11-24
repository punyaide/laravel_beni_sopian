<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien - Hospital Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .content-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
        }
        .btn-custom {
            border-radius: 25px;
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.05);
        }
        .table-custom {
            border-radius: 10px;
            overflow: hidden;
        }
        .table-custom thead {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
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
        .filter-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <a href="{{ route('dashboard') }}" class="back-link">
        <i class="fas fa-arrow-left me-2"></i>Back to Dashboard
    </a>

    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="text-center mb-5">
                    <h1 class="display-4 page-title">
                        <i class="fas fa-user-injured me-3"></i>
                        Data Pasien
                    </h1>
                    <p class="lead text-white">Manage patient information and records</p>
                </div>

                <div class="card content-card">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="card-title mb-0">
                                <i class="fas fa-list me-2"></i>Patient List
                            </h3>
                            <a href="{{ route('pasien.create') }}" class="btn btn-success btn-custom">
                                <i class="fas fa-plus me-2"></i>Add Patient
                            </a>
                        </div>

                        <!-- Filter Section -->
                        <div class="filter-card">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="form-label mb-0">
                                        <i class="fas fa-filter me-2"></i>Filter by Hospital:
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <select id="filterRS" class="form-select form-select-lg">
                                        <option value="">-- All Hospitals --</option>
                                        @foreach ($rumahSakit as $rs)
                                            <option value="{{ $rs->id }}">{{ $rs->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <button id="clearFilter" class="btn btn-outline-secondary btn-custom w-100">
                                        <i class="fas fa-times me-2"></i>Clear Filter
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover table-custom" id="tablePasien">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th><i class="fas fa-user me-2"></i>Nama</th>
                                        <th><i class="fas fa-map-marker-alt me-2"></i>Alamat</th>
                                        <th><i class="fas fa-phone me-2"></i>Telepon</th>
                                        <th><i class="fas fa-building me-2"></i>Rumah Sakit</th>
                                        <th class="text-center"><i class="fas fa-cogs me-2"></i>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pasien as $p)
                                    <tr id="row-{{ $p->id }}">
                                        <td class="text-center">{{ $p->id }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>{{ $p->telepon }}</td>
                                        <td>{{ $p->rumahSakit->nama }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('pasien.edit',$p->id) }}" class="btn btn-warning btn-sm btn-custom me-1">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <button class="btn btn-danger btn-sm btn-custom btnDelete" data-id="{{ $p->id }}">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    $("#filterRS").change(function(){
        let id = $(this).val();

        if(id === ""){
            location.reload();
            return;
        }

        $.get("/pasien/filter/" + id, function(res){
            let html = "";
            res.forEach(function(p){
                html += `
                <tr id="row-${p.id}">
                    <td class="text-center">${p.id}</td>
                    <td>${p.nama}</td>
                    <td>${p.alamat}</td>
                    <td>${p.telepon}</td>
                    <td>${p.rumah_sakit.nama}</td>
                    <td class="text-center">
                        <a href="/pasien/${p.id}/edit" class="btn btn-warning btn-sm btn-custom me-1">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <button class="btn btn-danger btn-sm btn-custom btnDelete" data-id="${p.id}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>`;
            });
            $("#tablePasien tbody").html(html);
        });
    });

    $("#clearFilter").click(function(){
        $("#filterRS").val("");
        location.reload();
    });

    $(document).on("click",".btnDelete", function(){
        let id = $(this).data("id");

        if(confirm("Apakah Anda yakin ingin menghapus pasien ini?")) {
            $.ajax({
                url: "/pasien/" + id,
                type: "DELETE",
                data: {_token:"{{ csrf_token() }}"},
                success: function(){
                    $("#row-"+id).fadeOut(300, function(){
                        $(this).remove();
                    });
                },
                error: function(){
                    alert("Error deleting patient. Please try again.");
                }
            });
        }
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
