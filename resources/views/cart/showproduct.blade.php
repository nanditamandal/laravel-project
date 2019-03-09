<html>
<head>
    <title>Edit | Page</title>
</head>
<body>
    <h1>product</h1>
    <form method="post">
        {{@csrf_field()}}
        <table style="width:100%">
            <tr>
                <td>User id</td>
                <td><input name="pro_det_id" value="{{$product->pro_det_id}}"/></td>
            </tr>
            <tr>
                <td>name</td>
                <td><input name="product_name" value="{{$product->product_name}}"/></td>
            </tr>
            <tr>
                <td>price</td>
                <td><input name="price" value="{{$product->price}}"/></td>
            </tr>
            <tr>
                <td>quantity</td>
                <td><input name="quantity" value="1"/></td>
            </tr>
           
           
            <tr>
                <td></td>
                <td><input type='hidden'  name='userid' value="{{session('id')}}"  placeholder='userid'>
                </td>
           </tr>
                <td></td>
                <td><input type="submit" value="add"/></td>
            </tr>
        </table>

    </form>


</body>
</html>