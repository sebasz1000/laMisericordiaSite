<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get" id='search-box' class='rounded col-11 col-sm-10 col-md-7 col-lg-6' role="search">
    <!--<label for="search">Search in </label>-->
    <input type="text" name="s" id="s" class="form-control" placeholder="<?php the_search_query(); ?>" value="<?php get_search_query(); ?>" />
    <button type="submit" class="btn transparent" ><ion-icon  name="search"></ion-icon></button>

</form>