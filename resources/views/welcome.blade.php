<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar HTML </title>

    <style>
        .teks {
          color: rgb(76, 9, 201);
          text-decoration: underline;
        }

        body {
            margin-left: 25px;
        }
      </style>
</head>
<body>
    <h1>Media Online</h1>
    <h3>Sosial Media Developer</h3>
    <p>Belajar dan berbagi agar hidup menjadi lebih baik</p>
    <h4>Benefit Join di Media Online</h4>
    <ul>
        <li>Mendapatkan motivasi dari sesama para Developer</li>
        <li>Sharing knowledge</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>
    <h4>Cara Bergabung ke Media Online</h4>
    <ol>
        <li>Mengunjungi Website ini</li>
        <li>Mendaftarkan di <a href="{{ route('registrasi') }}" class="teks">Form Sign Up</a></li>
        <li>Selesai</li>
    </ol>
</body>
</html>