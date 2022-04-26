<?php get_header();

$title = get_field('goteborg');
$description = get_field('beskrivning');
$bild_butik = get_field('bild_butik');
$size = 'full';

$oppettider = get_field('oppettider');
$email_input = get_field('email_input');
$butiks_karta = get_field('butiks_karta');
?>



        <?php if ( have_posts() ) {    
            
           while ( have_posts() ) {    
                the_post(); ?>          

                <?php the_content(); ?>    

                
           <?php } // end while
             
        }?> <!-- end the if -->  
        

        <!-- Titel på sidan -->
        <?php if($title):?>
        <p><?php echo $title; ?></p>
        <?php endif; ?>

                <!-- beskrivning -->
                <?php if($description):?>
                <?php echo $description; ?>
                <?php endif; ?>

                <?php if( $bild_butik ) {
                echo wp_get_attachment_image($bild_butik, $size); 
                }
                ?>

                <!-- öppettider -->
                <?php if($oppettider): ?>
                <h2>Öppettider</h2>
                <?php echo nl2br($oppettider); ?>
                <?php endif; ?>


                <!-- email -->
                <?php if($email_input):?>
                        <h2>Email</h2>
                <a href="mailto:<?php echo $email_input;?>"> <?php echo $email_input; ?> </a>
                <?php endif; ?>


<?php get_footer(); ?>

