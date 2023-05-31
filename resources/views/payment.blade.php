@extends('layouts.paymentTemplate')
@section('title', 'Payment')
@section('konten')
    <div class="order-container">
        <div class="order-item">
            <h6><i class="fa-solid fa-receipt"></i> Purchased Items</h6>
            <i class="fa-solid fa-x"></i>
            <img src="{{ asset('image/batik.jpg') }}" class="rounded" class="img-fluid" style="float:left">
            <div class="order-produk">Batik</div>
            <div class="order-status">Rp. 100.000</div>
        </div>
        <div class="order-item">
            <h6><i class="fa-solid fa-receipt"></i> Purchased Items</h6>
            <i class="fa-solid fa-x"></i>
            <img src="{{ asset('image/batik.jpg') }}" class="rounded" class="img-fluid" style="float:left">
            <div class="order-produk">Batik</div>
            <div class="order-status">Rp. 100.000</div>
        </div>
        <div class="order-item">
            <h6><i class="fa-solid fa-receipt"></i> Purchased Items</h6>
            <i class="fa-solid fa-x"></i>
            <img src="{{ asset('image/batik.jpg') }}" class="rounded" class="img-fluid" style="float:left">
            <div class="order-produk">Batik</div>
            <div class="order-status">Rp. 100.000</div>
        </div>

        <div class="order-item">
            <h6><i class="fa-sharp fa-solid fa-truck"></i> Shipping Address</h6>
            <textarea class="form-control" rows="3" id="comment">Shipping Address</textarea>
        </div>
        <div class="order-item">
            <h6><i class="fa-regular fa-credit-card"></i> Payment Method</h6>
            <div class="row">
                <div class="col-lg">
                    <div class="row">
                        <div class="col-lg">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <div class="form-check">
                                        <img src="{{ asset('image/cod.png') }}" alt="cod">
                                        <p class="card-text"> Cash On Delivery(COD) </p>
                                        <div class="tombol">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="codRadio" value="cod">
                                            <label class="form-check-label" for="codRadio">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <div class="form-check">
                                        <div class="qris">
                                            <img src="{{ asset('image/dana.png') }}" alt="dana">
                                            <img src="{{ asset('image/shoppepay.png') }}" alt="shoppepay">
                                            <img src="{{ asset('image/gopay.png') }}" alt="gopay">
                                        </div>
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="codRadio"
                                            value="cod">
                                        <label class="form-check-label" for="codRadio">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg"></div>
            </div>
        </div>
        <div class="order-item">
            <h6>Payment Details</h6>
            <p>Produk <span>Rp.100.000</span></p>
            <p>Total Price <span>Rp.100.000</span></p>

        </div>
    </div>
    <div class="order-total">
        <h6>Total Price </h6>
        <div class="order-harga">Rp. 100.000</div>
    </div>
    <div class="pay-container">
        <div id="confirm-button">
            <button type="button" class="btn btn-danger btn-lg" style="float:right"><i
                    class="fa-sharp fa-regular fa-circle-check"></i>
                Pay</button>
        </div>

    </div>
@endsection
