<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Expense</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <div class="bg ">
            <ul class="nav justify-content-end pb-2" style="background-color: #343a40;">
                @auth
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn btn-primary btn-sm mr-1 mt-1">
                                Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <button class="btn btn-info btn-sm mr-1 mt-1">
                            <a href="/login">LogIn</a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-info btn-sm mr-1 mt-1">
                            <a href="/register">Register</a>
                        </button>
                    </li>
                @endauth
            </ul>
        </div>
    </header>
    {{ $slot }}
</body>

</html>
