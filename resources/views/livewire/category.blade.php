<div>
    <main class="main __web-inspector-hide-shortcut__">

        <!-- Page Title -->
        <div class="page-title position-relative">


            <div class="title-wrapper">
                <h1>Blog Category</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
        </div><!-- End Page Title -->

        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <!-- Category Postst Section -->
                    <section id="category-postst" class="category-postst section">

                        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="row gy-4">
                                @foreach($articles as $article)
                                <div class="col-lg-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{$article->banner}}" alt="" class="img-fluid">
                                        </div>

                                        <p class="post-category"></p>

                                        <h2 class="title">
                                            <a href="blog-details.html">{{$article->title}}</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="assets/img/person/person-f-12.webp" alt="" class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">{{$article->author->name}}</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">{{$article->created_at->format("M j , Y")}}</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->
                                @endforeach
                            </div>
                        </div>

                    </section><!-- /Category Postst Section -->

                    <!-- Pagination 2 Section -->
                    <section id="pagination-2" class="pagination-2 section">

                        <div class="container">
                            <div class="d-flex justify-content-center">
                                <ul>
                                    <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#" class="active">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li>...</li>
                                    <li><a href="#">10</a></li>
                                    <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </section><!-- /Pagination 2 Section -->

                </div>

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

                        <!-- Search Widget -->
                        <div class="search-widget widget-item">

                            <h3 class="widget-title">Search</h3>
                            <form action="">
                                <input type="text">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>

                        </div><!--/Search Widget -->

                        <!-- Categories Widget -->
                        <div class="categories-widget widget-item">

                            <h3 class="widget-title">Categories</h3>
                            <ul class="mt-3">
                                @foreach($categories as $category)
                                <li><a href="#">{{$category->name}} <span>({{$category->articles_count}})</span></a></li>
                                @endforeach
                            </ul>

                        </div><!--/Categories Widget -->

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">

                            <h3 class="widget-title">Most Viewed Posts</h3>

                            @foreach($best_articles as $article)
                            <div class="post-item">
                                <img src="{{$article->banner}}" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="blog-details.html">{{$article->title}}</a></h4>
                                    <time datetime="2020-01-01">{{$article->created_at->format("M j , Y")}}</time>
                                </div>
                            </div><!-- End recent post item-->
                            @endforeach

                        </div><!--/Recent Posts Widget -->

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">

                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                @foreach($tags as $tag)
                                <li><a href="#">{{$tag->name}}</a></li>
                                @endforeach
                            </ul>

                        </div><!--/Tags Widget -->

                    </div>

                </div>

            </div>
        </div>

    </main>
</div>
