<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
</head>
<body>
    <form action="store" method="post">
        <label for="name">name</label>
        <input type="text" name="name"><br/>
        <label for="email">email</label>
        <input type="text" name="email"><br/>
        <label for="mobile">mobile</label>
        <input type="text" name="mobile"><br/>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female<br/>
        <select name="os" id="os">
            <option value="linux">linux</option>
            <option value="mac">mac</option>
            <option value="windows">windows</option>
        </select><br/>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label for=""></label>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>