<?php get_header(); ?>

<div class="huvudkontor-karta-kontakt">
<h1><?php the_title(); ?></h1>
</div>

<!-------------------------------------- mina sidor --------------------------------------------------------------->
<div class="help-added-services">
    <div class="help-spots">
        <div id="theContainerContactMain" class="mina-sidor-spot-container">
            <div class="card-spot-mains">
                <div class="card-spot-main">
                    <div class="spot-icon">
                        <img src="https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/64/000000/external-login-freelancer-xnimrodx-lineal-color-xnimrodx.png"/>
                        <div class="spot-title">Mina Sidor</div>
                            <div class="spot-details">Här hittar du info om dina beställningar, betalningar och fakturor med mera.</div>

                            <div class="spot-action">
                                <a class="btn btn-primary btn-uppercase mypages-login" href="http://localhost/mitt-konto/"> 
                                    <span class="text">Logga in</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                 
            <!--------------------------------- Kontakta oss ------------------------------------------->
           <div class="main-card-spot">
            <div class="spot-container">
                <div class="card-spot">
                    <div class="spot-icon">     
                        <img src="https://img.icons8.com/external-itim2101-lineal-color-itim2101/64/000000/external-contact-us-contact-and-message-itim2101-lineal-color-itim2101-2.png"/>
                    </div>
                <div class="spot-title-1">Vill du kontakta oss?</div>
                <div class="spot-details">Hör av dig så hjälper vi dig!</div>
                <div class="spot-action"> 
                <a class="btn btn-primary btn-uppercase mypages-login" href="http://localhost/kontakta-oss/">
                    <span class="textClick">Kontakta oss</span>
                </a>
                    </div>
                </div>
            </div>
                <!------------------------------------- Reklamation ------------------------------------------------>
            <div class="spot-container">
                <div class="card-spot">
                
                <div class="spot-icon">
                        <img src="https://img.icons8.com/external-filled-outline-geotatah/64/000000/external-complaint-reverse-logistics-filled-outline-filled-outline-geotatah.png"/>
                </div>

                <div class="spot-title">Vill du reklamera en vara?</div>
                <div class="spot-details">Tryck dig vidare här för att göra en reklamation på en vara.</div>
                <div class="spot-action"> 
                <a class="btn btn-primary btn-uppercase mypages-login" href="http://localhost/reklamation/">
                    <span class="textClick">Reklamation</span>
                </a>
                    </div>
                </div>
            </div>
                <!------------------------------- Faktura  --------------------------------->
            <div class="spot-container">
                <div class="card-spot">
                
                <div class="spot-icon">
                    <img src="https://img.icons8.com/external-wanicon-lineal-color-wanicon/64/000000/external-invoice-currency-wanicon-lineal-color-wanicon.png"/>
                </div>

                <div class="spot-title">Vill du se dina fakturor?</div>
                <div class="spot-details">Tryck dig vidare här för att se dina fakturor.</div>
                <div class="spot-action"> 
                <a class="btn btn-primary btn-uppercase mypages-login" href="http://localhost/mitt-konto/orders/">
                    <span class="textClick">Faktura</span>
                </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="huvudkontor-karta-kontakt">
<?php  the_content(); ?>
</div>

<?php get_footer(); ?>