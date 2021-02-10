<div class="container">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
        <table class="table table-bordered table-striped">
            <h3 class="text-center">User Roles</h3>
            @include("home.alertMessages")
            <tbody>
            <tr>
                <th>id</th>
                <td>{{$data->id}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$data->name}}</td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td>{{$data->email}}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>
                    <table>
                        @foreach($data->roles as $role)
                            <tr>
                                <td>{{$role->name}}</td>
                                <td>
                                    <a href="{{route("admin_user_role_delete",["userid"=>$data->id,"roleid"=>$role->id])}}" onclick="return confirm('are you sure!')"><i class="fas fa-user-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
            <tr>
                <th>Add Role</th>
                <td>
                    <form action="{{route("admin_user_role_add",["id"=>$data->id])}}" method="post">
                        @csrf
                        <select name="roleid">
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}">{{$rs->name}}</option>
                            @endforeach
                        </select>
                        <button type="submit">Add Role</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
</div>
