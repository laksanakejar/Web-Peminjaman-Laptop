<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Peminjaman Laptop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="shortcut icon" href="{{asset('/img/gura.jpg')}}" type="image/x-icon">
</head>

<body>
    <header>
        <a href="#" class="logo text text-decoration-none">Peminjaman<span>Laptop</span></a>

        <ul class="navlist">
            <li><a href="/" class="text-decoration-none">Beranda</a></li>
            <li><a href="/data" class="text-decoration-none">Peminjaman</a></li>
        </ul>

        <div class="icons">
            <a href="/create" class="text-decoration-none"><i class="fa-sharp fa-solid fa-circle-plus text-white "></i></a>
        </div>
    </header>
    @yield('container')

    <!----custom js link--->
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
