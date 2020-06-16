@include('include.header')
<title>Add New Article</title>
@include('include.navbar')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h1>Add New Article</h1>
                </div>
                <div class="card-body">
                    <a href="/crud/articles" class="btn btn-danger">Back</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/article/post">
                    
                        {{ csrf_field() }}

                        <!-- <div class="form-group">
                            <label>Your Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Insert Title" value="{{ old('title') }}">
 
                            @if($errors->has('slug'))
                                <div class="text-danger">
                                    {{ $errors->first('title')}}
                                </div>
                            @endif
 
                        </div> -->
                        
 
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="body" class="form-control" placeholder="Type some words" style="resize:none" rows="50" value="{{ old('body') }}"></textarea>
 
                             @if($errors->has('body'))
                                <div class="text-danger">
                                    {{ $errors->first('body')}}
                                </div>
                            @endif
 
                        </div>

                        <!-- <div class="form-group">
                            <label>Tags(Optional)</label>
                            <input type="text" name="title" class="form-control" placeholder="E.g. Anime, Characters, Game" value="{{ old('tag') }}">
 
                            @if($errors->has('tag'))
                                <div class="text-danger">
                                    {{ $errors->first('tag')}}
                                </div>
                            @endif
 
                        </div> -->

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Insert Title" value="{{ old('title') }}">
 
                            @if($errors->has('title'))
                                <div class="text-danger">
                                    {{ $errors->first('title')}}
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


                        <!-- <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="ex: article-name" value="{{ old('slug') }}">
 
                            @if($errors->has('slug'))
                                <div class="text-danger">
                                    {{ $errors->first('slug')}}
                                </div>
                            @endif
 
                        </div> -->
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Post">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
@include('include.footer')