<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Order - Online Store</title>
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
        body {
            background-color: #FFAAAA;
            overflow: hidden;
        }

        .circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: red;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
        }

        .letter {
            font-size: 20px;
            color: white;
            padding: 15px;
            font-weight: bold;
        }

        .container-badge {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 90px;
            margin-left: -170px;
        }

        .badge-item {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }

        .badge-item .badge {
            padding-left: 50px;
            padding-right: 50px;
            font-size: 40px;
            font-weight: normal;
        }







        .order-container img {
            margin-top: 70px;
            margin-left: 35%;

            height: 45%;
        }

        .jumbotron {
            padding: 2px;
            background-color: #E01515;
            font-size: 5px;
            color: white;
            text-align: center;
            margin: 5px;

        }

        .jumbotron h3 {
            padding: 10px;
        }

        .nav-container {
            font-size: 15px;
            text-align: center;
            right: 20%;

            margin: 10px 10px 6px 70px;
        }



        .nav-container ul li a {
            padding: 7px;
            border: 1px #ccc solid;
            color: white;
            font-weight: semi-bold;
            /* Menambahkan jarak dengan properti margin */
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

        /* Custom CSS untuk memperbesar ukuran radio button */
        .form-check-input[type="radio"] {
            width: 30px;
            height: 30px;
            border: solid black;
            margin-left: 40%;
            margin-top: 2%
        }

        .form-check-label {
            display: flex;


        }

        .form-check-label h6 {
            margin-left: 12em;
            margin-top: 4%;
        }
    </style>

    </style>

</head>

<body>
    <header>

        <div class="jumbotron">

            <h3>View Customer Measurement</h3>
        </div>


    </header>
    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->


    <div class="order-container">
        <div class="row">
            <div class="col-xl">
                <img src="{{ asset('image/measurement.png') }}" alt="measurement">
            </div>
            <div class="col-xl">
                <div class="container-badge">
                    <div class="badge-item">
                        <div class="circle">
                            <span class="letter">A</span>
                        </div>
                        <span class="badge badge-pill badge-light">60 cm</span>
                    </div>
                    <div class="badge-item">
                        <div class="circle">
                            <span class="letter">B</span>
                        </div>
                        <span class="badge badge-pill badge-light">60 cm</span>
                    </div>
                    <div class="badge-item">
                        <div class="circle">
                            <span class="letter">C</span>
                        </div>
                        <span class="badge badge-pill badge-light">60 cm</span>
                    </div>
                    <div class="badge-item">
                        <div class="circle">
                            <span class="letter">D</span>
                        </div>
                        <span class="badge badge-pill badge-light">60 cm</span>
                    </div>
                </div>


            </div>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio"> <span>
                                        <h6>On Process </h6>
                                    </span>
                                </label>
                            </div>

                        </div>
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio"> <span>
                                        <h6>Finished</h6>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-danger"
                        style="padding:5px 100px 5px 100px; margin:1% auto auto 1%">Confirm</button>
                </div>
            </div>

        </div>








        <!-- bagian footer -->




</body>


</html>
