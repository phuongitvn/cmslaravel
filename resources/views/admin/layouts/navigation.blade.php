@isset($menus)
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/admin" class="app-brand-link">
            <x-application-logo class="block h-9 w-auto fill-current" />
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        @foreach($menus as $menu)
        @php
        
        $subMenus = [];
        $hasSubActive = false;
        foreach($menu['children'] as $child) {
            $isActive = (request()->is(ltrim($child['link'], '/'))) || (request()->is(ltrim($child['link'], '/').'/*')) ? 'active' : '';
            if($isActive == 'active') {
                $hasSubActive = true;
            }
            $subMenus[] = '<li class="menu-item '.$isActive.'"><a href="'.$child['link'].'" class="menu-link">'.$child['name'].'</a></li>';
        }

        @endphp
        <li class="menu-item {{ $hasSubActive ? 'open active' : ''}} {{ (request()->is(ltrim($menu['link'], '/'))) || (request()->is(ltrim($menu['link'], '/').'/*')) ? 'active' : '' }}">
            <a href="{{ $menu['link'] }}" class="menu-link {{ count($menu['children']) > 0 ? 'menu-toggle' : '' }}">
                @if($menu['icon'])
                <i class="{{$menu['icon']}}"></i>
                @endif
                <div data-i18n="{{ $menu['name'] }}">{{ $menu['name'] }}</div>
            </a>
            @isset($menu['children'])
            <ul class="menu-sub">
                @foreach($menu['children'] as $child)
                <li class="menu-item {{ (request()->is(ltrim($child['link'], '/'))) || (request()->is(ltrim($child['link'], '/').'/*')) ? 'active' : '' }}"><a href="{{ $child['link'] }}" class="menu-link">{{ $child['name'] }}</a></li>
                @endforeach
            </ul>
            @endisset
        </li>
        @endforeach
    </ul>
</aside>
@endisset