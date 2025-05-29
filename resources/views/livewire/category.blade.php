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
                                            <img src="{{ $article->author->profile }}" alt="" class="img-fluid post-author-img flex-shrink-0">
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
                @include("components.layouts.sidebar")
            </div>
        </div>

    </main>
</div>
