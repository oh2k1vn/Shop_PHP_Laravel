<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    @yield('css')
</head>

<body>
    @include('includes.sidebar')

   

    <div class="main_admin">
        @yield('content')
    </div>

    @yield('js')
    <script>
      var a = document.querySelectorAll(".sidebar_menu a");
            for (var i = 0, length = a.length; i < length; i++) {
              a[i].onclick = function() {
                var b = document.querySelector(".sidebar_menu li.active");
                if (b) b.classList.remove("active");
                this.parentNode.classList.add('active');
              };
            }
    </script>
</body>

</html>
