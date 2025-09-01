<section id="banner">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
          @foreach ($slides as $slide)
          <ul class="slides">
            <li>
              <img src="{{ asset($slide->image_path) }}" alt="{{ $slide->title }}" />
              <div class="flex-caption">
                  <h3>{{ $slide->title }}</h3>  
         
              </div>
            </li>
          </ul>  
          @endforeach
   
        </div>
	<!-- end slider -->
 
	</section> 