 <!-- CONTACT -->
 <section class="contact" id="contact">
     <div class="contact__wrapper">
         <div class="contact__col contact__col--contact">
             <h2 class="h2-headng h2-heading--dark contact__heading">
                 Kontaktirajte nas
             </h2>
             <?php

if(is_active_sidebar('sidebar-1')){
			    dynamic_sidebar('cf-7');
			    }
                ?>
         </div>
         <div class="contact__col contact__col--info">
             <h2 class="h2-heading contact-info__heading">Kontakt podaci</h2>
             <div class="contact__col--info__wrapper">
                 <div class="contact__col--info__info">
                     <img src="/wp-content/themes/domagoj/src/assets/icons/mdi_location.svg" aria-hidden="true" />
                     <div>
                         <h3 class="text-bright">Lokacija</h3>
                         <p class="info">32100 Vinkovci, Zagrebačka 16</p>
                     </div>
                 </div>
                 <div class="contact__col--info__info">
                     <img src="/wp-content/themes/domagoj/src/assets/icons/phone-icon.svg" aria-hidden="true" />
                     <div>
                         <h3 class="text-bright">Telefon</h3>
                         <p class="info">098 13 52 377</p>
                     </div>
                 </div>
                 <div class="contact__col--info__info">
                     <img src="/wp-content/themes/domagoj/src/assets/icons/mail-icon.svg" aria-hidden="true" />
                     <div>
                         <h3 class="text-bright">Email</h3>
                         <p class="info">domagoj.dreznjak@gmail.com</p>
                     </div>
                 </div>
                 <div class="socials">
                     <h3 class="socials__heading">Pronađite nas i na društvenim mrežama</h3>
                     <div class="socials__wrapper">
                         <div class="social">
                             <a target="_blank" href="https://www.facebook.com/stannadan.vinkovci.3?sfnsn=wa"><img
                                     class="icon" src="/wp-content/themes/domagoj/src/assets/icons/fb-icon.svg"
                                     alt="socials"></a>
                         </div>
                         <div class="social">
                             <a target="_blank" href="tel:+385981352377"><img class="icon"
                                     src="/wp-content/themes/domagoj/src/assets/icons/whatsapp-icon.svg"
                                     alt="socials"></a>
                         </div>
                         <div class="social">
                             <a target="_blank" href="tel:+385981352377"><img class="icon"
                                     src="/wp-content/themes/domagoj/src/assets/icons/viber-icon.svg" alt="socials"></a>
                         </div>
                         <div class="social">
                             <a target="_blank"
                                 href="https://www.instagram.com/apartmani_vinkovci?utm_source=qr&igsh=ajZkamkzOGEyem80"><img
                                     class="icon" src="/wp-content/themes/domagoj/src/assets/icons/instagram-icon.svg"
                                     alt="socials"></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>