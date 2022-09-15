@extends('layouts.app')
@section('title')
    Cari Listesi
@endsection
@section('content')
    <x-card title="Cari Listesi" footer="">
        <x-slot:actions>
            <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-primary">Yeni Cari EKle</a>
        </x-slot:actions>
        <table class="table align-middle table-row-dashed table-striped fs-6 gy-5" id="usersTable">
            <thead>
            <tr>
                <th>Logo Kodu</th>
                <th>Firma Ünvanı</th>
                <th>Yetkili</th>
                <th>Link</th>
                <th>Taksitli İşlem</th>
                <th>Aksiyon</th>
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
            ajax: "{{ route('admin.users.index') }}",
            columns: [
                { data: "logo_code", sortable: true},
                { data: "company_name", sortable: true},
                { data: "name", sortable: true},
                { data: "link", sortable: true},
                { data: "installment", sortable: true},
                { data: "action", sortable: false},
            ]
        })
    </script>
@endsection