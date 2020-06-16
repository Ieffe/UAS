@include('include.header')
<title>Edit Article</title>
@include('include.navbar')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h1>EDIT ARTICLE</h1>
                </div>
                <div class="card-body">
                    <a href="/crud/articles" class="btn btn-primary">Back to list</a>
                    <br/>
                    <br/>
                    <form method="post" action="/crud/article/update/{{ $articles ->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="title" class="form-control" placeholder="Title" value=" {{ $articles->title }}">
 
                            @if($errors->has('title'))
                                <div class="text-danger">
                                    {{ $errors->first('title')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="body" class="form-control" style="resize:none" placeholder="article" rows="50"> {{ $articles->body }} </textarea>
 
                             @if($errors->has('body'))
                                <div class="text-danger">
                                    {{ $errors->first('body')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                        <label for="">Select Tags (Optional)</label>
                            <br>
                                <select name="tag" id="">
                                    <option value="anime">Anime</option>
                                    <option value="games">Games</option>
                                    <option value="movie">Movie</option>
                                    <option value="music">Music</option>
                                </select>
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="save">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>

@include('include.footer')