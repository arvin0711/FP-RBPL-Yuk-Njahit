<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZEZv3v1qz7r2KLrGJw7O8" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e40f85b6c6.js" crossorigin="anonymous"></script>
    <script></script>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom CSS */



        .container h1 {
            font-style: normal;
            font-weight: bold;
            color: #E01515;
            margin-top: 17%;
            margin-bottom: -9%;
            font-size: 60px;

        }


        .text-center {
            margin: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            /* Mengatur tinggi div agar gambar berada di tengah vertikal */
        }

        .text-center img {
            margin-top: -2%;
            margin-bottom: -5%;
            height: 60%;
        }

        #next-button {
            position: fixed;
            bottom: 20%;
            left: 50%;
            transform: translate(-50%, 50%);
        }

        #next-button button {
            font-size: 24px;
            padding: 8px 8px;
            padding-right: 70px;
            padding-left: 70px;
        }

        .container h2 {
            font-style: italic;
            font-weight: bold;
            color: #ea3333;

        }
    </style>

</head>

<body>

    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->
    @yield('konten')

    <!-- bagian footer -->


</body>


</html>
