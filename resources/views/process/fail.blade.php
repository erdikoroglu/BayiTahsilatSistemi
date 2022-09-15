@extends('layouts.app')
@section('title')
    Başarısız Ödeme Listesi
@endsection
@section('content')
    <x-card title="Başarısız Ödeme Listesi" footer="" actions="">
        <table class="table align-middle table-row-dashed table-striped fs-6 gy-5" id="usersTable">
            <thead>
            <tr>
                <th>Tahsilat Kodu</th>
                <th>Ad Soyad</th>
                <th>Firma</th>
                <th>Tutar</th>
                <th>Durum</th>
                <th>Tarih/Saat</th>
            </tr>
            </thead>
        </table>
    </x-card>
@endsection
@section('styles')

@endsection
@section('scripts')
    <script>
        $("#usersTable").dataTable({
            searchDelay: 500,
            processing: true,
            serverSide: true,
            stateSave: true,
            ajax: "{{ route('admin.process.fails') }}",
            columns: [
                { data: "uuid", sortable: true},
                { data: "name", sortable: true},
                { data: "company_name", sortable: true},
                { data: "amount", sortable: true},
                { data: "status", sortable: true},
                { data: "updated_at", sortable: false},
            ]
        })
    </script>
@endsection