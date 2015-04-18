<div class="content">
	<div class="left">

	@for($i=0; $i<5; $i++)
		<div class="news">
			<div class="news-entry-header">
				<div class="news-top">
					<div class="news-logo">
						<img src="http://0.gravatar.com/avatar/2712e2b275690a66493bc3c27bac2ef6?s=70&d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&r=G" alt="">
					</div>
					<div class="news-name"><a href='./new'>FULLY RESPONSIVE LAYOUT</a></div>
				</div>
				<div class="news-info">
					<div class="news-date"><i class="fa fa-clock-o"></i> December 20, 2014</div>
					<div class="news-features"><i class="fa fa-folder-open-o"></i> Features</div>
					<div class="news-comments"><i class="fa fa-comment-o"></i> 3 Comments</div>
				</div>
			</div>
			
			<div class="news-middle">
				<div class="news-image">
					<img src="http://demo.mhthemes.com/cicero/wp-content/uploads/sites/3/2014/12/Bus-610x343.jpg" alt="">
				</div>
				<div class="news-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita no sea takimata sanctus est Lorem ipsum dolor sit amet. Learn more about MH Cicero WordPress Theme.</div>
			</div>
			<ul class="news-bottom">
				<li><a class='news-readmore' href='./new'>Read More</a></li>
				<li class="spacer"></li>
			</ul>
			<div class="spacer"></div>
		</div>
	@endfor

		{{-- <div class="pagination">
			<span class="pagination-numbers">1</span>
			<span class="pagination-numbers">2</span>
			<span class="pagination-numbers">3</span>
			<span class="pagination-numbers">next</span>
		</div> --}}
	</div>
	<div class="right">
		<div class="search widget">
			<input type="text" class="search-input">
			<div class="search-button">SEARCH</div>
		</div>
		<div class="about widget">
			<div class="widget-title">ABOUT ME</div>
			<div class="about-logo">
				<img src="http://0.gravatar.com/avatar/2712e2b275690a66493bc3c27bac2ef6?s=150&d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D150&r=G" alt="">
			</div>
			<div class="about-description">
				MH Themes is specialized in high quality Premium WordPress Themes for online magazines, news websites, professional blogs and other editorial related projects.
			</div>
		</div>
		{{-- <div class="follow widget">
			<div class="widget-title">FOLLOW ON FACEBOOK</div>
		</div> --}}
		<div class="popular widget">
			<div class="widget-title">POPULAR POSTS</div>
			<div class="widget-content">

				@for($i=0; $i<5; $i++)
					<div class="widget-post">
						<div class="widget-image">
							<img src="http://demo.mhthemes.com/cicero/wp-content/uploads/sites/3/2014/12/Band-70x70.jpg" alt="">
						</div>
						<div class="widget-data">
							<div class="popular-data-title">MULTI-LEVEL THREADED COMMENTS</div>
							<div class="popular-data-date">MAY 20, 2015</div>
						</div>
					</div>
				@endfor

			</div>
		</div>
		<div class="latest widget">
			<div class="widget-title">LATEST POSTS</div>

			@for($i=0; $i<5; $i++)
				<div class="widget-content">
					<div class="widget-post">
						<div class="widget-image">
							<img src="http://demo.mhthemes.com/cicero/wp-content/uploads/sites/3/2014/12/Band-70x70.jpg" alt="">
						</div>
						<div class="widget-data">
							<div class="latest-data-title">MULTI-LEVEL THREADED COMMENTS</div>
							<div class="latest-data-date">MAY 20, 2015</div>
						</div>
					</div>
				</div>
			@endfor

		</div>
		{{-- <div class="topics widget">
			<div class="widget-title">TOPICS</div>
		</div>
		<div class="authors widget">
			<div class="widget-title">AUTHORS</div>
		</div> --}}
		<div class="comments widget">
			<div class="widget-title">RECENT COMMENTS</div>

			<div class="widget-content">

				@for($i=0; $i<3; $i++)
					<div class="widget-post">
						<div class="widget-image">
							<img src="http://demo.mhthemes.com/cicero/wp-content/uploads/sites/3/2014/12/Band-70x70.jpg" alt="">
						</div>
						<div class="widget-data">
							<div class="comments-data-title">Brooklyn on</div>
							<div class="comments-data-post">TRANSLATION READY</div>
						</div>
					</div>
				@endfor

			</div>
		</div>
	</div>
</div>