<h3>Admin-Index</h3>
<table border="1" align="center" style="text-align: center; width: 500px;">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Details</td>
        <td>Price</td>
        <td>photo</td>
        <td>ID_category</td>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->details}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->photo}}</td>
            <td>{{$product->id_category}}</td>
            <td>
                <a href="{{url('/admin/delete/'.$product->id)}}" onclick="return confirm('Are you sure?')">Delete</a> | 
                <a href="{{url('/admin/edit/'.$product->id)}}">Edit</a>
            </td> 
        </tr>  
    @endforeach
