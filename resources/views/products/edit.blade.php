<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit product {{$product->name}}</title>
  <link rel="stylesheet" href="/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  
  @if ($errors->any())
    <ul style="position: fixed; top:20px; left: 20px" class="alert alert-danger">
      @foreach ($errors->all() as $err)
          <li>{{ $err }}</li>
      @endforeach
    </ul>
  @endif

  <h1>Please update product</h1>
  <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>
      Product name:
      <input value="{{$product->name}}" name="name"/>
    </label>
    <label>
      Description:
      <textarea name="description">{{$product->description}}</textarea>
    </label>
    <label>
      Price:
      <input type="number"  name="price" value="{{$product->price}}"/>
    </label>
    <label>
      Image:
      <img src="{{$product->imageURL}}" width="200px" />
      <input name="image" type="file" accept="image/*" value={{$product->imageURL}}/>
    </label>
    <button>Update</button>
  </form>
</body>
</html>