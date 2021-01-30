<div class="container">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <form action="{{route("admin_message_update",["id"=>$data->id])}}" method="post">
        @csrf
        <table class="table table-bordered table-striped">
            <h3 class="text-center">Meseage</h3>
            @include("home.alertMessages")
            <tbody>
            <tr>
                <th>Name</th>
                <td>{{$data->name}}</td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td>{{$data->email}}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{$data->phone}}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{$data->message}}</td>
            </tr>
            <tr>
                <th>Answer</th>
                <td><textarea name="note" id="" cols="75" rows="5" >{{$data->note}}</textarea></td>

            </tr>
            <tr>
                <th></th>
                <td>
                    <button class="btn btn-primary" type="submit">Send Answer</button>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
