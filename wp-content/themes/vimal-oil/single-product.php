<?php 
    get_header();
?>
<?php 
    // global $product;
     
    $product = get_product(get_the_id());
    // die;
    echo '<div style="background-color:'.get_field('product_background_color',$product->get_id()).'">';
    echo "<center><br><br><br><br><br>";
    echo $product->get_image()."<br><br>";
    echo $product->get_name()."<br><br>";
    echo "</center></div>"; 
?>
<?php get_footer(); ?>