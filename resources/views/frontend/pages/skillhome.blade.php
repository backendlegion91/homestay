<section id="content">
    <div class="container">
        <div class="row">
            <div class="skill-home"> 
                <div class="skill-home-solid clearfix"> 
                    @foreach ($contentItems as $item)
                    <div class="col-md-3 col-sm-6 text-center">
                        <span class="icons c1"><i class="fa {{ $item->icon }}"></i></span> 
                        <div class="box-area">
                            <h3>{{ $item->title }}</h3> <p>{{ $item->description }}</p>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </div> 
    </div>
</section>