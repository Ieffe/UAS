@include ('include.header')
<title> Posts </title>
@include ('include.navbar')
<div class="container my-5">
    <div class="row shadow">
        <div class="col-9 container article-bg mb-3" style="min-width:350px">
            <!-- categories head -->
            <div class="bg-danger p-2">
                        <h2 class="text-white">Posts</h3>
            </div>
            <!-- stuff lists -->
            <div class="container m-3 p-2 bg-white mx-auto" style="">
                <div class="row my-4" style="">
                    <div class="overflow-hidden container col-3 px-2" style="min-width: 150px; max-width: 350px; min-height: 200px; max-height: 200px">
                        <a href="#">
                            <img class="align-middle image-fluid" 
                            style="object-fit:cover; 
                            width: 100%; 
                            height: 100%; 
                            object-position:center;" 
                            src="{{ asset('/images/texas.jpg') }}" alt="">
                        </a>
                    </div>
                    
                    <div class="container col-7 overflow-hidden" style="max-height: 300px;">
                        <div class="container" style="max height: 120px;">
                            <a class="" style="max-height: 75px;" href="#">
                                <h2 class="" style="overflow: hidden;">Very lengthy title that gonna suck your fucking dick</h2>
                            </a>
                        </div>
                        <div class="container overflow-hidden" style="text-overflow: clip; max-height: 180px">
                            <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia distinctio quis mollitia velit repellat facere dolore modi accusamus. Consequatur sed provident voluptate molestias eius rerum ipsam veritatis. Dicta, cumque enim? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis consectetur doloremque minus quod facere quis suscipit voluptates iste sint sit, omnis vero repellat ea? Ut necessitatibus ex saepe expedita earum!  
                            </p>
                        </div>
                        <p class="container py-2">
                             POSTED BY [NAME] AT []
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- sidebar -->
        @include('include.sidebar')
    </div>

</div>
@include ('include.footer')
