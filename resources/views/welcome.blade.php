@extends('layouts.dist')

@section('content')
    <div class="index_page">
        <div class="row">
            <div class="left">
                <div class="banner" id="focus">
                    <ul>
                        @foreach($banner as $item)
                            <li>
                                <a href="/post/{{ $item['id'] }}?type=information"><img src="{{ $item['src'] }}" alt="{{ $item['title'] }}" /></a>
                            </li>
                        @endforeach
                    </ul>
                </div>                    
            </div>
            <div class="right static_1">
                <div class="side">
                    <a href="/list?type=claim">
                        <h2><i class="iconfont icon-claim"></i><span>索赔申报</span></h2>
                    </a>
                </div>
                <div class="side">
                    <a href="/static/right">
                        <h2><i class="iconfont icon-right"></i><span>投资者索赔资格查询</span></h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="left">
                <div class="card">
                   <div class="head">
                       <span class="name">最新动态</span>
                       <span class="more"><a href="/list?type=information">>More</a></span>
                   </div>
                   <div class="body">
                       <ul class="informations">
                           @foreach($informations as $item)
                               <li>
                                   <a href="/post/{{$item->id}}?type=information">{{ $item->title }}</a>
                                   <span class="time">{{ $item->updated_at->format('m-d') }}</span>
                               </li>
                           @endforeach
                       </ul>
                   </div>
                </div>
            </div>
            <div class="right static_2">
                <div class="side">
                    <a href="/static/service">
                        <h2><i class="iconfont icon-service"></i><span>服务介绍</span></h2>
                    </a>
                </div>
                <div class="side">
                    <a href="/static/pay">
                        <h2><i class="iconfont icon-pay"></i><span>费用支持政策</span></h2>
                    </a>
                </div>
                <div class="side">
                    <a href="/static/contact">
                        <h2><i class="iconfont icon-contact"></i><span>联系我们</span></h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="left">
                <div class="card">
                   <div class="head">
                       <span class="name">常见问题FAQ</span>
                       <span class="more"><a href="/list?type=faq">>More</a></span>
                   </div>
                   <div class="body">
                       <ul class="faqs">
                           @foreach($faqs as $item)
                               <li>
                                   <a href="/post/{{$item->id}}?type=faq">{{ $item->title }}</a>
                               </li>
                           @endforeach
                       </ul>
                   </div>
                </div>                
            </div>
            <div class="right">
                <div style="margin-left: 20px">
                    <div class="card">
                        <div class="head">
                            <span class="name">索赔征集中公司</span>
                            <span class="more"><a href="/list?type=claim">>More</a></span>
                        </div>
                        <div class="body">
                            <ul class="claims">
                                @foreach($claims as $item)
                                    <li>
                                        <a href="/post/{{$item->id}}?type=claim">{{ $item->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>      
@endsection
