@extends('layouts.app')
@section('title')

@endsection
@section('content')
    <div class="row g-5 g-xl-10 mb-xl-10">
        <div class="col-12">
            <x-card title="Ödeme Almak için bu linki müşterilerinize gönderin" footer="" actions="">
                <div class="card card-bordered">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="input-group">
                                <!--begin::Input-->
                                <input id="kt_clipboard_1" type="text" class="form-control" readonly value="{{ url('/') }}/{{ request()->user()->uuid }}" />
                                <!--end::Input-->

                                <!--begin::Button-->
                                <button class="btn btn-light-primary" data-clipboard-target="#kt_clipboard_1">
                                    Kopyala
                                </button>
                                <!--end::Button-->
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-md-5">
            <div class="card card-flush h-md-100px mb-25 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ $today_total }} TL</span>
                        </div>
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Bugün Yapılan Tahsilat</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-md-5">
            <!--begin::Card widget 4-->
            <div class="card card-flush h-md-100px mb-25 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ $total }} TL</span>
                        </div>
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Toplam Tahsilat</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
            </div>
        </div>
        <div class="col-12">
            <x-card title="Son Tahsilatlar" footer="" actions="">
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
                    <tbody>
                        @foreach($last_process as $process)
                            <tr>
                                <td>{{ $process->uuid }}</td>
                                <td>{{ $process->name }}</td>
                                @if($process->company->admin)
                                    <td>{{ $process->company->company_name }} <small>({{ $process->company_name }})</small></td>
                                @else
                                    <td>{{ $process->company_name }}</td>
                                @endif
                                <td>{{ $process->amount }}</td>
                                <td>
                                    @if($process->status == 1)
                                        Yarıda Kalmış
                                    @elseif($process->status == 2)
                                        Başarılı
                                    @else
                                        Başarısız
                                    @endif
                                </td>
                                <td>{{ $process->updated_at->format('d.m.y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-card>
        </div>
    </div>
@endsection
@section('styles')

@endsection
@section('scripts')
    <script>
        // Select elements
        const target = document.getElementById('kt_clipboard_1');
        const button = target.nextElementSibling;

        // Init clipboard -- for more info, please read the offical documentation: https://clipboardjs.com/
        var clipboard = new ClipboardJS(button, {
            target: target,
            text: function() {
                return target.value;
            }
        });

        // Success action handler
        clipboard.on('success', function(e) {
            const currentLabel = button.innerHTML;

            // Exit label update when already in progress
            if(button.innerHTML === 'Kopyalandı!'){
                return;
            }

            // Update button label
            button.innerHTML = 'Kopyalandı!';

            // Revert button label after 3 seconds
            setTimeout(function(){
                button.innerHTML = currentLabel;
            }, 3000)
        });


    </script>
@endsection