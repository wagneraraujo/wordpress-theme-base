<footer class="container footer">
	<div class="footer-inner">
		<div class="text-row">
			<p>
				<?php bloginfo('name'); ?>
			</p>
			<p>
				Copyright <?php echo date('Y'); ?> &copy; All rights reserved
			</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
      },
  direction: "horizontal",
  loop: true,

  // If we need pagination

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar"
  }
    });
  </script>
</body>
</html>
