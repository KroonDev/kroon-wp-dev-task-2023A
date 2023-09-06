<?php
/*
Template Name: Custom Homepage
*/

get_header(); // Include header template
?>

<div class="custom-homepage-header">
    <div class="container">
        <?php
        // Retrieve the featured image of the current page
        $article_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // 'full' is the image size
        if ($article_image_url) {
            echo '<img src="' . esc_url($article_image_url) . '" alt="Article Image">';
        }
        ?>
    </div>
</div>

<div class="custom-homepage-content">
    <div class="container">
        <h1>Welcome to Our Website</h1>
        <p>This is a custom static homepage designed using a WordPress custom template.</p>
        <p>We're excited to share information about our products and services with you.</p>
    </div>
    <div>

    </div>
</div>

<?php get_footer(); // Include footer template 
?>