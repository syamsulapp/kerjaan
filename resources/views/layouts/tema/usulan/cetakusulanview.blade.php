<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serah Terima</title>
</head>

<img src="{{ asset('assets/img/logosultra.png') }}" alt="logo-sultra" width="200" height="200">
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
</head>
<body>

<h2>HTML Table</h2>
        @php
            $cek['cek_status_noreg_cetak'] = Auth::user()->noreg;
            @endphp
<table>
    <tr>
        <th>nama</th>
        <th>Nomor Registrasi</th>
        <th>Nama Pemohon</th>
        <th>Instansi</th>
        <th>Informasi Pemohon</th>
        <th>Tanggal Pengajuan</th>
        <th>Layanan</th>
        <th>Yang Menyerahkan</th>
    </tr>
    <tr>
        @foreach($cetak as $c)
            @if($cek['cek_status_noreg_cetak'] == $c->noreg)
                <th> {{ $c->nama }}</th>
                <th> {{ $c->noreg }}</th>
                <th>{{ __('Bagian Pemerintah')  }}{{ $c->kabupaten }}</th>
                <th>{{ __('Sekertariat Daerah')  }}{{ $c->kabupaten  }}</th>
                <th>{{ $c->kategori_permohonan }}
                    <br>
                    {{ __('objek kdh:') }} {{ $c->objekkdh }}
                    {{ __('kabupaten :') }} {{ $c->kabupaten }} {{ $c->provinsi }}
                </th>
                <th>{{ $c->created_at }}</th>
                <th>{{ $c->penyebabkdh }}</th>
                <th>{{ __('kepala daerah') }}</th>
            @endif
        @endforeach
    </tr>
</table>

</body>
</html>
