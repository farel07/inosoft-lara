<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="/kelas" method="POST">
        @csrf
    <input type="text" name="kelas" id="">
    <input type="text" name="wali_kelas">
    <input type="number" name="max_siswa">
    <button type="submit">Kirim</button>

    </form>

</body>
</html>