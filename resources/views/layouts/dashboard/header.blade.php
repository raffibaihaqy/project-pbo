@php
    $user = App\user::first();
@endphp
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <button type="button" class="btn btn-outline-primary" onclick="window.location='{{url('/home')}}'"><i class="fa fa-mail-reply"></i> back</button>
                <form class="form-header" action="" method="">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                        <div class="content">
                            <a class="js-acc-btn" href="#">{{$user->name}}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="account-dropdown__footer">
                                <a href="{{url('/logout')}}">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
