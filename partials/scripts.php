	<div id="Side_slide" class="right dark" data-width="250">
		<div class="close-wrapper"><a href="#" class="close"><i class="icon-cancel-fine"></i></a></div>
		<div class="extras">
			<div class="extras-wrapper"></div>
		</div>
		<div class="menu_wrapper"></div>
	</div>
	<div id="body_overlay"></div>

	<!-- JS -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/jquery-migrate-3.4.0.min.js"></script>
	<script src="assets/js/mfn.menu.js"></script>
	<script src="assets/js/jquery.plugins.js"></script>
	<script src="assets/js/jquery.jplayer.min.js"></script>
	<script src="assets/js/animations/animations.js"></script>
	<script src="assets/js/translate3d.js"></script>
	<script src="assets/js/scripts.js"></script>
	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<!-- Marca el menú item activo según la página -->
	<script>
		(function () {
			var page = document.body.dataset.page;
			if (page) {
				var item = document.querySelector('#menu-main-menu li[data-page="' + page + '"]');
				if (item) item.classList.add('current-menu-item', 'page_item', 'current_page_item');
			}
		})();
	</script>
	<?= $page_extra_js ?? '' ?>

</body>
</html>
