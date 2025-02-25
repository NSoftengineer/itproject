<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'CEIT' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@100..900&display=swap" rel="stylesheet">
    <style>
        html,
        body {
            font-family: "Noto Sans Lao" !important;
            font-optical-sizing: auto;
            font-style: normal;
        }

        @media (min-width: 768px) {

            .w-responsive {
                width: 50%;
            }
        }

        @media (min-width: 992px) {

            .w-responsive {
                width: 50%;
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex">
                    <li class="nav-item navbar-brand">
                        <a class="nav-link active" aria-current="page" href="#">
                            ລະບົບການຈັດການເກັບຂໍ້ມູນກວດລະບຽບ
                            ແລະ ອອກແຮງງານຂອງພາກວິຊາ ceit
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li> --}}
                </ul>
                {{-- <a class="navbar-brand" href="#">ລະບົບການຈັດການເກັບຂໍ້ມູນກວດລະບຽບ
                    ແລະ ອອກແຮງງານຂອງພາກວິຊາ ceit</a> --}}
                <span class="navbar-text">
                    <button type="button" class="btn btn-primary">ຊື່ ນາມສະກຸນ</button>
                    <button type="button" class="btn btn-danger">ອອກຈາກລະບົບ</button>
                </span>
            </div>
        </div>
    </nav>
    <div class="pt-5">
        {{ $slot }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
