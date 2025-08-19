<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method ="POST">
        @csrf
        <label>First name: </label> <br> <br>
        <input type="text" name = "first"> <br> <br> 
        <label>Last name: </label> <br> <br>
        <input type="text" name = "last"> <br> <br>

        <label>Gender:</label> <br> <br>
        <input type="radio" name="gender">Wanita <br>
        <input type="radio"  name="gender">Pria <br>
        <input type="radio"  name="gender">Other <br> <br>

        <label>Nationality:</label> <br> <br>
        <select name="Kewarganegaraan">
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="singapore">Singapore</option>
            <option value="thailand">Thailand</option>
            <option value="brunei">Brunei</option>
        </select> <br> <br>

        <label>Language Spoken:</label> <br> <br>
        <input type="checkbox" name="bahasa">Bahasa Indonesia <br>
        <input type="checkbox"  name="bahasa">English <br>
        <input type="checkbox"  name="bahasa">Other <br> <br>

        <label>Bio:</label> <br> <br>
        <textarea name="bio" rows="10" cols="30"></textarea> <br> 

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>