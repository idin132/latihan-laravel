<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>

    <style>
        body {
            margin-left: 25px;
        }

        button a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <h2>Buat Account Baru</h2>
    <h4>Sign Up Form</h4>

    <form action="index.store">
        <label>First Name :</label>
        <br><br>
        <input type="text" name="first_name">
        <br><br>
        <label>Last Name :</label>
        <br><br>
        <input type="text" name="last_name">
        <br><br>
        <label>Gender</label>
        <br><br>
        <input type="radio" name="gender" value="male">Male<br>
        <input type="radio" name="gender" value="female">Female
        <br><br>
        <label>Nationality</label>
        <br><br>
        <select name="negara">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapura">Singapura</option>
        </select>
        <br><br>
        <label>Language Spoken</label>
        <br><br>
        <input type="checkbox" name="bahasa">Bahasa Indonesia<br>
        <input type="checkbox" name="bahasa">English<br>
        <input type="checkbox" name="bahasa">Other
        <br><br>
        <label>Bio</label>
        <br><br>
        <textarea name="bio" rows="10" cols="30"></textarea>
        <br><br>
    </form>
    <button type="button"><a href="{{route('next')}}">submit</a>

    <br>
</body>
</html>