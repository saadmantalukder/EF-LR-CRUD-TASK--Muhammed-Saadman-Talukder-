<html>
<head>
<title>Evant Factory</title>
</head>
<body style="background:#d0d028;color:white;">
<center>
    <h1>Event Factory Admin Pannel</h1><br>
    <a href="." style="color:white;text-decoration: none;"><h3>Home</h3></a>
    {!! Form::open(['url' => 'add/submit']) !!}
    <table>
    <tr>
        <th>{{Form::label('post_title', 'Post Title:')}}</th>
        <td>{{Form::text('post_title', '',['placeholder' => 'Enter Your Post Title'])}}</td><br>
    </tr>
    <tr>
        <th>{{Form::label('post_description', 'Post Description:')}}</th>
        <td>{{Form::textarea('post_description', '',['placeholder' => 'Enter Your Post Description'])}}</td><br>
    </tr>
    <tr>
        <td colspan="2"><center>{{Form::submit('Submit')}}</center></td>
    </tr>
    </table>
{!! Form::close() !!}
</center>
    
</body>
</html>