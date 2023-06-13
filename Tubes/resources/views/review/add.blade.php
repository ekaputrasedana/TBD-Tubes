@extends('layout.app')

@section('title','Add Review')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processAddReview') }}" method="POST">
                @csrf

                <h1 class="mb-3 text-center">Add Review</h1>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="ID Customer" id="ID Customer"
                        name="ID CCustomer" required>
                    <label for="floatingInput">ID Customer</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="ID Pembelian" id="ID Pembelian"
                        name="ID Pembelian" required>
                    <label for="floatingInput">ID Pembelian</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="review" id="review" name="review" required>
                    <label for="floatingInput">Review</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="rating" id="rating" name="rating" required>
                    <label for="floatingInput">Rating</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection