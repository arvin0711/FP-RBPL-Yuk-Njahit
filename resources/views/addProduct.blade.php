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
            max-height: 45%;
            margin-top: -15px;
            padding: 10px;

        }

        .container .text-center {
            margin: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            text-align: left;

            /* Mengatur tinggi div agar gambar berada di tengah vertikal */
        }

        .text-center img {
            margin-top: -25px;
            height: 250px;
        }



        .order-item {
            width: 100%;
            height: 30%;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
            background-color: #F1EAEA;
        }




        .detail-container {
            text-align: left;
        }



        .footer {
            padding-top: 12px;
            padding-bottom: 12px;
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

        }

        #confirm-button {
            margin-right: 20px;
        }

        #confirm-button button {
            font-size: 15px;
            padding: 2px 25px 2px 25px;
        }
    </style>
</head>

<body>
    <header>

        <div class="jumbotron">
            <h3>Add Product</h3>
            <h6>
            </h6>
        </div>



    </header>
    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->


    <div class="order-container">
        <div class="order-item" style="height:10%;width:40%;margin:0% 30% 0.5% 30%">
            <div class="container">
                <div class="text-center">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">
                        Upload your photo (reference)
                    </button>
                    <span style="margin-lefft:2%;margin-top:20px"><i class="fa-solid fa-upload "></i></span>
                </div>
                <!-- The Modal -->

                <div class="modal fade" id="myModal" style="margin-top:15%">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">upload your product here</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <input type="file" id="myfile" name="myfile"><br><br>
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="order-container">
        <div class="order-item" style="height:80%;width:80%;margin:3% 10% 5% 10%">
            <div class="row">
                <div class="col">
                    <form>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label" style="white-space: nowrap;">Name of
                                Product</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="name"
                                    placeholder="Batik Tulis Pekalongan" style="width:90%;margin-left:10%">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label"
                                style="white-space: nowrap;">Description</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="5" id="comment" style="width:90%;margin-left:10%">Description</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label"
                                style="white-space: nowrap;">Consumer</label>
                            <div class="col-md-10">

                                <div class="dropdown">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-toggle="dropdown" style="width:90%;margin-left:10%">
                                        Pria
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Pria</a>
                                        <a class="dropdown-item" href="#">Wanita</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label" style="white-space: nowrap;">Tailor
                                Location</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="name" placeholder="Surabaya"
                                    style="width:90%;margin-left:10%">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <form>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label" style="white-space: nowrap;">Tailor
                                Shop</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="name" placeholder="Ami-Tailor">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label"
                                style="white-space: nowrap;">Fabric</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="name" placeholder="Katun">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label"
                                style="white-space: nowrap;">Color</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="name"
                                    placeholder="Arvin Azmi Sava">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label"
                                style="white-space: nowrap;">Price</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="name" placeholder="Rp. 250.000">
                            </div>
                        </div>

                    </form>
                    <br>
                    <br>
                    <br>
                    <div id="confirm-button">
                        <button type="button" class="btn btn-danger btn-lg" style="float:right"> <i
                                class="fa-regular fa-pen-to-square"></i> Confirm</button>
                    </div>

                </div>
            </div>
        </div>













    </div>



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
                <img src="{{ asset('image/account.png') }}" alt="My Account">
                <br>
                <span>My Account</span>
            </div>
        </div>




    </div>

    </div>
</body>

</html>
