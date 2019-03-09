<html>
<head>
    <title>Edit | Page</title>
</head>
<body>
    <h1> add to cart </h1>
    <form method="post">
        {{@csrf_field()}}
        <table style="width:100%">
            <tr>
               <td>picture</td>
                <td><img src="{{ asset($cart->picture) }}" width="150px"><br><br></td>
            </tr>
            <tr>
                <td>product name</td>
                <td><input name="product_name" value="{{$cart->product_name}}"/></td>
            </tr>
            <tr>
                <td>price</td>
                <td><input name="price" value="{{$cart->price}}"/></td>
            </tr>
            <tr>
                <td>quantity</td>
                <td><input type="number" name="quantity" min="1" max="5" value=""></td>
            </tr>
            <tr>
                <td>total price</td>
                <td><input type="number" name="total price" value=""></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" value="add to cart"/></td>
            </tr>
        </table>

    </form>


</body>
</html>