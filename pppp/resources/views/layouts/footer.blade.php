<footer> 
 <section class="wrapper__section p-0">
        <div class="wrapper__section__components">
            <!-- Footer -->
            <footer>
    <div class="wrapper__footer bg__footer-dark pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget__footer">
                        
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <figure class="image-logo">
                        @if($setting->image)
                        <img src="{{asset('settings')}}/{{$setting->image}}" alt="" class="logo-footer">
                        @endif
                        </figure>
                    </div>
                    <div class="col-md-8 my-auto ">

                        <div class="social__media">

                            <ul class="list-inline">
                            @foreach($setting->social as $key=>$social)
                            <a href="{{$social}}" class="social-icon"><i class="fa fa-{{$icons[$key]}}"></i></a>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer bottom -->
    <div class="wrapper__footer-bottom bg__footer-dark">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="border-top-1 bg__footer-bottom-section">
                        <ul class="list-inline link-column">
                            <li class="list-inline-item">
                                <a href="{{url('contact-us')}}">
                                    contact us
                                </a>
                            </li>
                            @foreach($pages as $page)
                            <li class="list-inline-item">
                                <a href="{{url('page')}}/{{$page->slug}}">{{$page->title}}</a>
                            </li>
                            @endforeach
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span>
                                    {{$setting->about}} 
                                </span>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>

    </div>
</footer>
        </div>
    </section>
<script type="text/javascript" src="{{asset('js/index.bundle.js')}}"></script></body>
