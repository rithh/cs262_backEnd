<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.header')
</head>

<body>
    <div class="homepage">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            @include('layout.nav')
        </nav>

        <div class="main-contents">
            @yield('contents')
        </div>

        <div class="footer">
            @include('layout.footer')
        </div>
    </div>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="./resources/js/script.js"></script>
</body>
