	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="index.html" class="logo"><img src="https://img.icons8.com/external-flat-design-circle/40/000000/external-47-business-and-investment-flat-design-circle.png" alt=""></a>
						</div>
						<p>Solorun Blog Sederhana Dengan UI Modern Dan User Friendly, Memuat Content Dengan Ciri Khasnya</p>
						<ul class="contact-social">
							<li><a href="https://github.com/grizz12" class="social-github"><i class="fa fa-github"></i></a></li>
							<li><a href="https://api.whatsapp.com/send?phone=62895416187586" class="social-whatsapp"><i class="fa fa-whatsapp"></i></a></li>
							<li><a href="https://www.linkedin.com/in/raka-abdi-rmp-a0771a245/" class="social-linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/rakarmp_fja/" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Categories</h3>
						<div class="category-widget">
							<ul>
								@foreach ($category_widget as $hasil)
								  <li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }} <span>{{ $hasil->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Tags</h3>
						<div class="tags-widget">
							<ul>
								@foreach ($tag as $hasil)
								  <li><a href="#">{{ $hasil->name }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Newsletter</h3>
						<div class="newsletter-widget">
							<form>
								<p>Pingin Berita Terbaru Masuk Ke Email Sebagai Notif</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Send</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="{{ url('/') }}">Beranda</a></li>
						<li><a href="{{ route('blog.list') }}">List Post</a></li>
					</ul>
				</div>
        <div class="col-md-6 col-md-pull-6">
			<div class="footer-copyright">
				Copyright &copy;
				2022
				All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/grizz12/" target="_blank">RakaTrust X FujaTrust</a></a>

			</div>
        </div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
