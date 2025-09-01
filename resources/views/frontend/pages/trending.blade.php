<section class="section-padding noTopMrgn">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><span class="coloured">Trending</span> Projects</h2>
                    <p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                </div>
            </div>
        </div>
        <div class="row service-v1 margin-bottom-40">
            @foreach ($projects as $project)
        <div class="col-sm-3 md-margin-bottom-40">
           <img class="img-responsive" src="{{ asset($project->image) }}" alt="">   
            <h3>{{ $project->title }}</h3>
            <p>{{ $project->description }}</p>    
        </div>
        @endforeach 
    </div>
    </div>
    </section>


</section>
