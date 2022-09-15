<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tahsilat Makbuzu</title>
    <style>
        @page {
            size: A5;
            margin: 0;
        }
        @media print {
            html, body {
                width: 210mm;
                height: 148mm;
            }
        }
    </style>
</head>
<body>
<div style="width: 210mm; margin: auto; border: 1px solid; max-height: 148mm; border-radius: 5px; padding: 20px;">
    <h3 style="text-align: center">Tahsilat Makbuzu</h3>
    <div style="width: 50%; float: left">
        <h3>Ödeme Alan</h3>
        <table style="">
            <tr>
                <td style="font-weight: bold">Şirket Adı :</td>
                <td>{{ $process->company->company_name }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold">Vergi N. :</td>
                <td>{{ $process->company->tax_number }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold">Adres :</td>
                <td>{{ $process->company->address }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold">Telefon :</td>
                <td>{{ $process->company->phone }}</td>
            </tr>
        </table>
    </div>
    <div style="width: 50%; float: left">
        <h3>Ödeme Yapan</h3>
        <table>
            <tr>
                <td style="font-weight: bold">Şirket Adı :</td>
                <td>{{ $process->company_name }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold">Vergi N. :</td>
                <td>{{ $process->tax_number }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold">Kişi Adı :</td>
                <td>{{ $process->name }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold">Kişi Telefon :</td>
                <td>{{ $process->phone }}</td>
            </tr>
        </table>
    </div>
    <p style="margin-top: 220px;width: 100%;">
        Cari hesabınıza mahsuben <strong>{{ $process->amount}} TL</strong> tutarında kredi kartınızdan tahsilat gerçekleştirilmiştir.
    </p>
    <p style="margin-top: 20px;width: 100%;">
        İlgili işlem <strong>#{{ $process->uuid }}</strong> numarası ile sistemlerimiz kayıt edilmiştir.
    </p>
</div>

</body>
</html>