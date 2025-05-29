
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
