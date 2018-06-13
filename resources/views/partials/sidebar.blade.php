@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_action_access')
                <li class="{{ $request->segment(2) == 'user_actions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                @lang('quickadmin.user-actions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('escola_access')
            <li class="{{ $request->segment(2) == 'escolas' ? 'active' : '' }}">
                <a href="{{ route('admin.escolas.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.escolas.title')</span>
                </a>
            </li>
            @endcan
            
            @can('professore_access')
            <li class="{{ $request->segment(2) == 'professores' ? 'active' : '' }}">
                <a href="{{ route('admin.professores.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.professores.title')</span>
                </a>
            </li>
            @endcan
            
            @can('aluno_access')
            <li class="{{ $request->segment(2) == 'alunos' ? 'active' : '' }}">
                <a href="{{ route('admin.alunos.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.alunos.title')</span>
                </a>
            </li>
            @endcan
            
            @can('app_access')
            <li class="{{ $request->segment(2) == 'apps' ? 'active' : '' }}">
                <a href="{{ route('admin.apps.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.apps.title')</span>
                </a>
            </li>
            @endcan
            
            @can('site_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span class="title">@lang('quickadmin.site.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('slideshow_access')
                <li class="{{ $request->segment(2) == 'slideshows' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.slideshows.index') }}">
                            <i class="fa fa-photo"></i>
                            <span class="title">
                                @lang('quickadmin.slideshow.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('about_access')
                <li class="{{ $request->segment(2) == 'abouts' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.abouts.index') }}">
                            <i class="fa fa-user-circle"></i>
                            <span class="title">
                                @lang('quickadmin.about.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('slideset_access')
                <li class="{{ $request->segment(2) == 'slidesets' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.slidesets.index') }}">
                            <i class="fa fa-file-photo-o"></i>
                            <span class="title">
                                @lang('quickadmin.slideset.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('metodologium_access')
                <li class="{{ $request->segment(2) == 'metodologias' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.metodologias.index') }}">
                            <i class="fa fa-address-card"></i>
                            <span class="title">
                                @lang('quickadmin.metodologia.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('depoimento_access')
                <li class="{{ $request->segment(2) == 'depoimentos' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.depoimentos.index') }}">
                            <i class="fa fa-address-book-o"></i>
                            <span class="title">
                                @lang('quickadmin.depoimentos.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('familium_access')
                <li class="{{ $request->segment(2) == 'familias' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.familias.index') }}">
                            <i class="fa fa-users"></i>
                            <span class="title">
                                @lang('quickadmin.familia.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('jogo_access')
                <li class="{{ $request->segment(2) == 'jogos' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.jogos.index') }}">
                            <i class="fa fa-gamepad"></i>
                            <span class="title">
                                @lang('quickadmin.jogos.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan

            

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

