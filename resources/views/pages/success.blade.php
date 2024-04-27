<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thanks | Pointsebelas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
        @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
        * {
            font-family: "Poppins", sans-serif;
        }

        .btn-go-shopping {
            display: inline-block;
            padding: 0.75rem 1rem;
            border: 2px solid #ffb524 !important;
            border-radius: 9999px;
            color: #FE6F0F !important;
            text-align: center;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.3s ease;
            width: 100%;
            max-width: 12rem;
        }

        .btn-go-shopping:hover {
            background-color: #ffb524;
        }

    </style>
    <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
    <script>
        var countdown = 10;
        var countdownInterval = setInterval(function () {
            countdown--;

            document.getElementById('countdown').innerText = countdown;

            if (countdown <= 0) {
                clearInterval(countdownInterval);
                window.location.href = "{{ route('home') }}";
            }
        }, 1000);
    </script>
</head>

<body>
    <header class="site-header" id="header">
        <i class="fa fa-check main-content__checkmark" id="checkmark" style="color: #FE6F0F !important"></i>
    </header>

    <div class="main-content">
        <h1 class="site-header__title" data-lead-id="site-header-title">TERIMA KASIH!</h1>
        <p class="main-content__body" data-lead-id="main-content-body">Sudah Mendonasi, Semoga Kamu Sehat Selalu...</p>
        <br>
        <a href="{{route('donate')}}" class="btn-go-shopping ">Go To Donate</a>
    </div>

    <footer class="site-footer" id="footer">
        <p class="site-footer__fineprint" data-lead-id="main-content-body">Redirecting in <span id="countdown">5</span> seconds...</p>
    </footer>
</body>

</html>