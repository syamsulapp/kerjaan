<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serah Terima</title>
</head>


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

    .text {
        text-align: center;
    }
</style>

<body>
        @php
            $cek['cek_status_noreg_cetak'] = Auth::user()->noreg;
            @endphp


@foreach($cetak as $c)
            @if($cek['cek_status_noreg_cetak'] == $c->noreg)
<table cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td valign="top">

	<div class="text"><img src="{{ asset('fronts/assets/img/logo.jpg') }}"  width="80" height="80"> </div>
</td>
<td colspan="2" valign="top">
<div class="text">
<text><span style=" color: #000000; font-family: 'Arial Narrow'; font-size: x-large;"><strong>TANDA TERIMA</strong></span></text>
<br>
<text ><span style="color: #000000; font-family: 'Arial Narrow'; font-size: medium;"><strong>UNIT LAYANAN ADMINISTRASI</strong></span></text>
<br>
<text><span style="color: #000000; font-family: 'Arial Narrow'; font-size: medium;"><strong>BIRO PEMERINTAHAN DAN OTDA SETDA PROV. SULTRA</strong></span></text>
<br>
<text><span style="color: #000000; font-family: 'Arial Narrow'; font-size: xx-small;">Telp : Kompleks Bumi Praja Anduonohu Telp. 391 609 Fax (0401) 3191611 Kendari 93232</span></text>
</div>
</td>
</tr>
<tr>
<td valign="middle">
<p><span style="color: #000000; font-family: Arial; font-size: small;">Nomor Registrasi</span></p>
</td>
<td colspan="2" valign="middle">
<p><span style="color: #000000; font-family: Arial; font-size: small;"><strong>{{ $c->noreg }}</strong></span></p>
</td>
</tr>
<tr>
<td valign="middle">
<p><span style="color: #000000; font-family: Arial; font-size: small;">Nama Pemohon</span></p>
</td>
<td colspan="2" valign="middle">
<p><span style="color: #000000; font-family: Arial; font-size: small;">{{ __('Bagian Pemerintah ')  }}{{ $c->kabupaten }}</span></p>
</td>
</tr>
<tr>
<td valign="middle">
<p><span style="color: #000000; font-family: Arial; font-size: small;">Instansi</span></p>
</td>
<td colspan="2" valign="middle">
<p><span style="color: #000000; font-family: Arial; font-size: small;">{{ __('Sekertariat Daerah ')  }}{{ $c->kabupaten  }}</span></p>
</td>
</tr>
<tr>
<td valign="middle">
<p><span style="color: #000000; font-family: Arial; font-size: small;">Informasi Pemohon</span></p>
</td>
<td colspan="2" valign="middle">
<span style="color: #000000; font-family: Arial; font-size: small;">Jenis Usulan : {{ $c->kategori_permohonan }} </span>
<br>span style="color: #000000; font-family: Arial; font-size: small;">{{ __('Objek KDH :') }}<span class="Apple-converted-space">&nbsp; </span>  {{ $c->objekkdh }}</br>
<br><span style="color: #000000; font-family: Arial; font-size: small;">{{ $c->kabupaten }} : {{ $c->provinsi }}</span>
</td>
</tr>
<tr>
<td valign="middle">
<p><span style="color: #000000; font-family: Arial; font-size: small;">Tanggal pengajuan</span></p>
</td>
<td colspan="2" valign="middle">
<p><span style="color: #000000; font-family: Arial; font-size: small;">{{ $c->created_at }}</span></p>
</td>
</tr>
<tr>
<td valign="middle">
<p><span style="color: #000000; font-family: Arial; font-size: small;">Layanan</span></p>
</td>
<td colspan="2" valign="middle">
<p><span style="color: #000000; font-family: Arial; font-size: small;"><strong>{{ $c->penyebabkdh }}</strong></span></p>
</td>
</tr>
<tr>
<td colspan="2" valign="top">
<p><span style="color: #000000; font-family: Arial; font-size: small;">Yang Menyerahkan,</span></p>
</td>
<td valign="middle">
<span style="color: #000000; font-family: Arial; font-size: small;">Kendari,<span class="Apple-converted-space">&nbsp; </span>{{ date('d-m-Y') }}</span>
<br>
<span style="color: #000000; font-family: Arial; font-size: small;">Yang Menerima,</span>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td colspan="3" valign="top">
<span style="color: #000000; font-family: Arial; font-size: small;"><u>CATATAN PENTING!</u></span>
<p><span style="color: #000000; font-family: Arial; font-size: small;">1. Hasil Dokumen Asli dapat diambil secara langsung di Biro Pemerintahan dan OTDA Prov.<span class="Apple-converted-space">&nbsp; </span>Sultra/Badan Penghubung Kabupaten/Kota <u>setelah status permohonan Upload Dokumen Jadi</u>. </span></p>
<br><span style="color: #000000; font-family: Arial; font-size: small;">2. Persyaratan pengambilan dokumen : <span class="Apple-converted-space">&nbsp; &nbsp;</span></span>
<br><span style="color: #000000; font-family: Arial; font-size: small;"><span class="Apple-converted-space">&nbsp; &nbsp; </span>- Tanda Terima / Tanda Bukti Registrasi ini.<span class="Apple-converted-space">&nbsp; &nbsp;</span></span>
<br><span style="color: #000000; font-family: Arial; font-size: small;"><span class="Apple-converted-space">&nbsp; &nbsp; </span>- Surat Tugas dari Bagian Tata Pemerintahan/Badan Penghubung Kabupaten/Kota.</span>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
	
	@endif
        @endforeach
</table>