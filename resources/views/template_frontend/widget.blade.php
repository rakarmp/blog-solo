<div class="col-md-4">
  <!-- social widget -->
  <div class="aside-widget">
    <div class="section-title">
      <h2 class="title">Media Connect</h2>
    </div>
    <div class="social-widget">
      <ul>
        <li>
          <a href="https://www.linkedin.com/in/raka-abdi-rmp-a0771a245/" class="social-facebook">
            <i class="fa fa-linkedin"></i>
            Follow
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/rakarmp_fja/" class="social-instagram">
            <i class="fa fa-instagram"></i>
            Follow
          </a>
        </li>
        
      </ul>
    </div>
  </div>
  <!-- /social widget -->

  <!-- category widget -->
  <div class="aside-widget">
    <div class="section-title">
      <h2 class="title">Categories</h2>
    </div>
    <div class="category-widget">
      <ul>
        @foreach ($category_widget as $hasil)
          <li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }} <span>{{ $hasil->posts->count() }}</span></a></li>
        @endforeach
      </ul>
    </div>
  </div>
  <!-- /category widget -->

  <!-- post widget -->
  <div class="aside-widget">
    <div class="section-title">
      <h2 class="title">POSTINGAN TERBARU</h2>
    </div>
    <!-- post -->
    @foreach ($posts_widget as $data)
      <div class="post post-widget">
        <a class="post-img" href="blog-post.html"><img src="{{ asset($data->gambar) }}" alt=""></a>
        <div class="post-body">
          <div class="post-category">
            <a href="{{ route('blog.category', $data->category->slug) }}">{{ $data->category->name }}</a>
          </div>
          <h3 class="post-title"><a href="{{ route('blog.isi', $data->slug) }}">{{ $data->judul }}</a></h3>
        </div>
      </div>
    @endforeach
    <!-- /post -->
  </div>
  <!-- /post widget -->
</div>