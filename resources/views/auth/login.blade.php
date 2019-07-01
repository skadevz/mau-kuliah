<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MAU KULIAH</title>
    <link rel="icon" href="{{ asset('assets/img/ico.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}" />
</head>
<body class="text-center">
    <form class="form-signin" action="{{ route('post_login') }}" method="post">
        @csrf
        <h3>
            <i class="fa fa-bank" style="font-size: 3em;"></i>
        </h3>
        <h1 class="h3 mb-3 font-weight-normal">Login to MauKuliah</h1>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username" required>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">© <?php echo date('Y') ?></p>
    </form>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
    @include('sweet::alert')
</body>
</html>
