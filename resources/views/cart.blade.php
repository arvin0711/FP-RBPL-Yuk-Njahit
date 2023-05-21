<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Order - Online Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZEZv3v1qz7r2KLrGJw7O8" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e40f85b6c6.js" crossorigin="anonymous"></script>

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
        }


        .order-item {
            margin-bottom: 20px;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
        }

        .order-item .order-id {
            font-size: 35px;
            font-weight: semi-bold;
            margin-bottom: 5px;
        }

        .order-item img {
            max-width: 100%;
            max-height: 200px;
            object-fit: contain;
            height: 100px;

        }


        .order-item .order-total {
            font-size: 25px;
            font-weight: normal;
            margin-bottom: 10px;
        }

        .keterangan {
            margin: 1em;
        }



        #checkout-button {
            position: fixed;
            bottom: 7%;
            right: 0;
            margin: 20px;


        }


        .footer {
            padding-top: 12px;
            padding-bottom: 12px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 7%;
            background-color: #f2ebeb;
            text-align: center;

        }



        .jumbotron {
            padding: 5px;
            background-color: #E01515;
            font-size: 5px;
            color: white;
            text-align: center;

        }
    </style>
</head>

<body>
    <header>

        <div class="jumbotron">
            <h3>Shopping Cart</h3>
        </div>



    </header>
    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->


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
        <button type="button" class="btn btn-danger btn-lg" style="float:right">Checkout</button>
    </div>


    <!-- bagian footer -->


    <div class="footer">



        <div class="row">
            <div class="col-md">
                <i class="fas fa-home"></i>
                <br>
                <span>Home</span>
            </div>
            <div class="col-md">
                <i class="fas fa-shopping-cart"></i>
                <br>
                <span>Cart</span>
            </div>
            <div class="col-md">
                <i class="fas fa-sharp fa-regular fa-receipt"></i>
                <br>
                <span>My Order</span>
            </div>
            <div class="col-md">
                <i class="fas fa-shopping-cart"></i>
                <br>
                <span>My Account</span>
            </div>
        </div>


    </div>

    </div>
</body>

</html>
