<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post Details</title>
</head>


<body>
    <h1>Create new Post</h1> 
    <form action="{{ route('post.update',$post->id) }}" method="post">  
    @csrf
    @method('PUT')
        <input type "text" value="{{ $post->title }}" name="title" placeholder="Title here">
        <textarea name="details" cols="30" rows="10" placeholder="Details">{{ $post->details }}
        </textarea> <br>
        <button>Update</button>
    </form>
</body>
</html>
