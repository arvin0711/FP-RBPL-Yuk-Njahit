<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Laravel #8 : Sistem Template Blade Laravel</title>

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
            max-width:
                100%;
            margin:
                auto;
            padding:
                20px;
        }

        .order-item {
            margin-bottom:
                20px;
            padding:
                20px;
            border:
                2px solid #ddd;
            border-radius:
                5px;
        }

        .order-item .order-id {
            font-size:
                35px;
            font-weight:
                semi-bold;
            margin-bottom:
                5px;
        }

        .order-item img {
            max-width:
                100%;
            max-height:
                200px;
            object-fit:
                contain;
            height:
                100px;
        }

        .order-item .order-total {
            font-size:
                25px;
            font-weight:
                normal;
            margin-bottom:
                10px;
        }

        .keterangan {
            margin:
                1em;
        }

        #checkout-button {
            position:
                fixed;
            bottom:
                5%;
            right:
                0;
            margin:
                20px;
        }

        .footer {
            padding-top:
                12px;
            padding-bottom:
                12px;
            position:
                fixed;
            left:
                0;
            bottom:
                0;
            width:
                100%;
            background-color:
                #f2ebeb;
            text-align:
                center;
        }

        .jumbotron {
            padding:
                5px;
            background-color:
                #dc3545;
            font-size:
                5px;
            color:
                white;
            text-align:
                center;
        }
    </style>
</head>

<body>
    <header>
        @yield('headerku')
        <div class="jumbotron">
            <h3>Shopping Cart</h3>
        </div>


    </header>
    <!-- bagian judul halaman blog -->
    <h3> @yield('judul_halaman') </h3>

    <!-- bagian konten blog -->
    @yield('konten')

    <div class="order-container">
        <h5>Purchased Items</h5>
        <div class="order-item">
            <img src="{{ asset('image/jakethitam.jpg') }}" class="rounded" class="img-fluid" style="float:left">

            <div class="order-id">Jaket Hitam Polos</div>
            <div class="order-total">Rp. 100.000</div>

        </div>
        <div class="order-item">
            <img src="{{ asset('image/jakethitam.jpg') }}" class="rounded" class="img-fluid" style="float:left">

            <div class="order-id">Jaket Hitam Polos</div>
            <div class="order-total">Rp. 100.000</div>

        </div>


    </div>


    <div id="checkout-button">
        <button type="button" class="btn btn-danger" style="float:right">Checkout</button>
    </div>


    <!-- bagian footer -->
    @yield('footer')

    <div class="footer">



        <div class="row">
            <div class="col-md">
                <i class="fas fa-home"></i>
            </div>
            <div class="col-md">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="col-md">
                <i class="fas fa-sharp fa-regular fa-receipt"></i>
            </div>
            <div class="col-md">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>


    </div>

    </div>
</body>

</html>
