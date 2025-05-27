<div>
    <main class="main">

    <!-- Blog Hero Section -->
    <section id="blog-hero" class="blog-hero section">

        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="blog-grid">
                <!-- Featured Post (Large) -->
                <article class="blog-item featured aos-init aos-animate" data-aos="fade-up">
                    <img src="{{ $articles[0]->banner }}" alt="Blog Image" class="img-fluid">
                    <div class="blog-content">
                        <div class="post-meta">
                            <span class="date">{{$articles[0]->created_at->format("M j , Y")}}</span>
                            <span class="category">{{ $articles[0]->categories[0]->name }}</span>
                        </div>
                        <h2 class="post-title">
                            <a href="blog-details.html" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                                {{$articles[0]->title}}
                            </a>
                        </h2>
                    </div>
                </article><!-- End Featured Post -->

                <!-- Regular Posts -->
                <article class="blog-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ $articles[1]->banner }}" alt="Blog Image" class="img-fluid">
                    <div class="blog-content">
                        <div class="post-meta">
                            <span class="date"> {{ $articles[1]->created_at->format("M j , Y") }} </span>
                            <span class="category"> {{ $articles[1]->categories[0]->name ?? "" }} </span>
                        </div>
                        <h3 class="post-title">
                            <a href="blog-details.html" title="Sed do eiusmod tempor incididunt ut labore">{{$articles[1]->title ?? ''}}</a>
                        </h3>
                    </div>
                </article><!-- End Blog Item -->
                @php
                    $articles->shift(2);
                @endphp
                @foreach($articles as $article)
                <article class="blog-item aos-init" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ $article->banner }}" alt="Blog Image" class="img-fluid">
                    <div class="blog-content">
                        <div class="post-meta">
                            <span class="date">{{ $article->created_at->format("M j , Y") }}</span>
                            <span class="category">{{ $article->categories[0]->name ?? '' }}</span>
                        </div>
                        <h3 class="post-title">
                            <a href="blog-details.html" title="Ut enim ad minim veniam, quis nostrud exercitation">{{ $article->title }}</a>
                        </h3>
                    </div>
                </article><!-- End Blog Item -->
                @endforeach

            </div>

        </div>

    </section><!-- /Blog Hero Section -->

    <!-- Featured Posts Section -->
    <section id="featured-posts" class="featured-posts section">

        <!-- Section Title -->
        <div class="container section-title aos-init" data-aos="fade-up">
            <h2>Featured Posts</h2>
            <div><span>Check Our</span> <span class="description-title">Featured Posts</span></div>
        </div><!-- End Section Title -->

        <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">

            <div class="blog-posts-slider swiper init-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 800,
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": 3,
                      "spaceBetween": 30,
                      "breakpoints": {
                        "320": {
                          "slidesPerView": 1,
                          "spaceBetween": 20
                        },
                        "768": {
                          "slidesPerView": 2,
                          "spaceBetween": 20
                        },
                        "1200": {
                          "slidesPerView": 3,
                          "spaceBetween": 30
                        }
                      }
                    }
                </script>

                <div class="swiper-wrapper" id="swiper-wrapper-dbd1310b4710b91e5d" aria-live="off">
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5" data-swiper-slide-index="0" style="width: 412px; margin-right: 30px;">
                        <div class="blog-post-item">
                            <img src="assets/img/blog/blog-post-portrait-1.webp" alt="Blog Image">
                            <div class="blog-post-content">
                                <div class="post-meta">
                                    <span><i class="bi bi-person"></i> Julia Parker</span>
                                    <span><i class="bi bi-clock"></i> Jan 15, 2025</span>
                                    <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                                </div>
                                <h2><a href="#">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</a></h2>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce porttitor metus eget lectus consequat, sit amet feugiat magna vulputate.</p>
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End slide item -->

                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 5" data-swiper-slide-index="1" style="width: 412px; margin-right: 30px;">
                        <div class="blog-post-item">
                            <img src="assets/img/blog/blog-post-portrait-2.webp" alt="Blog Image">
                            <div class="blog-post-content">
                                <div class="post-meta">
                                    <span><i class="bi bi-person"></i> Mark Wilson</span>
                                    <span><i class="bi bi-clock"></i> Jan 18, 2025</span>
                                    <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                                </div>
                                <h2><a href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a></h2>
                                <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End slide item -->

                    <div class="swiper-slide" role="group" aria-label="3 / 5" data-swiper-slide-index="2" style="width: 412px; margin-right: 30px;">
                        <div class="blog-post-item">
                            <img src="assets/img/blog/blog-post-portrait-3.webp" alt="Blog Image">
                            <div class="blog-post-content">
                                <div class="post-meta">
                                    <span><i class="bi bi-person"></i> Sarah Johnson</span>
                                    <span><i class="bi bi-clock"></i> Jan 21, 2025</span>
                                    <span><i class="bi bi-chat-dots"></i> 15 Comments</span>
                                </div>
                                <h2><a href="#">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                                <p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum semper nisi.</p>
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End slide item -->

                    <div class="swiper-slide" role="group" aria-label="4 / 5" data-swiper-slide-index="3" style="width: 412px; margin-right: 30px;">
                        <div class="blog-post-item">
                            <img src="assets/img/blog/blog-post-portrait-4.webp" alt="Blog Image">
                            <div class="blog-post-content">
                                <div class="post-meta">
                                    <span><i class="bi bi-person"></i> David Brown</span>
                                    <span><i class="bi bi-clock"></i> Jan 24, 2025</span>
                                    <span><i class="bi bi-chat-dots"></i> 10 Comments</span>
                                </div>
                                <h2><a href="#">Et harum quidem rerum facilis est et expedita distinctio</a></h2>
                                <p>Donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim.</p>
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End slide item -->

                    <div class="swiper-slide" role="group" aria-label="5 / 5" data-swiper-slide-index="4" style="width: 412px; margin-right: 30px;">
                        <div class="blog-post-item">
                            <img src="assets/img/blog/blog-post-portrait-5.webp" alt="Blog Image">
                            <div class="blog-post-content">
                                <div class="post-meta">
                                    <span><i class="bi bi-person"></i> Emma Davis</span>
                                    <span><i class="bi bi-clock"></i> Jan 27, 2025</span>
                                    <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                                </div>
                                <h2><a href="#">Nam libero tempore, cum soluta nobis est eligendi optio</a></h2>
                                <p>Aenean leo ligula porttitor eu consequat vitae eleifend ac enim aliquam lorem ante dapibus in viverra.</p>
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End slide item -->
                </div>

                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

        </div>

    </section><!-- /Featured Posts Section -->

    <!-- Category Section Section -->
    <section id="category-section" class="category-section section">

        <!-- Section Title -->
        <div class="container section-title aos-init" data-aos="fade-up">
            <h2>Category Section</h2>
            <div> <span class="description-title">Category Section</span></div>
        </div><!-- End Section Title -->

        <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">
            <!-- Featured Posts -->
            <div class="row gy-4 mb-4">
                <div class="col-lg-4">
                    <article class="featured-post">
                        <div class="post-img">
                            <img src="assets/img/blog/blog-post-6.webp" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="post-content">
                            <div class="category-meta">
                                <span class="post-category">Health</span>
                                <div class="author-meta">
                                    <img src="assets/img/person/person-f-13.webp" alt="" class="author-img">
                                    <span class="author-name">William G.</span>
                                    <span class="post-date">28 April 2024</span>
                                </div>
                            </div>
                            <h2 class="title">
                                <a href="blog-details.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                            </h2>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="featured-post">
                        <div class="post-img">
                            <img src="assets/img/blog/blog-post-7.webp" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="post-content">
                            <div class="category-meta">
                                <span class="post-category">Education</span>
                                <div class="author-meta">
                                    <img src="assets/img/person/person-m-10.webp" alt="" class="author-img">
                                    <span class="author-name">Emma D.</span>
                                    <span class="post-date">30 May 2024</span>
                                </div>
                            </div>
                            <h2 class="title">
                                <a href="blog-details.html">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis</a>
                            </h2>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="featured-post">
                        <div class="post-img">
                            <img src="assets/img/blog/blog-post-5.webp" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="post-content">
                            <div class="category-meta">
                                <span class="post-category">Gaming</span>
                                <div class="author-meta">
                                    <img src="assets/img/person/person-f-14.webp" alt="" class="author-img">
                                    <span class="author-name">James F.</span>
                                    <span class="post-date">3 June 2024</span>
                                </div>
                            </div>
                            <h2 class="title">
                                <a href="blog-details.html">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</a>
                            </h2>
                        </div>
                    </article>
                </div>
            </div>

            <!-- List Posts -->
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <article class="list-post">
                        <div class="post-img">
                            <img src="assets/img/blog/blog-post-6.webp" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="post-content">
                            <div class="category-meta">
                                <span class="post-category">Gaming</span>
                            </div>
                            <h3 class="title">
                                <a href="blog-details.html">Quis autem vel eum iure reprehenderit qui in ea voluptate</a>
                            </h3>
                            <div class="post-meta">
                                <span class="read-time">2 mins read</span>
                                <span class="post-date">6 April 2026</span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <article class="list-post">
                        <div class="post-img">
                            <img src="assets/img/blog/blog-post-9.webp" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="post-content">
                            <div class="category-meta">
                                <span class="post-category">Gaming</span>
                            </div>
                            <h3 class="title">
                                <a href="blog-details.html">At vero eos et accusamus et iusto</a>
                            </h3>
                            <div class="post-meta">
                                <span class="read-time">2 mins read</span>
                                <span class="post-date">12 June 2026</span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <article class="list-post">
                        <div class="post-img">
                            <img src="assets/img/blog/blog-post-10.webp" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="post-content">
                            <div class="category-meta">
                                <span class="post-category">Gaming</span>
                            </div>
                            <h3 class="title">
                                <a href="blog-details.html">Et harum quidem rerum facilis est et expedita distinctio</a>
                            </h3>
                            <div class="post-meta">
                                <span class="read-time">2 mins read</span>
                                <span class="post-date">9 May 2026</span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <article class="list-post">
                        <div class="post-img">
                            <img src="assets/img/blog/blog-post-2.webp" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="post-content">
                            <div class="category-meta">
                                <span class="post-category">Gaming</span>
                            </div>
                            <h3 class="title">
                                <a href="blog-details.html">Nam libero tempore, cum soluta nobis est eligendi</a>
                            </h3>
                            <div class="post-meta">
                                <span class="read-time">2 mins read</span>
                                <span class="post-date">15 July 2026</span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <article class="list-post">
                        <div class="post-img">
                            <img src="assets/img/blog/blog-post-1.webp" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="post-content">
                            <div class="category-meta">
                                <span class="post-category">Gaming</span>
                            </div>
                            <h3 class="title">
                                <a href="blog-details.html">Temporibus autem quibusdam et aut officiis debitis</a>
                            </h3>
                            <div class="post-meta">
                                <span class="read-time">2 mins read</span>
                                <span class="post-date">18 August 2026</span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <article class="list-post">
                        <div class="post-img">
                            <img src="assets/img/blog/blog-post-3.webp" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="post-content">
                            <div class="category-meta">
                                <span class="post-category">Gaming</span>
                            </div>
                            <h3 class="title">
                                <a href="blog-details.html">Itaque earum rerum hic tenetur a sapiente delectus</a>
                            </h3>
                            <div class="post-meta">
                                <span class="read-time">2 mins read</span>
                                <span class="post-date">21 September 2026</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

    </section><!-- /Category Section Section -->


    </section><!-- /Call To Action 2 Section -->

    <!-- Latest Posts Section -->
    <section id="latest-posts" class="latest-posts section">

        <!-- Section Title -->
        <div class="container section-title aos-init" data-aos="fade-up">
            <h2>Latest Posts</h2>
            <div><span>Check Our</span> <span class="description-title">Latest Posts</span></div>
        </div><!-- End Section Title -->

        <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">

                @foreach($latest_articles as $article)
                <div class="col-lg-4">
                    <article>

                        <div class="post-img">
                            <img src="{{ $article->banner }}" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">{{ $article->categories[0]->name ?? "" }}</p>

                        <h2 class="title">
                            <a href="blog-details.html">{{ $article->title }}</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="{{ $article->author->profile }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                                <p class="post-author">{{ $article->author->name }}</p>
                                <p class="post-date">
                                    <time datetime="2022-01-01"> {{ $article->created_at->format("M j , Y") }} </time>
                                </p>
                            </div>
                        </div>

                    </article>
                </div>
                @endforeach
            </div>
        </div>

    </section><!-- /Latest Posts Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">
        <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="cta-content aos-init" data-aos="fade-up" data-aos-delay="200">
                        <h2>Subscribe to our newsletter</h2>
                        <p>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form cta-form aos-init" data-aos="fade-up" data-aos-delay="300">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Email address..." aria-label="Email address" aria-describedby="button-subscribe">
                                <button class="btn btn-primary" type="submit" id="button-subscribe">Subscribe</button>
                            </div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cta-image aos-init" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/cta/cta-1.webp" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Call To Action Section -->
    </main>
</div>
