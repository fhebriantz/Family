@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin">
            <div class="container">
                <hr>
                <p class="title-page fonttitle"><strong>{{trans('content.contact')}}</strong></p>               
                <hr>
            </div>            
        </section>

        <section class="contactus">
            <div class="container">
                <div class="row">
                    <div class="contactus-desc col-sm-6">
                    <h3 class="faqtitle fonttitle">{{trans('content.callme')}}</h3>
                    @foreach($contact as $kontak)
                    <div class="contactdesc">   
                        <p><strong>{{$kontak->title}}</strong></p>
                        <p class="contactdesc-sub" style="font-size: 20px" >{!!$kontak->desc!!}</p>   
                    </div>
                    @endforeach
                    </div>

                    <div class="contactus-desc col-sm-6">
                    <h3 class="faqtitle fonttitle">Tanya Jawab</h3>
                    @foreach($faq as $fa)
                        <div class="faqdesc">   
                            <p><strong>{{$fa->title}}</strong></p>
                            <p class="faqdesc-sub">{!!$fa->desc!!}</p>   
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>          
        </section>
@endsection