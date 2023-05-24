@extends('layouts.paymentTemplate')

<style>
    .card .qris img {

        margin-left: 20px;
        height: 60px;
    }

    .order-item span {
        float: right;
    }

    .text-center img {
        height: 160px;
        padding-bottom: 20px;
        margin-top: -20px;
    }
</style>

@section('konten')
    <div class="order-container">


        <div class="order-item">
            <h6><i class="fa-solid fa-receipt"></i> Purchased Items</h6>
            <i class="fa-solid fa-x"></i>
            <img src="{{ asset('image/batik.jpg') }}" class="rounded" class="img-fluid" style="float:left">
            <div class="order-produk">Batik</div>
            <div class="order-status">Rp. 100.000</div>

        </div>

        <div class="order-item 2" style="height:37%;">
            <h6><i class="fa-regular fa-credit-card"></i> Payment Method</h6>
            <div class="row">
                <div class="col-lg">
                    <div class="card bg-light" style="width:50%;height:75%;margin-left:25%;">
                        <div class="card-body text-center">
                            <div class="form-check">
                                <div class="qris">
                                    <img src="{{ asset('image/dana.png') }}" alt="dana">
                                    <img src="{{ asset('image/shoppepay.png') }}" alt="shoppepay">
                                    <img src="{{ asset('image/gopay.png') }}" alt="gopay">
                                </div>
                            </div>
                        </div>
                        <div class="text-center" style="margin:3% auto 2% auto">
                            <img src="{{ asset('image/barcode.png') }}" style="height:100% ">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="order-item">
            <h6>Payment Details</h6>
            <p>Produk <span>Rp.100.000</span></p>
            <p>Total Price <span>Rp.100.000</span></p>

        </div>
        <div class="pay-container"style="margin-top:1.5%">
            <div id="confirm-button">
                <button type="button" class="btn btn-danger btn-lg" style="float:right"><i
                        class="fa-sharp fa-regular fa-circle-check"></i>
                    Pay</button>
            </div>

        </div>

    </div>
@endsection
