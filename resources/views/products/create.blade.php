<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
</head>
<body>
    <h2>Add a Product</h2>
    <div>
    @if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    @endif
    </div>
    <form method="POST" action="{{route('product.save')}}">
    @csrf
    @method('post')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity" required><br><br>

        <label for="price">Price:</label>
        <input type="number" step="0.01" id="price" name="price" required><br><br>
        
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="save">
    </form>
</body>
</html>
