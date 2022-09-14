@extends('layouts.app')
@section('title')
    Cari Oluştur
@endsection
@section('content')
    <div class="row">
        <x-card title="Yeni Cari Oluştur" footer="" actions="">
            <form action="{{ route('admin.users.store') }}" method="post">
                @csrf
                <div class="mb-10">
                    <label for="" class="required form-label">Cari Ünvanı</label>
                    <input type="text" class="form-control" name="company_name" autocomplete="new-company"/>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-10">
                            <label for="" class="required form-label">Vergi Numarası</label>
                            <input type="text" class="form-control" name="tax_number" autocomplete="new-tax"/>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-10">
                            <label for="" class="required form-label">Logo Cari Kodu</label>
                            <input type="text" class="form-control" name="logo_code" autocomplete="new-logo"/>
                        </div>
                    </div>
                </div>
                <div class="mb-10">
                    <label for="" class="required form-label">Firma Adresi</label>
                    <textarea class="form-control" rows="3" name="address" autocomplete="new-address"></textarea>
                </div>
                <div class="mb-10">
                    <label for="" class="required form-label">Yetkili Adı Soyadı</label>
                    <input type="text" class="form-control" name="name" autocomplete="new-name"/>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-10">
                            <label for="" class="required form-label">Yetkili Telefon</label>
                            <input type="text" class="form-control" name="phone" autocomplete="new-phone"/>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-10">
                            <label for="" class="required form-label">Yetkili E-Posta</label>
                            <input type="text" class="form-control" name="email" autocomplete="new-email"/>
                        </div>
                    </div>
                </div>
                <div data-kt-buttons="true" class="row">
                    <div class="col-6">
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5 active">
                            <div class="d-flex align-items-center me-2">
                                <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                    <input class="form-check-input" type="radio" name="installment" checked value="1"/>
                                </div>
                                <div class="flex-grow-1">
                                    <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                        Taksit Yapabilir
                                    </h2>
                                    <div class="fw-semibold opacity-50">
                                        4 Taksitli ödeme yapabilir
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-6">
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5">
                            <div class="d-flex align-items-center me-2">
                                <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                    <input class="form-check-input" type="radio" name="installment" value="0"/>
                                </div>
                                <div class="flex-grow-1">
                                    <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                        Taksit Yapamaz
                                    </h2>
                                    <div class="fw-semibold opacity-50">
                                        Sadece Tek Çekim Ödeme Yapabilir
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="mb-10">
                    <label for="" class="required form-label">Sistem Giriş Şifresi</label>
                    <input type="text" class="form-control" name="password" autocomplete="new-password"/>
                </div>
                <hr class="mb-10">
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </x-card>
    </div>
@endsection
@section('styles')

@endsection
@section('scripts')

@endsection