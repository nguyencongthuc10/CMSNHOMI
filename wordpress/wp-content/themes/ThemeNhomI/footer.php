 <?php  get_template_part('/assets/Module/7', 'content'); ?>
<footer>

    <div class="container">
        <p>
            Design by <a href="#">Nhom I
                &copy; <?php echo date('Y'); ?>
            </a>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-2.1.4.min.js"></script>
         <script src="<?php echo get_template_directory_uri() ?>/assets/./js/jquery.min.js"></script>
         <script src="<?php echo get_template_directory_uri() ?>/assets/./js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>       
 <script>


            var swiper = new Swiper('.swiper-container', {
              spaceBetween: 30,
              loop: true,
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
            });

          </script>
</html>