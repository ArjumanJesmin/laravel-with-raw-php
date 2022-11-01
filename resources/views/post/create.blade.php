<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post create</title>
</head>


<body>
                <h1>Create new Post</h1> <br> 
                <h2><a href="{{ route('post.index') }}">All Post</a></h2><br> <br>
            <form action="{{ route('post.store') }}" method="post"> 
                @csrf
                <input type="text" name="title" placeholder="Title Here"> <br> <br>
                <textarea name="post create" cols="30" rows="10" placeholder="Details">
                </textarea> <br> <br>
                <button>Submit</button>
            </form>

</body>
</html>