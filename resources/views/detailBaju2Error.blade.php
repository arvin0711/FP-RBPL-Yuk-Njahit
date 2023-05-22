@extends('layouts.masterTemplate')

@include('partial.header')

@section('konten')
    <div class="order-container" style="height:35%;margin-top:-2%">
        <div class="order-item">
            <div class="container">
                <div class="text-center">
                    <img src="{{ asset('image/batik.jpg') }}" class="rounded" class="img-fluid" style="float:left">
                </div>
            </div>
        </div>
    </div>

    <div class="order-container" style="height:65%;margin-botttom:4%">
        <div class="order-item">
            <div class="detail-container">
                <div class="order-id">Jaket Hitam Polos
                </div>
                <div class="order-harga">Rp. 100.000</div>
                <div class="rating">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <br>
                <textarea class="form-control" rows="3" id="comment" style="width:50%">leave message and request in detail</textarea>
                <div style="width:20%;margin-top:15px;margin-bottom:-2%>
            <button type="button"
                    class="btn btn-secondary" data-toggle="modal" data-target="#myModal">
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
                                <h4 class="modal-title">upload file here</h4>
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
                <div style="margin-top:5px">
                    <button type="button" class="btn btn-primary" style="margin-top:1%;padding: 5px 6.5% 0.5% 6.5%">Detail
                        Ukuran</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('partial.footer3')
