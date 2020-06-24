<form role="search" method="get" id="searchform" class="searchform" action="<?php echo site_url(); ?>">
    <div class="input-group">
        <label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" class="form-control" placeholder="<?php the_search_query(); ?>">

        <span class="input-group-btn">
            <button class="btn btn-default" type="submit" id="searchsubmit"><i class="ion-search"></i></button>
        </span>
    </div>
</form>