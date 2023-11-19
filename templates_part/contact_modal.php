
<?php get_header(); ?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div id="modal-container" class="active">

      <div class="overlay modal-trigger"></div>
     
      <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="dialogDesc">
        <button 
        aria-label="close modal"
        class="close-modal modal-trigger">X</button>
        <img src="<?php echo get_template_directory_uri(); ?> '/assets/contact_img.png'" alt="Image de contact">
        <?php echo do_shortcode ('[contact-form-7 id="92fc754" title="Formulaire de contact 1"]') ?>
      </div>

    </div>

    <button class="modal-btn modal-trigger">Contact</button>





    <script src="script.js"></script>