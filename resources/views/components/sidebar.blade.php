<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            <b class="font-black">{{config('app.name')}}</b>
        </div>
    </div>
    <div class="menu is-menu-main">

        @foreach(Config::get('constant.links') as $link )
            <x-menu-list
                    :menuListTitle="$link['mainTitle']"
                    :withSub="$link['isSub']"
                    :subMenuArr="$link['subMenuArr']"/>
        @endforeach

        {{--<p class="menu-label">Settings</p>--}}
        {{--<ul class="menu-list">--}}
            {{--<li class="--set-active-tables-html">--}}
                {{--<a href="tables.html">--}}
                    {{--<span class="icon"><i class="mdi mdi-table"></i></span>--}}
                    {{--<span class="menu-item-label">Countries</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="--set-active-forms-html">--}}
                {{--<a href="forms.html">--}}
                    {{--<span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>--}}
                    {{--<span class="menu-item-label">States</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="--set-active-profile-html">--}}
                {{--<a href="profile.html">--}}
                    {{--<span class="icon"><i class="mdi mdi-account-circle"></i></span>--}}
                    {{--<span class="menu-item-label">Cities</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="login.html">--}}
                    {{--<span class="icon"><i class="mdi mdi-lock"></i></span>--}}
                    {{--<span class="menu-item-label">Login</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="dropdown">--}}
                    {{--<span class="icon"><i class="mdi mdi-view-list"></i></span>--}}
                    {{--<span class="menu-item-label">Submenus</span>--}}
                    {{--<span class="icon"><i class="mdi mdi-plus"></i></span>--}}
                {{--</a>--}}
                {{--<ul>--}}
                    {{--<li>--}}
                        {{--<a href="#void">--}}
                            {{--<span>Sub-item One</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#void">--}}
                            {{--<span>Sub-item Two</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--</ul>--}}
        {{--<p class="menu-label">About</p>--}}
        {{--<ul class="menu-list">--}}
            {{--<li>--}}
                {{--<a href="https://justboil.me" onclick="alert('Coming soon'); return false" target="_blank" class="has-icon">--}}
                    {{--<span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>--}}
                    {{--<span class="menu-item-label">Premium Demo</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="https://justboil.me/tailwind-admin-templates" class="has-icon">--}}
                    {{--<span class="icon"><i class="mdi mdi-help-circle"></i></span>--}}
                    {{--<span class="menu-item-label">About</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="https://github.com/justboil/admin-one-tailwind" class="has-icon">--}}
                    {{--<span class="icon"><i class="mdi mdi-github-circle"></i></span>--}}
                    {{--<span class="menu-item-label">GitHub</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    </div>
</aside>
