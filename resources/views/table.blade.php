<table>
    <tr>
        <td>id</td>
    </tr>

    <tr>
       @foreach($list as $cate)
        <td>{{$cate -> name_category}}</td>
@endforeach
    </tr>
</table>