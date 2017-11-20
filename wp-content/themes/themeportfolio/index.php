<?php get_header();


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'From: TangledDemo'; 
$to = 'mark.zyko01@gmail.com'; 
$subject = 'Hello';

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

?>
<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>
<div class="container-fluid">
    <?php
        if(have_posts() ) :
            while(have_posts()) : the_post();
                get_template_part('content', get_post_format() );
            
            endwhile;
                
            else:
                echo '<p>No content found!</p>' ;
        
        endif;
    ?>
</div>

<?php get_footer(); ?> 