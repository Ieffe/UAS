@include('include.header')
<title>Welcome to RGS</title>
@include('include.navbar')
<div class="container my-3 py-3 article-bg">
    <div class="text-center bg-danger">
        <h1 class="text-white">WELCOME TO RGS</h1>
    </div>
    <div class="ml-5 mx-4 my-3">
    <h5>Article List</h5>
    </div>
    <div class="container-fluid">
    @foreach($articles as $a)
        <div class="row d-flex bg-white my-3 px-2 py-2">
            <div class="w-25 px-2 py-2 text-center">
                <a href="{{$a ->id}}">
                    <h2 class="">{{$a ->title}}</h2>
                </a>
            </div>
            <div class="px-4 py-3 d-block overflow-hidden" style="height: 150px; overflow-wrap:break-word;">
                {!! str_replace("\r","\n", $a ->body) !!} 
            </div>
            <div class="px-4 py-3 text-right">
                <a class="text-danger" href="/article/{{$a->id }}"> Read more ...</a>
            </div>
        </div>
        @endforeach   
    </div>

    <div class="bg-danger">
            {{$articles ->links()}}
    </div>
    
</div>

 
@include('include.footer')