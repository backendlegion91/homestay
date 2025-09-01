<section class="section-padding gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><span class="coloured">Recent</span> Properties</h2>
                    <p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                </div>
            </div>
        </div>
        <div class="row service-v1 margin-bottom-40">
            @foreach($properties->chunk(3) as $chunk)
            @foreach($chunk as $property)
        <div class="col-sm-4 md-margin-bottom-40">
           <img class="img-responsive" src="{{ asset($property->image) }}" alt="">   
            <h3>{{ $property->title }}</h3>
            <p>{{ $property->description }}</p>        
        </div>
        @endforeach
        @endforeach

        
     
        </div>
   
      
      
    </div>
    </div>
    </section>