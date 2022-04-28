<?php get_header();

$title = get_field('goteborg');
$description = get_field('beskrivning');
$bild_butik = get_field('bild_butik');
$size = 'full';

$oppettider = get_field('oppettider');
$email_input = get_field('email_input');
$butiks_karta = get_field('butiks_karta');
?>

<main class="mainContainerFysiskaButiker">      

<div class="mainRow">
        
        <!-- Titel på sidan -->
        <?php if($title):?>
        <h1 class="display-4"> <?php echo $title; ?> </h1>
        <?php endif;  ?>

                <!-- beskrivning -->
                <?php if($description):?>
                        <p class="textFysiska"> <?php echo $description; ?> </p>
                        <?php endif; ?>

                        <div class="fysiska-img">
                                <?php if( $bild_butik ) {
                                echo wp_get_attachment_image($bild_butik, $size);
                                }
                                ?>
                        </div>
                        <div class="testRow">
                                        <div class="secondContainer">
                                                        <!-- öppettider -->
                                                        <?php if($oppettider): ?>
                                                        <h2>Öppettider</h2>
                                                        <div>
                                                                <?php echo nl2br($oppettider); ?> 
                                                        </div>
                                                        <?php endif; ?>
                                
                                
                                                        <!-- email -->
                                                        <?php if($email_input):?>
                                                                
                                                                <h2>Email</h2>
                                                        <div> <a href="mailto:<?php echo $email_input;?>"> <?php echo $email_input; ?> </a> </div>
                                                        
                                                        <?php endif; ?>
                                        </div>
                        
                                        <div class="thirdContainer">
                        
                                                <?php if ( have_posts() ) {    
                                        
                                                        while ( have_posts() ) {    
                                                        the_post(); ?>          
                                
                                                        <?php the_content(); ?>    
                                
                                                
                                                <?php } // end while
                                        
                                                }?> <!-- end the if -->  
                                        </div>
                        </div>
</div>

        
        
</main>

<?php get_footer(); ?>

