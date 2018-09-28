            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-3 marginbottomx">
                        <div class="brandambasador">
                            <img src="{{ asset('assets/img/kakseto.png')}}" alt="kak seto">
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-9 marginbottomx mobilepading">
                        <div class="form-question">

                            @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <p style="color: blue">{{ session('berhasil')}}</p>
                            <form method="POST" action="{{url('/question/input')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>{{trans('footer.question')}}</label>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="question" name="question" class="form-control" placeholder="question">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-info" name="submit" value="submit" style="float: right" type="submit">
                                </div>                                
                            </form>
                        </div>
                        <div class="social-media">
                            <img src="{{ asset('assets/img/fb.png')}}">
                            <img src="{{ asset('assets/img/in.png')}}">
                            <img src="{{ asset('assets/img/ig.png')}}">
                            <img src="{{ asset('assets/img/in.png')}}">
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="widget">
                            <p class="instamobile marginbottom">Instagram Feed</p>
                            <!-- SnapWidget -->
                            <script src="https://snapwidget.com/js/snapwidget.js"></script><iframe src="https://snapwidget.com/embed/492233" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
                        </div>
                        <div class="sponsor">  
                            <div class="col-xs-2">
                                <img src="{{ asset('assets/img/FT-03.png')}}" class="sponsor1" alt="">
                            </div>
                            <div class="col-xs-2">
                                <img src="{{ asset('assets/img/FT-04.png')}}" class="sponsor2" alt="">
                            </div>
                            <div class="col-xs-2">
                                <img src="{{ asset('assets/img/FT-05.png')}}" class="sponsor3" alt="">
                            </div>
                            <div class="col-xs-2">
                                <img src="{{ asset('assets/img/FT-06.png')}}" class="sponsor4" alt="">
                            </div>
                            <div class="col-xs-3">
                                <img src="{{ asset('assets/img/FT-07.png')}}" class="sponsor5" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>