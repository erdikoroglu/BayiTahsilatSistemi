<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tahsilat Bildirimi</title>
</head>
<body>
<style>html,body { padding:0; margin:0; font-family: Inter, Helvetica, "sans-serif"; } a:hover { color: #009ef7; }</style>
<div id="#kt_app_body_content" style="background-color:#D5D9E2; font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
    <div style="background-color:#fff !important; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 600px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto" style="border-collapse:collapse">
            <tbody>
                <tr>
                    <td align="center" valign="center" style="text-align:center; padding-bottom: 10px">
                        <!--begin:Email content-->
                        <div style="text-align:center; margin:0 60px 34px 60px">
                            <!--begin:Logo-->
                            <div style="margin-bottom: 10px">
                                <a href="https://pay.ankamuh.com/{{ $process->company->uuid }}" rel="noopener" target="_blank">
                                    <img alt="Logo" src="{{ storage_link($process->company->receipt_logo) }}" style="height: 55px" />
                                </a>
                            </div>
                            <!--end:Logo-->
                            <!--begin:Text-->
                            <div style="font-size: 14px; font-weight: 500; margin-bottom: 42px; font-family:Arial,Helvetica,sans-serif">
                                <p style="margin-bottom:9px; color:#181C32; font-size: 22px; font-weight:700">Yeni Tahsilat Bildirimi!</p>
                            </div>
                            <!--end:Text-->
                            <!--begin:Order-->
                            <div style="margin-bottom: 15px">
                                <!--begin:Items-->
                                <div style="padding-bottom:9px">
                                    <div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500;">
                                        <!--begin:Description-->
                                        <div style="font-family:Arial,Helvetica,sans-serif; font-weight: bold">Tahsilat Numarası</div>
                                        <!--end:Description-->
                                        <!--begin:Total-->
                                        <div style="font-family:Arial,Helvetica,sans-serif">{{ $process->uuid }}</div>
                                        <!--end:Total-->
                                    </div>
                                    <!--begin:Item-->
                                    <div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500; margin-bottom:8px">
                                        <!--begin:Description-->
                                        <div style="font-family:Arial,Helvetica,sans-serif; font-weight: bold">Ödeme Yapan Kurum</div>
                                        <!--end:Description-->
                                        <!--begin:Total-->
                                        <div style="font-family:Arial,Helvetica,sans-serif">{{ $process->company_name }}</div>
                                        <!--end:Total-->
                                    </div>
                                    <div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500; margin-bottom:8px">
                                        <!--begin:Description-->
                                        <div style="font-family:Arial,Helvetica,sans-serif; font-weight: bold">Ödeme Yapan Kurum - Vergi Numarası</div>
                                        <!--end:Description-->
                                        <!--begin:Total-->
                                        <div style="font-family:Arial,Helvetica,sans-serif">{{ $process->tax_number }}</div>
                                        <!--end:Total-->
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500;">
                                        <!--begin:Description-->
                                        <div style="font-family:Arial,Helvetica,sans-serif; font-weight: bold">Ödeme Tutarı</div>
                                        <!--end:Description-->
                                        <!--begin:Total-->
                                        <div style="font-family:Arial,Helvetica,sans-serif">{{ $process->amount }} TL</div>
                                        <!--end:Total-->
                                    </div>
                                    <!--end:Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed" style="margin:15px 0"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end:Items-->
                            </div>
                        </div>
                        <!--end:Email content-->
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="center" style="font-size: 13px; padding:0 15px; text-align:center; font-weight: 500; color: #A1A5B7;font-family:Arial,Helvetica,sans-serif">
                        <p>&copy; Copyright {{ $process->company->company_name }}.</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>