@include ('include.header')
<title>{{$articles ->title}}</title>
@include ('include.navbar')
<!-- title -->
<div class="container pt-4 pb-4">
    <h1>{{ $articles ->title }}</h1>
    <h6>Posted By [Insert Name] at {{$articles -> created_at}}</h6>
</div>
<!-- middle area block -->
<div class="container">
    <div class="row shadow">
        <!-- article -->
        <div class="col-9 article-bg mb-3" style="min-width:350px">
            <!-- for image head -->
            <div class="my-3">
                <div class="overflow-hidden" style="max-height:300px; height: 300px">
                    <img class="align-middle" 
                    style="object-fit:cover; 
                    width: 100%; 
                    height: 100%; 
                    object-position:center;" 
                    src="{{ asset('/images/texas.jpg') }}" alt="">
                </div>
                <!-- caption -->
                <figcaption class="ml-3">croot</figcaption>
            </div>
            
            <!-- paragraphs -->
            <div>
            {!! str_replace("\r","\n", $articles->body) !!} 
            </div>
        </div>
        <!-- sidebar -->
        @include('include.sidebar')
    </div>

</div>
@include ('include.footer')
