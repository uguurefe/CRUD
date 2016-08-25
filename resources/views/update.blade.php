<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
   <!-- <form action="{{'testing@update', '$user->id'}}" method="patch">
        <label for="name">Name: </label>
        <input type="text" value="{{$user->name}}"><br/>
        <label for="email">Email: </label>
        <input type="text" value="{{$user->email}}"><br/>
        <label for="mobile">Mobile: </label>
        <input type="text" value="{{$user->mobile}}"><br/>
        <label for="gender">Gender: </label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female<br/>
        <label for="os">OS: </label>
        <select name="os" value="{{$user->os}}">
            <option value="{{$user->os}}">linux</option>
            <option value="{{$user->os}}">mac</option>
            <option value="{{$user->os}}">windows</option>
        </select><br/>
        <input type="submit" name="submit" value="Update" action="patch">
    </form> -->

    
    {{Form::model($user,['method'=>'patch', 'action'=>['testing@update',$user->id]])}}

    {{Form::label('name', 'Name')}}
    {{Form::text('name')}}<br/>

    {{Form::label('email', 'Email')}}
    {{Form::text('email')}}<br/>

    {{Form::label('mobile', 'Mobile')}}
    {{Form::text('mobile')}}<br/>

    

    {{Form::close()}}

</body>
</html>