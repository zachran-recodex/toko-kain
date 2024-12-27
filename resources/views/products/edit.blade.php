@extends('layouts.dashboard')

@php
    $title = 'Produk';
    $subTitle = 'Produk';
@endphp

@section('content')
    <div class="row gy-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Ubah Produk</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row gy-3">
                            <div class="col-6">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $product->name ?? '' }}">
                            </div>
                            <div class="col-6">
                                <label for="price_per_meter" class="form-label">Harga per Meter</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-base"> Rp </span>
                                    <input type="number" name="price_per_meter" id="price_per_meter" class="form-control"
                                        value="{{ $product->price_per_meter ?? '' }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary-600">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- card end -->
        </div>
    </div>
@endsection
