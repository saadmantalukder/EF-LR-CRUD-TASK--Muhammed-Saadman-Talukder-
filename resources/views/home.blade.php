<html>
    <head>
        <title>Evant Factory</title>
    </head>
    <body style="background:#d0d028;color:white;">
        <center>
            <h1>Event Factory Admin Pannel</h1><br>
            <a href="add" style="color:white;text-decoration: none;"><h3>Add Post</h3></a><br><br>
            @if(count($posts)>0)
                @foreach($posts as $post)
                    <table>
                        <tr style="border-bottom: white 1px solid;">
                            <th style="padding:10px">Post Title</th>
                            <th style="padding:10px">Post Description</th>
                        </tr>
                        <tr style="border-bottom: white 1px solid;">
                            <td style="padding:10px">{{$post->post_title}}</td>
                            <td style="padding:10px">{{$post->post_description}}</td>
                        </tr>
                    </table>
                @endforeach
            @endif
        </center>
    </body>
</html>