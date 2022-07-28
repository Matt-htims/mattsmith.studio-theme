<div class="search-overlay">

    <div class="search-overlay-inner">
    
            <form id="searchform" method="get" action="<?php echo home_url( '/' ); ?>">
                <input type="text" placeholder="What are you looking for today?" name="s" id="searchbox" onfocus="if (this.value == 'What are you looking for today?') {this.value = '';}" onblur="if (this.value == '') {this.value = 'What are you looking for today?';}" />
                <div class="form-footer">
                    <input type="submit" value="SEARCH" />
                </div>
            </form>
    </div>

    <a class="search-close"><img src="<?php bloginfo('template_url'); ?>/images/close.png" width="20" height="20" /></a>

</div>