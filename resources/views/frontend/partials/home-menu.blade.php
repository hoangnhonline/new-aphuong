<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
    <div class="text-center logo-menu">
        <a title="Logo" href="home.html"><img src="https://imgholder.ru/204x90/0082D5/fff.jpg') }}&text=My+Logo&font=tahoma&fz=27" alt=""></a>
    </div>
    <ul class="nav navbar-nav navbar-left">
        <li class="level0 {{ \Request::route()->getName() == "home" ? "active" : "" }}"><a class="" href="{{ route('home') }}">Trang chủ</a></li><!-- END MENU HOME -->
        <li class="level0 {{ \Request::route()->getName() == "dat-nen" ? "active" : "" }}">
            <a href="{{ route('dat-nen') }}">Đất nền</a>            
        </li><!-- END MENU SHOP -->
        <li class="level0 {{ \Request::route()->getName() == "can-ho" ? "active" : "" }}">
            <a href="{{ route('can-ho') }}">Căn hộ</a>            
        </li><!-- END MENU SHOP -->
        <li class="level0 {{ (in_array(\Request::route()->getName(), ['san-pham-le', 'danh-muc', 'chi-tiet']) && isset($type) && $type == 1) ? "active" : "" }}"><a href="{{ route('san-pham-le') }}">Sản phẩm lẻ</a>
            <ul class="level0 submenu">
                @foreach($banList as $thue)
                <li class="level1"><a href="{{ route('danh-muc', $thue->slug ) }}">{!! $thue->name !!}</a></li>                           
                @endforeach
            </ul>
        </li><!-- END MENU BLOG -->
        <li class="level0 {{ isset($slug) && \Request::route()->getName() == "news-list" && $slug == "tin-tuc" ? "active" : "" }}">
            <a href="{{ route('news-list', 'tin-tuc') }}">Tin tức</a>            
        </li><!-- END MENU SHOP -->
	<li class="level0 {{ isset($slug) && \Request::route()->getName() == "news-list" && $slug == "tai-chinh-phap-ly" ? "active" : "" }}">
            <a href="{{ route('news-list', 'tai-chinh-phap-ly') }}">Tài chính pháp lý</a>            
        </li><!-- END MENU SHOP -->  
        <li class="level0 {{ isset($slug) && \Request::route()->getName() == "news-list" && $slug == "van-ban" ? "active" : "" }}">
            <a href="{{ route('news-list', 'van-ban') }}">Văn bản pháp luật</a>            
        </li><!-- END MENU SHOP --> 
	 <li class="level0 {{ isset($slug) && \Request::route()->getName() == "news-list" && $slug == "tuyen-dung" ? "active" : "" }}">
            <a href="{{ route('news-list', 'tuyen-dung') }}">Tuyển dụng</a>            
        </li><!-- END MENU SHOP -->               
    </ul>
</div><!-- /.navbar-collapse -->