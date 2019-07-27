<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NewSite {{isset($page) ? $page->title : ''}}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        .postHeader{
            display:flex;
            justify-content: space-between;
            padding:5px;
            background-color: #6c757d;
            color: beige;
            font-weight:bold;
        }

        .postConteiner{
            width:90%;
            margin:auto;
            border:1px solid silver;
            margin-bottom: 30px;
            overflow:auto;
        }

        .postBody{
            padding:5px;
            text-align: justify;
            overflow:auto;
        }

        .postImage{
            width:100px;
            margin: 10px;
        }

        .postAdminBar{
            float: right;
            border-top: 1px solid silver;
            border-left: 1px solid silver;
            padding: 3px;
        }

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 0px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 0px;
        }
    </style>
</head>
<body>

