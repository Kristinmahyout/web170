    <!--Sidebar-->
   <!-- <div id="sidebar">
        <h2>Header 2</h2>
        <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
        </ul>
    </div> -->
    
<?php
    if ($post->post_parent) {
        
        $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
        $parentname = get_the_title($post->post_parent);     
    } else {
        $children = wp_list_pages("title_li=&child_of=".$post->ID);
        $parentname = get_the_title($post->ID);
    }
    
    if ($children) { //has children?>
        
    <div id="sub-navigation" class="widget">
    <h2 class="sub-navigation-title"> <?php echo $parentname; ?> </h2>
    <ul class="sub-navigation-items">
    <?php echo $children; ?>    
    </ul>
    </div>
    
<?php } ?>
    <!--End sidebar-->