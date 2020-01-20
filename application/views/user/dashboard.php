
			<main class="content">
				<div class="slider">
					<ul class="slides">
						<li data-background="<?php echo base_url() ?>/assets/assets_user/dummy/slide1.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">Wisata Tugu Yogyakarta</h2>
									<p>Terletak dalam sumbu imajiner antara Pantai Parangtritis, Tugu, dan Gunung Merapi, Keraton Yogyakarta menjadi simbol kejayaan Kasultanan Ngayogyakarta Hadiningrat dan juga detak jantung kebudayaan Jawa.</p>
								</div>
							</div>
						</li>
						<li data-background="<?php echo base_url() ?>/assets/assets_user/dummy/slide2.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">Serunya Wisata Jeep Merapi</h2>
									<p>Merapi Lava Tour mengajak wisatawan naik mobil Jeep menyusuri bekas aliran lahar pasca letusan Gunung Merapi. Sepanjang perjalanan, wisatawan akan diajak mampir ke beberapa destinasi pasca letusan seperti Museum Sisa Hartaku dan Bunker Kaliadem.</p>
								</div>
							</div>
						</li>
						<li data-background="<?php echo base_url() ?>/assets/assets_user/dummy/slide3.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">Pantai Parangtritis</h2>
									<p>Pantai Parangtritis punya legenda dan mitos yang kuat. Pantai ini konon merupakan sebuah pintu masuk ke kerajaan Ratu Pantai Selatan yang dikenal sebagai Nyi Roro Kidul. Konon katanya Nyi Roro Kidul suka sekali dengan warna hijau, oleh karena itu, mereka yang datang ke pantai ini disarankan tidak mengenakan pakaian berwarna hijau.</p>
								</div>
							</div>
						</li>
					</ul>
					<div class="flexslider-controls">
						<div class="container">
							<ol class="flex-control-nav">
								<li><a>1</a></li>
								<li><a>2</a></li>
								<li><a>3</a></li>
							</ol>
						</div>
					</div>
				</div>

				<div class="fullwidth-block features-section">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInLeft" data-wow-delay=".3s">
									<i class="icon-fly-calendar"></i>
									<h3 class="feature-title">Jadwal Liburan</h3>
									<p>Konsultasikan jadwal liburan Anda dengan kami. Atau Anda bisa minta bantuan kami untuk reservasi tiket perjalanan Anda.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInLeft">
									<i class="icon-hotel"></i>
									<h3 class="feature-title">Pilih Hotel</h3>
									<p>Kami sudah bekerja sama dengan lebih dari 20 Hotel Bintang 3 dan lebih dari 10 Hotel Bintang 4 yang ada di Yogyakarta.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInRight">
									<i class="icon-ride"></i>
									<h3 class="feature-title">Kebersihan Kendaraan</h3>
									<p>Jangan khawatir tentang kebersihan kendaraan yang akan Anda pakai, karena kami selalu ingin memanjakan Anda dalam perjalanan dengan kendaraan yang terawat dan selalu bersih.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInRight" data-wow-delay=".3s">
									<i class="icon-departure"></i>
									<h3 class="feature-title">Antar Jemput</h3>
									<p>Kami siap melayani hingga akhir penghujung liburan Anda, dengan siap untuk mengantarkan Anda ke Bandara atau Stasiun untuk kepulangan Anda.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block offers-section" data-bg-color="#f1f1f1">
					<div class="container">
						<h2 class="section-title">Berita Terbaru Bulan ini.</h2>
						<div class="row">
							<?php foreach ($berita as $brt) : ?>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn">
									<figure class="featured-image"><img src="<?php echo base_url().'/assets/assets_user/dummy/'.$brt->foto ?>" alt=""></figure>
									<h2 class="entry-title"><a href=""><?php echo $brt->judul_berita ?></a></h2>
									<?php echo word_limiter($brt->isi_berita, 15) ?>
									<p></p>
									<a href="#" class="button">See details</a>
								</article>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>

				<div class="fullwidth-block testimonial-section">
					<div class="container">
						<h2 class="section-title">Testimonials</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp">
									<figure class="avatar"><img src="<?php echo base_url() ?>/assets/assets_user/dummy/person-1.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
										<cite>Jessica Tracy</cite>
										<span>Creative agency CEO</span>
									</blockquote>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp" data-wow-delay=".2s">
									<figure class="avatar"><img src="<?php echo base_url() ?>/assets/assets_user/dummy/person-2.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
										<cite>John Smith</cite>
										<span>Traveler</span>
									</blockquote>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp" data-wow-delay=".4s">
									<figure class="avatar"><img src="<?php echo base_url() ?>/assets/assets_user/dummy/person-3.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
										<cite>Susan Webb</cite>
										<span>Hairdresser</span>
									</blockquote>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp" data-wow-delay=".6s">
									<figure class="avatar"><img src="<?php echo base_url() ?>/assets/assets_user/dummy/person-4.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
										<cite>Sarah Brown</cite>
										<span>Athlete</span>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main> <!-- .content -->

