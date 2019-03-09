<html>
<head>
    <title>cart | Page</title>
</head>
<body>
    <h1>cart value update </h1>
    <form method="post">
        {{@csrf_field()}}
        <table style="width:100%">
            <tr>
                <td>product name</td>
                <td>{{$cart->productname}}</td>
            </tr>
            <tr>
                <td>product price</td>
                <td>{{$cart->price}}</td>
                <td><input type="hidden" name="price" value="{{$cart->price}}"/></td>
            </tr>
           
            <tr>
                <td>quantity</td>
                <td><input type="number" name="quantity" value="{{$cart->quantity}}"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update"/></td>
            </tr>
        </table>

    </form>


</body>
</html>