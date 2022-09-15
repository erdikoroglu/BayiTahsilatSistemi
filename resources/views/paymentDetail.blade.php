<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="{{ url()->current() }}"/>
    <title>Tahsilat Makbuzu</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="app-blank app-blank">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
<!--end::Theme mode setup on page load-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Header-->
        <!--end::Header-->
        <!--begin::Body-->
        <div class="scroll-y flex-column-fluid px-10 py-10" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header_nav" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true" style="background-color:#D5D9E2; --kt-scrollbar-color: #d9d0cc; --kt-scrollbar-hover-color: #d9d0cc">
            <!--begin::Email template-->
            <style>html,body { padding:0; margin:0; font-family: Inter, Helvetica, "sans-serif"; } a:hover { color: #009ef7; }</style>
            <div id="#kt_app_body_content" style="background-color:#D5D9E2; font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
                <div style="background-color:#ffffff; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 600px;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto" style="border-collapse:collapse">
                        <tbody>
                            <tr>
                                <td align="center" valign="center" style="text-align:center; padding-bottom: 10px">
                                    <!--begin:Email content-->
                                    <div style="text-align:center; margin:0 60px 34px 60px">
                                        <!--begin:Logo-->
                                        <div style="margin-bottom: 10px">
                                            <a href="https://pay.ankamuh.com/{{ $user->uuid }}" rel="noopener" target="_blank">
                                                <img alt="Logo" src="{{ storage_link($user->receipt_logo) }}" style="height: 55px" />
                                            </a>
                                        </div>
                                        <!--end:Logo-->
                                        <!--begin:Media-->
                                        <div style="margin-bottom: 15px">
                                            <img alt="Logo" src="{{ asset('assets/media/email/icon-positive-vote-3.svg') }}" />
                                        </div>
                                        <!--end:Media-->
                                        <!--begin:Text-->
                                        <div style="font-size: 14px; font-weight: 500; margin-bottom: 42px; font-family:Arial,Helvetica,sans-serif">
                                            <p style="margin-bottom:9px; color:#181C32; font-size: 22px; font-weight:700">Ödeme Başarılı!</p>
                                            <p style="margin-bottom:2px; color:#7E8299">Sayın <b>{{ $process->name }}</b>, Cari hesabınıza istinaden yapmış olduğunuz</p>
                                            <p style="margin-bottom:2px; color:#7E8299">{{ $process->amount }} TL tutarındaki ödeme başarılı şekilde kartınızda tahsil edilmiştir.</p>
                                            <p style="margin-bottom:2px; color:#7E8299">Ödemeniz için teşekkür ederiz.</p>
                                        </div>
                                        <!--end:Text-->
                                        <!--begin:Order-->
                                        <div style="margin-bottom: 15px">
                                            <!--begin:Title-->
                                            <h3 style="text-align:left; color:#181C32; font-size: 18px; font-weight:600; margin-bottom: 22px">Ödeme Detayı</h3>
                                            <!--end:Title-->
                                            <!--begin:Items-->
                                            <div style="padding-bottom:9px">
                                                <!--begin:Item-->
                                                <div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500; margin-bottom:8px">
                                                    <!--begin:Description-->
                                                    <div style="font-family:Arial,Helvetica,sans-serif">Cari Hesap Ödemesi</div>
                                                    <!--end:Description-->
                                                    <!--begin:Total-->
                                                    <div style="font-family:Arial,Helvetica,sans-serif">{{ $process->amount }} TL</div>
                                                    <!--end:Total-->
                                                </div>
                                                <div class="separator separator-dashed" style="margin:15px 0"></div>
                                                <!--end::Separator-->
                                                <!--begin:Item-->
                                                <div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500">
                                                    <!--begin:Description-->
                                                    <div style="font-family:Arial,Helvetica,sans-serif">Toplam</div>
                                                    <!--end:Description-->
                                                    <!--begin:Total-->
                                                    <div style="color:#50cd89; font-weight:700; font-family:Arial,Helvetica,sans-serif">{{ $process->amount }} TL</div>
                                                    <!--end:Total-->
                                                </div>
                                                <!--end:Item-->
                                            </div>
                                            <!--end:Items-->
                                        </div>
                                        <!--end:Order-->
                                        <!--begin:Action-->
                                        <a href="{{ route('pdf',$process->uuid) }}" target="_blank" style="background-color:#50cd89; border-radius:6px;display:inline-block; padding:11px 19px; color: #FFFFFF; font-size: 14px; font-weight:500;">Tahsilat Makbuzu İndir</a>
                                        <!--begin:Action-->
                                    </div>
                                    <!--end:Email content-->
                                </td>
                            </tr>

                            <tr>
                                <td align="center" valign="center" style="font-size: 13px; padding:0 15px; text-align:center; font-weight: 500; color: #A1A5B7;font-family:Arial,Helvetica,sans-serif">
                                    <p>&copy; Copyright {{ $user->company_name }}.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end::Email template-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Root-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>