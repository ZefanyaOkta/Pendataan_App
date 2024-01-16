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
        <a href="/" style="float: left; display: block; color: #333; text-align: center; padding: 14px 16px; text-decoration: none;">Input Pendataan</a>
        <a class="active" href="/report" style="float: left; display: block; color: #fff; background-color: #333; text-align: center; padding: 14px 16px; text-decoration: none;">Report</a>
    </div>
    <br>

    <h2>Pendataan Rumah Report</h2>

<table border="1">
    <thead>
        <tr>
            <th width=100>No KK</th>
            <th width=100>Nama Kepala Keluarga</th>
            <th width=100>NIK</th>
            <th width=100>Alamat</th>
            <th width=100>Total Penghuni</th>
            <th width=100>Fondasi</th>
            <th width=100>Atap</th>
            <th width=100>Lantai</th>
            <th width=100>Dinding</th>
            <th width=100>Jendela</th>
            <th width=100>Ventilasi</th>
            <th width=100>Plafon</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($pendataanData as $data)
            <tr>
                <td>{{ $data->maskedNoKK }}</td>
                <td>{{ $data->nama_kepala_keluarga }}</td>
                <td>{{ $data->maskedNIK }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->identitasPenghuni->count() }}</td>
                <td>{{ $data->kondisiRumah->fondasi ?? 'Not available' }}</td>
                <td>{{ $data->kondisiRumah->atap ?? 'Not available' }}</td>
                <td>{{ $data->kondisiRumah->lantai ?? 'Not available' }}</td>
                <td>{{ $data->kondisiRumah->dinding ?? 'Not available' }}</td>
                <td>{{ $data->kondisiRumah->jendela ?? 'Not available' }}</td>
                <td>{{ $data->kondisiRumah->ventilasi ?? 'Not available' }}</td>
                <td>{{ $data->kondisiRumah->plafon ?? 'Not available' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>

</html>
