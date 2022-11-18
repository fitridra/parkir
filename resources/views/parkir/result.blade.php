<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Parkir</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Parkir</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">From Check In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/keluar">From Check Out</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/result">Report</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <h1>Page Report</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nomor Polisi</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Keluar</th>
                    <th scope="col">Jenis Kendaraan</th>
                    <th scope="col">Biaya Parkir</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach($result as $rs)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$rs->no_pol}}</td>
                    <td>{{$rs->created_at}}</td>
                    <td>{{$rs->updated_at}}</td>
                    <td>{{$rs->jenis_kendaraan}}</td>
                    <td>{{$rs->biaya}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>