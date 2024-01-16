<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendataan</title>
    <link rel="stylesheet" href="css/app.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <div class="topnav" style="overflow: hidden;">
        <a href="/"  style="float: left; display: block; color: #fff; background-color: #333; text-align: center; padding: 14px 16px; text-decoration: none;">Input Pendataan</a>
        <a class="active" href="/report" style="float: left; display: block; color: #333; text-align: center; padding: 14px 16px; text-decoration: none;">Report</a>
    </div>
    <br>

    <h2>Pendataan Rumah</h2>
    <form action="/input-pendataan" method="POST">
        @csrf
        <input name="no_kk" type="text" placeholder="Nomor KK">
        <input name="nama_kepala_keluarga" type="text" placeholder="Nama Kepala Keluarga">
        <input name="alamat" type="text" placeholder="Alamat">
        <input name="rt_rw" type="text" placeholder="RT/RW">
        <input name="kode_pos" type="text" placeholder="Kode Pos">

        <h3>Identitas Penghuni Rumah</h3>

        @for ($i = 1; $i <= 5; $i++) <input name="identitas_penghuni[{{ $i }}][nama]" type="text"
            placeholder="Nama Lengkap">
            <input name="identitas_penghuni[{{ $i }}][nik]" type="text" placeholder="NIK">
            <input name="identitas_penghuni[{{ $i }}][jenis_kelamin]" type="text" placeholder="Jenis Kelamin">
            <input name="identitas_penghuni[{{ $i }}][ttl]" type="text" placeholder="Tempat, Tanggal Lahir">
            <input name="identitas_penghuni[{{ $i }}][pekerjaan]" type="text" placeholder="Pekerjaan">
            <br>
            @endfor

            <h3>Kondisi Rumah</h3>
            <p>1. Fondasi</p>
            <input type="radio" id="ans1_q1" name="fondasi" value="Layak">
            <label for="ans1_q1">Layak</label>
            <input type="radio" id="ans2_q1" name="fondasi" value="Agak Layak">
            <label for="ans2_q1">Agak Layak</label>
            <input type="radio" id="ans3_q1" name="fondasi" value="Kurang Layak">
            <label for="ans3_q1">Kurang Layak</label>
            <input type="radio" id="ans4_q1" name="fondasi" value="Tidak Layak">
            <label for="ans4_q1">Tidak Layak</label>

            <p>2. Rangka Atap</p>
            <input type="radio" id="ans1_q2" name="atap" value="Layak">
            <label for="ans1_q2">Layak</label>
            <input type="radio" id="ans2_q2" name="atap" value="Agak Layak">
            <label for="ans2_q2">Agak Layak</label>
            <input type="radio" id="ans3_q2" name="atap" value="Kurang Layak">
            <label for="ans3_q2">Kurang Layak</label>
            <input type="radio" id="ans4_q2" name="atap" value="Tidak Layak">
            <label for="ans4_q2">Tidak Layak</label>

            <p>3. Lantai</p>
            <input type="radio" id="ans1_q3" name="lantai" value="Layak">
            <label for="ans1_q3">Layak</label>
            <input type="radio" id="ans2_q3" name="lantai" value="Agak Layak">
            <label for="ans2_q3">Agak Layak</label>
            <input type="radio" id="ans3_q3" name="lantai" value="Kurang Layak">
            <label for="ans3_q3">Kurang Layak</label>
            <input type="radio" id="ans4_q3" name="lantai" value="Tidak Layak">
            <label for="ans4_q3">Tidak Layak</label>

            <p>4. Dinding</p>
            <input type="radio" id="ans1_q4" name="dinding" value="Layak">
            <label for="ans1_q4">Layak</label>
            <input type="radio" id="ans2_q4" name="dinding" value="Agak Layak">
            <label for="ans2_q4">Agak Layak</label>
            <input type="radio" id="ans3_q4" name="dinding" value="Kurang Layak">
            <label for="ans3_q4">Kurang Layak</label>
            <input type="radio" id="ans4_q4" name="dinding" value="Tidak Layak">
            <label for="ans4_q4">Tidak Layak</label>

            <p>5. Jendela</p>
            <input type="radio" id="ans1_q5" name="jendela" value="Layak">
            <label for="ans1_q5">Layak</label>
            <input type="radio" id="ans2_q5" name="jendela" value="Agak Layak">
            <label for="ans2_q5">Agak Layak</label>
            <input type="radio" id="ans3_q5" name="jendela" value="Kurang Layak">
            <label for="ans3_q5">Kurang Layak</label>
            <input type="radio" id="ans4_q5" name="jendela" value="Tidak Layak">
            <label for="ans4_q5">Tidak Layak</label>

            <p>6. Ventilasi</p>
            <input type="radio" id="ans1_q6" name="ventilasi" value="Layak">
            <label for="ans1_q6">Layak</label>
            <input type="radio" id="ans2_q6" name="ventilasi" value="Agak Layak">
            <label for="ans2_q6">Agak Layak</label>
            <input type="radio" id="ans3_q6" name="ventilasi" value="Kurang Layak">
            <label for="ans3_q6">Kurang Layak</label>
            <input type="radio" id="ans4_q6" name="ventilasi" value="Tidak Layak">
            <label for="ans4_q6">Tidak Layak</label>

            <p>7. Plafon</p>
            <input type="radio" id="ans1_q7" name="plafon" value="Layak">
            <label for="ans1_q7">Layak</label>
            <input type="radio" id="ans2_q7" name="plafon" value="Agak Layak">
            <label for="ans2_q7">Agak Layak</label>
            <input type="radio" id="ans3_q7" name="plafon" value="Kurang Layak">
            <label for="ans3_q7">Kurang Layak</label>
            <input type="radio" id="ans4_q7" name="plafon" value="Tidak Layak">
            <label for="ans4_q7">Tidak Layak</label>
            <br>
            <br>
            <input type="submit" name="simpan" style="float: left; display: block; color: #fff; background-color: #333; text-align: center; padding: 14px 16px; text-decoration: none;">
    </form>

</body>

</html>
