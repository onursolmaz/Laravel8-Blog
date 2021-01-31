<div class="container">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <form action="{{route("admin_comment_update",["id"=>$data->id])}}" method="post">
        @csrf
        <table class="table table-bordered table-striped">
            <h3 class="text-center">Comments</h3>
            @include("home.alertMessages")
            <tbody>
            <tr>
                <th>Id</th>
                <td>{{$data->id}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$data->user->name}}</td>
            </tr>
            <tr>
                <th>Blog</th>
                <td>{{$data->post->title}}</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>{{$data->comment}}</td>
            </tr>
            <tr>
                <th>Created Date</th>
                <td>{{$data->created_at}}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    <select name="status">
                        <option selected>{{$data->status}}</option>
                        <option value="True">True</option>
                        <option value="False">False</option>
                    </select>
                </td>

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
