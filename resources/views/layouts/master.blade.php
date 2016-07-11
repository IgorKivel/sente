<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Sente</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="apple-touch-icon" href="apple-touch-icon.png">-->

    <link rel="stylesheet" href="css/normalize.min.css">

    <link rel="stylesheet" type="text/css" href="../dist/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="../css/semui-default.css">
    <!--<link rel="stylesheet" type="text/css" href="../css/custom.css">-->

</head>
<body>

<header>
    {{--@include('header.header')--}}
</header>

<section>
    {{--@include('errors.errmsg')--}}
    @yield('content')
</section>

<footer>
    {{--@include('footer.footer')--}}
    {{--@include('footer_scripts.footer')--}}
</footer>

</body>
</html>