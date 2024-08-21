<footer id="footer">
  <!-- <h5>© <?php echo date("Y"); ?> My Blog</h5> -->
</footer>

<section class="modal" style="display: none" data-modal="modal-1">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <img
          src="<?php echo IMG_BASE . 'formal-1.webp' ?>"
          alt=""
          id=""
        />
      </div>
    </div>
  </section>

  <section class="modal" style="display: none" data-modal="modal-2">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <img
          src="<?php echo IMG_BASE . 'formal-white.webp' ?>"
          alt=""
          id=""
        />
      </div>
    </div>
  </section>

  <section class="modal" style="display: none" data-modal="modal-3">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <img
          src="<?php echo IMG_BASE . 'gift-new.webp' ?>"
          alt=""
          id=""
        />
      </div>
    </div>
  </section>

  </body>
</html>

<!-- wordpress footer includes -->
<?php wp_footer(); ?>