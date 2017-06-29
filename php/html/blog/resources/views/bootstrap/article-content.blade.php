@extends('layouts.site')

@section('content')
    <div id="gtco-maine">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-12">
                    <article class="mt-negative">
                        <div class="text-left content-article">
                            <div class="row">
                                @if($article)
                                    <div class="row">
                                        <div class="col-md-12 animate-box">
                                            <h4>{{$article->title}}</h4>
                                            <p>{{$article->text}}</p>
                                        </div>
                                        <div class="col-md-4 animate-box">
                                            <figure>
                                                <img src="{{asset('images/img_5.jpg')}}"
                                                     alt="Free HTML5 Bootstrap Template by GetTemplates.co"
                                                     class="img-responsive">
                                                <figcaption>This is a sweet image caption. Far far away, behind the word
                                                    mountains, far from the countries Vokalia and Consonantia
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-4 animate-box">
                                            <figure>
                                                <img src="{{asset('images/img_6.jpg')}}"
                                                     alt="Free HTML5 Bootstrap Template by GetTemplates.co"
                                                     class="img-responsive">
                                                <figcaption>This is a sweet image caption. Far far away, behind the word
                                                    mountains, far from the countries Vokalia and Consonantia
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-4 animate-box">
                                            <figure>
                                                <img src="{{asset('images/img_7.jpg')}}"
                                                     alt="Free HTML5 Bootstrap Template by GetTemplates.co"
                                                     class="img-responsive">
                                                <figcaption>This is a sweet image caption. Far far away, behind the word
                                                    mountains, far from the countries Vokalia and Consonantia
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="related-title animate-box">Related Posts</h2>
                </div>
            </div>
            <div class="row row-pb-md">
                <div class="col-md-12">
                    <ul id="gtco-post-list">
                        <li class="one-third animate-box entry" data-animate-effect="fadeIn">
                            <a href="#">
                                <div class="entry-img" style="background-image: url({{asset('images/img_3.jpg')}})"></div>
                                <div class="entry-desc">
                                    <h3>How Web Hosting Can Impact Page Load Speed</h3>
                                    <p>She packed her seven versalia, put her initial into the belt and made herself on
                                        the way.</p>
                                </div>
                            </a>
                            <a href="#" class="post-meta">Business <span class="date-posted">4 days ago</span></a>
                        </li>
                        <li class="one-third animate-box entry" data-animate-effect="fadeIn">
                            <a href="#">
                                <div class="entry-img" style="background-image: url({{asset('images/img_4.jpg')}})"></div>
                                <div class="entry-desc">
                                    <h3>How Web Hosting Can Impact Page Load Speed</h3>
                                    <p>She packed her seven versalia, put her initial into the belt and made herself on
                                        the way.</p>
                                </div>
                            </a>
                            <a href="#" class="post-meta">Business <span class="date-posted">4 days ago</span></a>
                        </li>
                        <li class="one-third animate-box entry" data-animate-effect="fadeIn">
                            <a href="#">
                                <div class="entry-img" style="background-image: url({{asset('images/img_5.jpg')}})"></div>
                                <div class="entry-desc">
                                    <h3>How Web Hosting Can Impact Page Load Speed</h3>
                                    <p>She packed her seven versalia, put her initial into the belt and made herself on
                                        the way.</p>
                                </div>
                            </a>
                            <a href="#" class="post-meta">Business <span class="date-posted">4 days ago</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection