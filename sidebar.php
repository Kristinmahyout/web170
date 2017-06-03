<!--Sidebar-->
<aside class="sidebar">
<h2><?php
    
    if (is_page()) { //if user is on any 'Page'

        echo get_the_title($post->post_parent); //get the page title of the parent page 
        
    } else { //if on any other page: like 404
        
        echo 'Blog'; //call the side bar 'blog'
        
    }
    
    ?> </h2>

    <ul class="sub-navigation-items">
    <?php
        
        if(is_page()){ //if user is on any "Page"...
          
            if($post->post_parent){ //if "page" has a parent...
               
              wp_list_pages(array('child_of' => post_parent, 'title_li' => '',)); //list children pages
                
            }else { //if on parent page
                
                wp_list_pages(array('child_of' => $post->ID, 'title_li' => '',)); //list children pages
                
            }
            
        } else { //if on 404 page...
            
            wp_list_categories(array('title_li' => '',)); //list nothing
            
        } ?>
    
    </ul>
    
    <!--start custom fields quote-->
    <?php if(get_post_meta($post->ID, 'quote', true)): ?>
        <blockquote><?php echo get_post_meta($post->ID, 'quote', true); ?></blockquote>
    <?php endif; ?>
    <!--end custom fields quote-->
    
    </aside>
   
<!--End sidebar-->