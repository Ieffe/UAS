@include('include.header')
<title>Article Editor</title>
@include('include.navbar') 
 
<div class="container mb-4">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h1>Article Editor</h1>
                <div class="card-body">
                    <a href="/crud/article/add" class="btn btn-success">Add new stuff</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
								<th>Tags</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $a)
                            <tr>
                                <td>{{ $a -> title }}</td>
								<td>{{ $a -> tag }}</td>
                                <td>
                                    <a href="/crud/article/edit/{{ $a->id }}" class="btn btn-primary">Edit</a>
                                    <a href="/article/{{ $a->id }}" class="btn btn-warning">View Post</a>
                                    <a href="/crud/article/remove/{{ $a->id }}" class="btn btn-danger">Remove</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>		
@include('include.footer')