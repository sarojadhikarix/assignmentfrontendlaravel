<section id="control_panel">

  <div id="search">
    <form class="form-group search_form">
      <input class="search_input form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="search_submit" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>


  <div id="control_menu">
    <div id="Categories" class="control_option">
      <div class="control_name"><h1 ><a href="{{URL::route('categories.show')}}">Categories</a></h1><i class="fas fa-angle-right"></i></div>
      <ul class="control_menu">
        <li>
          <div class="label">Cats</div>
          <ul>
            <li>Small Cats</li>
            <li>Big Cats</li>
          </ul>
        </li>
        <li>
          <div class="label">Dogs</div>
          <ul>
            <li>Small doggies</li>
            <li>Big doggies</li>
          </ul>
        </li>
      </ul>
    </div>

    <div id="Filters" class="control_option">
      <div class="control_name"><h1>Filters</h1><i class="fas fa-angle-right"></i></div>


      <ul class="control_menu">
        <li>
          <div class="label">Cats</div>
          <ul>
            <li>Small Cats</li>
            <li>Big Cats</li>
          </ul>
        </li>
        <li>
          <div class="label">Dogs</div>
          <ul>
            <li>Small doggies</li>
            <li>Big doggies</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</section>
