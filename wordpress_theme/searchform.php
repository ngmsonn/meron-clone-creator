<?php
/**
 * Template for displaying search form
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search-field" class="sr-only"><?php esc_html_e('Search for:', 'afchem'); ?></label>
    <div class="flex">
        <input 
            type="search" 
            id="search-field" 
            class="search-field flex-1 px-4 py-2 border border-border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary" 
            placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'afchem'); ?>" 
            value="<?php echo get_search_query(); ?>" 
            name="s" 
        />
        <button 
            type="submit" 
            class="search-submit px-6 py-2 bg-primary text-primary-foreground rounded-r-lg hover:bg-primary/90 transition-colors"
        >
            <?php echo esc_html_x('Search', 'submit button', 'afchem'); ?>
        </button>
    </div>
</form>