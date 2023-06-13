@extends('layout.app')

@section('title','Edit Detail Pembelian')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processEditDetailPembelian') }}" method="POST">
                @csrf

                <h1 class="mb-3 text-center">Edit Detail Pembelian</h1>

                <input type="hidden" id="id" name="id" value="{{ $user->id }}">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="nama produk" id="nama produk"
                        name="nama produk" value="{{ $user->nama produk}}" required>
                    <label for="floatingInput">Nama Produk</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="jumlah yang dibeli" id="jumlah yang dibeli"
                        name="jumlah yang dibeli" value="{{ $user->jumlah yang dibeli}}" required>
                    <label for="floatingInput">Jumlah Yang Dibeli</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="sub total" id="sub total" name="sub total"
                        value="{{ $user->sub total }}" required>
                    <label for="floatingInput">Sub Total</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="ongkos kirim" id="ongkos kirim"
                        name="ongkos kirim" value="{{ $user->ongkos kirim }}" required>
                    <label for="floatingInput">Ongkos Kirim</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection