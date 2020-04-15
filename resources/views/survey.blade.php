@extends('layouts.app')

@section('content')
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../img/iconfinder_12-Mask_5929232.png" id="icon" alt="User Icon" />
      <h1>
          {{ auth::user()->name }}
      </h1>
    </div>

<form action="{{ url('survey.store') }}" method="POST"> 
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{auth::user()->id}}">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table" id="datatables">
                <thead>
                    <tr>
                        <th>
                            Kegiatan
                        </th>
                        <th>
                            Keterangan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="success">
                        <td>
                            Saya Pergi Keluar Rumah
                        </td>
                        <td>
                            <input type="radio" id="q1" name="y1" value="1"> <label for="y1">Ya</label>
                            <input type="radio" id="q1" name="n1" value="1"> <label for="n1">Tidak</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Menggunakan Transportasi Umum : Online, angkot, Bus, Taksi, Kerata api
                        </td>
                        <td>
                            <input type="radio" id="q2" name="y2" value="1"> <label for="y2">Ya</label>
                            <input type="radio" id="q2" name="n2" value="1"> <label for="n2">Tidak</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Memakai Masket Pada Sat Berkumpul Dengan Orang Lain
                        </td>
                        <td>
                            <input type="radio" id="q3" name="y3" value="1"> <label for="y3">Ya</label>
                            <input type="radio" id="q3" name="n3" value="1"> <label for="n3">Tidak</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Berjabat Dengan Orang Lain
                        </td>
                        <td>
                            <input type="radio" id="q4" name="y4" value="1"> <label for="y4">Ya</label>
                            <input type="radio" id="q4" name="n4" value="1"> <label for="n4">Tidak</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Membersihkan Tangan Denga Sanitaizer / Tissue Basah Sebelum Pegang Kemudi Mobil/Motor
                        </td>
                        <td>
                            <input type="radio" id="q5" name="y5" value="1"> <label for="y5">Ya</label>
                            <input type="radio" id="q5" name="n5" value="1"> <label for="n5">Tidak</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Menyentuh Benda / Uang Yang Juga Disentuh Orang Lain
                        </td>
                        <td>
                            <input type="radio" id="q6" name="y6" value="1"> <label for="y6">Ya</label>
                            <input type="radio" id="q6" name="n6" value="1"> <label for="n6">Tidak</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Menjaga Jarak 1,5 Meter Dengan Orang Lain Ketika : Belanja, Bekerja, Belajar, Ibadah
                        </td>
                        <td>
                            <input type="radio" id="q7" name="y7" value="1"> <label for="y7">Ya</label>
                            <input type="radio" id="q7" name="n7" value="1"> <label for="n7">Tidak</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Makan Diluar Rumah ( Warung / Restauran )
                        </td>
                        <td>
                            <input type="radio" id="q8" name="y8" value="1"> <label for="y8">Ya</label>
                            <input type="radio" id="q8" name="n8" value="1"> <label for="n8">Tidak</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Minum air Hangat & Tidak Mencuci Tangan Dengan Sabun Setelah Tiba Di Tujuam.
                        </td>
                        <td>
                            <input type="radio" id="q9" name="y9" value="1"> <label for="y9">Ya</label>
                            <input type="radio" id="q9" name="n9" value="1"> <label for="n9">Tidak</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Berada Di Wilayah Kelurahan Tempat Pasien Tertular 
                        </td>
                        <td>
                            <input type="radio" id="q10" name="y10" value="1"><label for="y10">Ya</label>
                            <input type="radio" id="q10" name="n10" value="1"><label for="n10">Tidak</label>
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>
                            Saya Tidak Pasang Hand Sanitizer Di Depan Pintu Masuk, Untuk Bersihkan Tangan Sebelum Memegang Gagang (Handle) Pintu Masuk Rumah 
                        </td>
                        <td>
                            <input type="radio" id="q11" name="y11" value="1"><label for="y11">Ya</label>
                            <input type="radio" id="q11" name="n11" value="1"><label for="n11">Tidak</label>
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>
                            Saya Tidak Mencuci Tangan Dengan Sabun Setelah Tiba Di Rumah 
                        </td>
                        <td>
                            <input type="radio" id="q12" name="y12" value="1"><label for="y12">Ya</label>                          
                            <input type="radio" id="q12" name="n12" value="1"><label for="n12">Tidak</label>
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>
                            Saya Tidak Menyediakan : Tissue Basah / antiseptic, Masker, Sabun antiseptic Bagi Keluarga Di Rumah 
                        </td>
                        <td>
                            <input type="radio" id="q13" name="y13" value="1"><label for="y13">Ya</label> 
                            <input type="radio" id="q13" name="n13" value="1"><label for="n13">Tidak</label>
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>
                            Saya Tidak Segera Merendam Baju & Celana Bekas Pakai Di Luar Rumah Ke dalam air Panas / Sabun
                        </td>
                        <td>
                            <input type="radio" id="q14" name="y14" value="1"><label for="y14">Ya</label>
                            <input type="radio" id="q14" name="n14" value="1"><label for="n14">Tidak</label>
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>
                            Saya Tidak Segera Mandi Keramas Setelah Saya Tiba Di Rumah 
                        </td>
                        <td>
                            <input type="radio" id="q15" name="y15" value="1"><label for="y15">Ya</label>
                            <input type="radio" id="q15" name="n15" value="1"><label for="n15">Tidak</label>
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>
                            Saya Tidak Mensosialisasikan Check List Penilaian Resiko Pribadi ini Kepada Keluarga Di Rumah
                        </td>
                        <td>
                            <input type="radio" id="q16" name="y16" value="1"><label for="y16">Ya</label>
                            <input type="radio" id="q16" name="n16" value="1"><label for="n16">Tidak</label>
                        </td>
                    </tr>
                    <tr class="danger">
                        <td>
                            Saya Dalam Sehari Tidak Terkena Cahaya Matahari Minimal 15 menit
                        </td>
                        <td>
                            <input type="radio" id="q17" name="y17" value="1"><label for="y17">Ya</label>
                            <input type="radio" id="q17" name="n17" value="1"><label for="n17">Tidak</label>
                        </td>
                    </tr>
                    <tr class="danger">
                        <td>
                            Saya Tidak Jalan Kaki / Berolahraga Minimal 30 menit Setiap Hari 
                        </td>
                        <td>
                            <input type="radio" id="q18" name="y18" value="1"><label for="y18">Ya</label>
                            <input type="radio" id="q18" name="n18" value="1"><label for="n18">Tidak</label>
                        </td>
                    </tr>
                    <tr class="danger">
                        <td>
                            Saya Jarang Minum Vitamin C & E, dan Kurang Tidur 
                        </td>
                        <td>
                            <input type="radio" id="q19" name="y19" value="1"><label for="y19">Ya</label>
                            <input type="radio" id="q19" name="n19" value="1"><label for="n19">Tidak</label>
                        </td>
                    </tr>
                    <tr class="danger">
                        <td>
                            Usia Saya Diatas 60 Tahun 
                        </td>
                        <td>
                            <input type="radio" id="q20" name="y20" value="1"><label for="y20">Ya</label>
                            <input type="radio" id="q20" name="n20" value="1"><label for="n20">Tidak</label>
                        </td>
                    </tr>
                    <tr class="danger">
                        <td>
                            Saya Mempunyai Penyakit : Jantung / Diabetes / Gangguan Pernafasan Kronik   
                        </td>
                        <td>
                            <input type="radio" id="q21" name="y21" value="1"><label for="y21">Ya</label>
                            <input type="radio" id="q21" name="n21" value="1"><label for="n21">Tidak</label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<input type="submit" value="Check">
</form>
@endsection

