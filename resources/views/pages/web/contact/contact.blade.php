@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin">
            <div class="container">
                <hr>
                <p class="title-page"><strong>{{trans('content.contact')}}</strong></p>               
                <hr>
            </div>            
        </section>

        <section class="contactus">
            <div class="container">
                <h3 class="title">{{trans('content.callme')}}</h3>
                <div class="row">
                    <div class="contactus-desc col-sm-6">
                        <form>
                          <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" placeholder="masukan nama">
                          </div>

                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" class="form-control" placeholder="masukan email">
                          </div>

                          <div class="form-group">
                            <label for="telp">No Telepon</label>
                            <input type="tel" id="telp" class="form-control" placeholder="masukan no telepon">
                          </div>

                          <!-- select class form control untuk membuat combo box -->
                            <div class="form-group"> 
                                <label for="Sepeda">Sepeda</label>
                                <select class="form-control">
                                    <option>-- Pilih Kategori --</option>
                                    <option>Baby Series</option>
                                    <option>Baby Walker</option>
                                    <option>Bycycle</option>
                                    <option>Ride On Car</option>
                                    <option value=" ">Tricycle</option>
                                </select>
                            </div>

                          <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" rows="10" placeholder="masukan pesan"></textarea> 
                          </div>
                          
                        </form>
                    </div>

                    <div class="contactus-desc col-sm-6">
                        <form>
                          <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" placeholder="masukan nama">
                          </div>

                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" class="form-control" placeholder="masukan email">
                          </div>

                          <div class="form-group">
                            <label for="telp">No Telepon</label>
                            <input type="tel" id="telp" class="form-control" placeholder="masukan no telepon">
                          </div>

                          <!-- select class form control untuk membuat combo box -->
                            <div class="form-group"> 
                                <label for="Sepeda">Sepeda</label>
                                <select class="form-control">
                                    <option>-- Pilih Kategori --</option>
                                    <option>Baby Series</option>
                                    <option>Baby Walker</option>
                                    <option>Bycycle</option>
                                    <option>Ride On Car</option>
                                    <option value=" ">Tricycle</option>
                                </select>
                            </div>

                          <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" rows="10" placeholder="masukan pesan"></textarea> 
                          </div>
                          
                          <div style="float: right;"> 
                                <button type="submit" class="btn btn-success">Kirim Pesan</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>          
        </section>

        <section class="faq">   
            <div class="container"> 
                <div class="row">   
                    <div class="col-sm-12"> 
                        <h1 class="faqtitle">FAQ</h1>
                        <div class="row">   
                            <div class="col-sm-6">  
                                    <div class="faqdesc">   
                                        <p><strong>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa temporibus facere quaerat cumque. Animi id neque, tempore quas earum libero aut beatae mollitia?</strong></p>
                                        <p class="faqdesc-sub"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa temporibus facere quaerat cumque. Animi id neque, tempore quas earum libero aut beatae mollitia rerum repellendus, ducimus fuga, quam illum.</p>   
                                    </div>
                                    <div class="faqdesc">   
                                        <p><strong>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa temporibus facere quaerat cumque. Animi id neque, tempore quas earum libero aut beatae mollitia?</strong></p>
                                        <p class="faqdesc-sub"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa temporibus facere quaerat cumque. Animi id neque, tempore quas earum libero aut beatae mollitia rerum repellendus, ducimus fuga, quam illum.</p>   
                                    </div>
                            </div>
                            <div class="col-sm-6">  
                                    <div class="faqdesc">   
                                        <p><strong>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa temporibus facere quaerat cumque. Animi id neque, tempore quas earum libero aut beatae mollitia?</strong></p>
                                        <p class="faqdesc-sub"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa temporibus facere quaerat cumque. Animi id neque, tempore quas earum libero aut beatae mollitia rerum repellendus, ducimus fuga, quam illum.</p>   
                                    </div>

                                    <div class="faqdesc">   
                                        <p><strong>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa temporibus facere quaerat cumque. Animi id neque, tempore quas earum libero aut beatae mollitia?</strong></p>
                                        <p class="faqdesc-sub"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa temporibus facere quaerat cumque. Animi id neque, tempore quas earum libero aut beatae mollitia rerum repellendus, ducimus fuga, quam illum.</p>   
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection