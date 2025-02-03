use App\Models\Usersmoredetails;
<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/')}}" class="main-logo" alt="logo"></a>
				<a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">



                        </div>
						<div class="user-info">
@php
use App\Models\Usersmoredetails;
$id=auth()->user()->id;
                        $users_info = Usersmoredetails::Leftjoin("users","Usersmoredetails.user_idf","=","users.id")
       ->where('Usersmoredetails.user_idf', '=', $id)
       ->select('Usersmoredetails.id as details_id','users.*','users.id as user_id','Usersmoredetails.*');
@endphp


                        <p class="profile-user d-flex" ><img alt="" src="{{asset('uploads/'.$users_info->value('profil_impath'))}}" style="width:50%;height:50px; border-radius: 50%;"></p>
							<h4 class="font-weight-semibold mt-3 mb-0">{{auth()->user()->name}}</h4>

						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="side-item side-item-category">Main</li>
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/' . $page='index') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Index</span><span class="badge badge-success side-badge">1</span></a>
					</li>
                    <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">{{trans('transfile.personal')}}</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/' . $page='personal') }}">  {{trans('transfile.payment_bones')}}</a></li>
                            <li><a class="slide-item" href="{{ url('/' . $page='profile') }}"> {{trans('transfile.profile')}}</a></li>
                            <li><a class="slide-item" href="{{ url('/' . $page='users_details/show',auth()->user()->id) }}">{{trans('transfile.more_details')}}</a></li>


						</ul>
					</li>
                    <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">{{trans('transfile.users_info')}}</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
                        <li><a class="slide-item" href="{{ url('/' . $page='users/show_all') }}">  {{trans('transfile.all_users')}}</a></li>

							<li><a class="slide-item" href="{{ url('/' . $page='users') }}">  {{trans('transfile.add_users')}}</a></li>

                            <li><a class="slide-item" href="{{ url('/' . $page='all_payments') }}">  {{trans('transfile.payment_bones')}}</a></li>
                            <li><a class="slide-item" href="{{ url('/' . $page='all_payments') }}">  {{trans('email users')}}</a></li>
                            <li><a class="slide-item" href="{{ url('/' . $page='emails_report') }}">  {{trans('email report')}}</a></li>

						</ul>
					</li>
                    <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">{{trans('transfile.admin_control')}}</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">


                        <li><a class="slide-item" href="{{ url('/' . $page='roles') }}">  {{trans('transfile.roles')}}</a></li>
                        <li><a class="slide-item" href="{{ url('/' . $page='dis_roles') }}">  {{trans('transfile.dis_roles')}}</a></li>

                        <li><a class="slide-item" href="{{ url('/' . $page='finan_info') }}">  {{trans('transfile.finan_info')}}</a></li>
                        <li><a class="slide-item" href="{{ url('/' . $page='timeschdule') }}">  {{trans('transfile.time')}}</a></li>

						</ul>
					</li>

<!--
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg><span class="side-menu__label">Custom Pages</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/' . $page='signin') }}">Sign In</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='signup') }}">Sign Up</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='forgot') }}">Forgot Password</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='reset') }}">Reset Password</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='lockscreen') }}">Lockscreen</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='underconstruction') }}">UnderConstruction</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='404') }}">404 Error</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='500') }}">500 Error</a></li>
						</ul>
					</li>-->

				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
