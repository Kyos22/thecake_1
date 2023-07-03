<a href="{{url('/admin/index')}}">Back</a>
<h1 style="text-align: center;">Update</h1>
<div align="center">
    <fieldset style="width: fit-content;" align="center">
        <legend>Update</legend>
        <form action="{{url('/admin/update')}}" method="get">
            @csrf
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="name" value="{{$account->name}}">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="text" name="password" value="{{$account->score}}">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email" value="{{$account->email}}">
                    </td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td>
                        <input type="text" name="contact" value="{{$account->contact}}">
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Update"></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="{{$account->id}}">
        </form>
    </fieldset>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
/**vy */