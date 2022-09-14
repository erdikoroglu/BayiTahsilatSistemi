@extends('layouts.app')
@section('title')
    Ayarlarım
@endsection
@section('content')
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <x-card title="Ayarlarım" footer="" actions="">
            <form action="{{ route('admin.update-profile',request()->user()) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-10">
                    <div class="col-8">
                        <div class="mb-10">
                            <label for="" class="required form-label">Ödeme Ekranı Logo</label>
                            <input type="file" class="form-control image-input" name="pay_logo"/>
                        </div>
                    </div>
                    <div class="col-4">
                        <img src="{{ storage_link(request()->user()->pay_logo) }}" alt="" class="img-fluid img-thumbnail p-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="mb-10">
                            <label for="" class="required form-label">Tahsilat Makbuzu Logo</label>
                            <input type="file" class="form-control image-input" name="receipt_logo"/>
                        </div>
                    </div>
                    <div class="col-4">
                        <img src="{{ storage_link(request()->user()->receipt_logo) }}" alt="" class="img-fluid img-thumbnail p-3">
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary float-start">Kaydet</button>
            </form>
        </x-card>
    </div>
@endsection
@section('styles')

@endsection
@section('scripts')

@endsection