<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZEZv3v1qz7r2KLrGJw7O8" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e40f85b6c6.js" crossorigin="anonymous"></script>

    <script>
        // Menggunakan jQuery
        $(document).ready(function() {
            $('.rating i').click(function() {
                $(this).removeClass('far').addClass('fas');
                $(this).prevAll().removeClass('far').addClass('fas');
                $(this).nextAll().removeClass('fas').addClass('far');
            });
        });
    </script>


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


        .order-container {
            max-width: 100%;


            margin: auto;
            padding: 20px;
            margin-bottom: 0px;


        }

        .pay-container {
            max-width: 100%;
            margin-top: -1%;
            margin-bottom: 2%;
            padding: 20px;

        }





        .order-item {
            margin-bottom: 10px;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
            position: relative;
            height: 135px;
        }

        .order-item h6 {
            margin-top: -15px;
        }

        .order-item .fa-x {
            float: right;
            margin-top: -20px;
        }


        .order-item .order-produk {
            font-size: 35px;
            font-weight: semi-bold;
            margin-bottom: -10px;
        }

        .order-item img {
            max-width: 100%;
            max-height: 200px;
            object-fit: contain;
            height: 80px;

        }


        .order-item .order-status {
            font-size: 15px;
            font-weight: normal;
            margin-bottom: 15px;
            font-style: normal;
            margin-top: 5px;

        }

        .footer {
            padding-top: 5px;

            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 8%;
            background-color: #f2ebeb;
            text-align: center;

        }

        .footer .row img {
            height: 25px;
            width: auto;
        }



        .jumbotron {
            padding: 5px;
            background-color: #E01515;
            font-size: 5px;
            color: white;
            text-align: center;
            margin-bottom: 0px;
        }

        .jumbotron i {
            float: left;
            height: 80px;
            padding: 20px;

        }

        .order-harga {

            font-size: 15px;
            font-weight: normal;
            margin-bottom: 2px;
            color: white;
        }

        .order-total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2px;
            background-color: #e28b8b;
            color: black;
            margin-top: -2%;
            position: relative;
            bottom: 10%;
            left: 0;
            right: 0;

        }

        .order-total h6 {
            margin: 0;
            margin-left: 20px;
            color: black;
            padding: 5px;


        }

        .order-total .order-harga {
            margin: 0;
            margin-right: 40px;
            color: black;
            font-weight: semi-bold;
        }

        . #confirm-button {
            position: absolute;
            bottom: 0;
            right: 0;



        }

        #confirm-button button {
            font-size: 15px;
            padding: 2px 25px 2px 25px;
        }

        .card img {
            height: 25px;
            width: auto;
            float: left;
            margin-left: 10px;
            margin-right: auto;
        }



        .card .custom-control {
            float: right;
            margin-top: -30px;
            margin-right: -10px;
        }

        .card-body {
            margin-left: -40px;


        }

        .card {
            height: 70px;
        }

        .card .tombol {
            float: right;
            margin-top: -37px;
        }

        .card .qris img {
            margin-right: 20px;
            margin-left: 20px;
        }

        .order-item span {
            float: right;
        }
    </style>
</head>

<body>
    <header>

        <div class="jumbotron">
            <i class="fa-solid fa-arrow-left fa-2xl"></i>
            <h3>Payment</h3>

        </div>




    </header>
    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->
    @yield('konten')

</body>

</html>
