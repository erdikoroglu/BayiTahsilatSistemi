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
                                <a href="https://pay.ankamuh.com/{{ $process->company->uuid }}" rel="noopener" target="_blank">
                                    <img alt="Logo" src="{{ storage_link($process->company->receipt_logo) }}" style="height: 55px" />
                                </a>
                            </div>
                            <!--end:Logo-->
                            <!--begin:Text-->
                            <div style="font-size: 14px; font-weight: 500; margin-bottom: 42px; font-family:Arial,Helvetica,sans-serif">
                                <p style="margin-bottom:9px; color:#181C32; font-size: 22px; font-weight:700">Tahsilat Bildirimi!</p>
                                <p>Yapmış olduğunuz ödeme ile ilgili tahsilat makbuzunuza aşağıdan erişebilirsiniz.</p>
                            </div>
                            <a href="{{ route('pdf',$process->uuid) }}" target="_blank" style="background-color:#50cd89; border-radius:6px;display:inline-block; padding:11px 19px; color: #FFFFFF; font-size: 14px; font-weight:500;">Tahsilat Makbuzu İndir</a>
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