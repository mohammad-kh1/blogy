<div>

        <div class="container">
            <div class="row">
                          <!-- Blog Details Section -->
            <div class="col-lg-8">
                  <section id="blog-details" class="blog-details section">
                    <div class="container aos-init aos-animate" data-aos="fade-up">

                      <article class="article">

                        <div class="hero-img aos-init aos-animate" data-aos="zoom-in">
                          <img src="{{ $article->banner }}" alt="Featured blog image" class="img-fluid" loading="lazy">
                          <div class="meta-overlay">
                            <div class="meta-categories">
                              <a href="#" class="category">{{ $article->categories[0]->name ?? '' }}</a>
                              <span class="divider">•</span>
                              <span class="reading-time"><i class="bi bi-clock"></i> {{$article->duration}} min read</span>
                            </div>
                          </div>
                        </div>

                        <div class="article-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                          <div class="content-header">
                            <h1 class="title">{{ $article->title }}</h1>

                            <div class="author-info">
                              <div class="author-details">
                                <img src="{{ $article->author->profile }}" alt="Author" class="author-img">
                                <div class="info">
                                  <h4>{{  $article->author->name }}</h4>
                                </div>
                              </div>
                              <div class="post-meta">
                                <span class="date"><i class="bi bi-calendar3"></i>{{ $article->created_at->format("M j , Y") }}</span>
                                <span class="divider">•</span>
                                <span class="comments"><i class="bi bi-chat-text"></i> {{ count($article->comments) }} Comments</span>
                              </div>
                            </div>
                          </div>


                          <div class="content">
                              {!! $article->body !!}
                          </div>
                          <div class="meta-bottom">
                            <div class="tags-section">
                              <h4>Related Topics</h4>
                              <div class="tags">
                                @foreach($article->categories as $cat)
                                <a href="#" class="tag">{{ $cat->name }}</a>
                                @endforeach
                              </div>
                            </div>

                            <div class="share-section">
                              <h4>Share Article</h4>
                              <div class="social-links">
                                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="copy-link" title="Copy Link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>

                      </article>

                    </div>
                  </section><!-- /Blog Details Section -->
              </div>
                @include("components.layouts.sidebar")
            </div>
        </div>



          <!-- Blog Author Section -->
          <section id="blog-author" class="blog-author section">

            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="author-box">
                <div class="row align-items-center">
                  <div class="col-lg-3 col-md-4 text-center">
                    <img src="{{ $article->author->profile }}" class="author-img rounded-circle" alt="" loading="lazy">
                    <div class="author-social-links mt-3">
                    @foreach($article->author->socials as $social)
                        <a href="{{ $social->address }}" class="{{ strtolower($social->title) }}">
                            <i class="bi bi-{{ strtolower($social->title) }}"></i>
                        </a>
                    @endforeach

                    </div>
                  </div>

                  <div class="col-lg-9 col-md-8">
                    <div class="author-content">
                      <h3 class="author-name">{{ $article->author->name }}</h3>
                      <span class="author-title">{{ $article->author->role ?? '' }}</span>

                      <div class="author-bio mt-3">
                        {{ $article->author->descriptino ?? '' }}
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>


          </section><!-- /Blog Author Section -->

          <!-- Blog Comments Section -->
          <section id="blog-comments" class="blog-comments section">

            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

              <div class="blog-comments-3">
                <div class="section-header">
                  <h3>Discussion <span class="comment-count">({{$article->comments->count()}})</span></h3>
                </div>

                <div class="comments-wrapper">


                  <!-- Comment 2 with replies -->
                  <article class="comment-card">
                    <div class="comment-header">
                      <div class="user-info">
                        <img src="assets/img/person/person-m-9.webp" alt="User avatar" loading="lazy">
                        <div class="meta">
                          <h4 class="name">James Cooper</h4>
                          <span class="date"><i class="bi bi-calendar3"></i> February 13, 2025</span>
                        </div>
                      </div>
                    </div>
                    <div class="comment-content">
                      <p>Quisque ut nisi. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Suspendisse non nisl sit amet velit hendrerit rutrum. Ut leo. Ut a nisl id ante tempus hendrerit.</p>
                    </div>
                    <div class="comment-actions">
                      <button class="action-btn like-btn">
                        <i class="bi bi-hand-thumbs-up"></i>
                        <span>8</span>
                      </button>
                      <button class="action-btn reply-btn">
                        <i class="bi bi-reply"></i>
                        <span>Reply</span>
                      </button>
                    </div>

                    <!-- Reply Thread -->
                    <div class="reply-thread">
                      <!-- Reply 1 -->
                      <article class="comment-card reply">
                        <div class="comment-header">
                          <div class="user-info">
                            <img src="assets/img/person/person-f-9.webp" alt="User avatar" loading="lazy">
                            <div class="meta">
                              <h4 class="name">Emily Parker</h4>
                              <span class="date"><i class="bi bi-calendar3"></i> February 13, 2025</span>
                            </div>
                          </div>
                        </div>
                        <div class="comment-content">
                          <p>Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        </div>
                        <div class="comment-actions">
                          <button class="action-btn like-btn">
                            <i class="bi bi-hand-thumbs-up"></i>
                            <span>5</span>
                          </button>
                          <button class="action-btn reply-btn">
                            <i class="bi bi-reply"></i>
                            <span>Reply</span>
                          </button>
                        </div>
                      </article>

                      <!-- Reply 2 -->
                      <article class="comment-card reply">
                        <div class="comment-header">
                          <div class="user-info">
                            <img src="assets/img/person/person-f-7.webp" alt="User avatar" loading="lazy">
                            <div class="meta">
                              <h4 class="name">Daniel Brown</h4>
                              <span class="date"><i class="bi bi-calendar3"></i> February 13, 2025</span>
                            </div>
                          </div>
                        </div>
                        <div class="comment-content">
                          <p>Nam commodo suscipit quam. Vestibulum ullamcorper mauris at ligula. Fusce fermentum odio nec arcu.</p>
                        </div>
                        <div class="comment-actions">
                          <button class="action-btn like-btn">
                            <i class="bi bi-hand-thumbs-up"></i>
                            <span>3</span>
                          </button>
                          <button class="action-btn reply-btn">
                            <i class="bi bi-reply"></i>
                            <span>Reply</span>
                          </button>
                        </div>
                      </article>
                    </div>
                  </article>

                </div>
              </div>

            </div>

          </section><!-- /Blog Comments Section -->

          <!-- Blog Comment Form Section -->
          <section id="blog-comment-form" class="blog-comment-form section">

            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

              <form method="post" role="form">

                <div class="section-header">
                  <h3>Share Your Thoughts</h3>
                  <p>Your email address will not be published. Required fields are marked *</p>
                </div>

                <div class="row gy-3">
                  <div class="col-md-6 form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your full name" required="">
                  </div>

                  <div class="col-md-6 form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address" required="">
                  </div>

                  <div class="col-12 form-group">
                    <label for="website">Website</label>
                    <input type="url" name="website" class="form-control" id="website" placeholder="Your website (optional)">
                  </div>

                  <div class="col-12 form-group">
                    <label for="comment">Your Comment *</label>
                    <textarea class="form-control" name="comment" id="comment" rows="5" placeholder="Write your thoughts here..." required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <button type="submit" class="btn-submit">Post Comment</button>
                  </div>
                </div>

              </form>

            </div>

          </section><!-- /Blog Comment Form Section -->

</div>
