




trash file












<a href="{{url('/home/index')}}">Back</a>
<h1 style="text-align: center;">Update product</h1>
<div align="center">
        <legend>Update product</legend>
        <form action="{{url('/product/update')}}" method="get">
            @csrf
            <table>
                <tr>
                    <td>Name_product</td>
                    <td>
                        <input type="text" name="name" value="{{$product->name}}">
                    </td>
                </tr>
                <tr>
                    <td>Details_product</td>
                    <td>
                        <input type="text" name="details_product" value="{{$product->details}}">
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>
                        <input type="text" name="price" value="{{$product->price}}">
                    </td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td>
                        <input type="text" name="photo" id="photo" >
                    </td>
                </tr>
                <tr>
                    <td>Id_category</td>
                    <td>
                        <input type="text" name="id_category" value="{{$product->id_category}} >
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Update"></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="{{$category->id}}">
        </form>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
