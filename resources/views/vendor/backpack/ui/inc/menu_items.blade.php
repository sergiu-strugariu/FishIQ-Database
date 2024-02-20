{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Utilizatori" icon="las la-user" :link="backpack_url('user')" />

{{--<x-backpack::menu-dropdown title="Concursuri" icon="las la-users">--}}
{{--    <x-backpack::menu-dropdown-item title="Concurs" icon="las la-trophy" :link="backpack_url('concurs')" />--}}
{{--    <x-backpack::menu-dropdown-item title="Manse" icon="las la-sitemap" :link="backpack_url('mansa')" />--}}
{{--    <x-backpack::menu-dropdown-item title="Standuri" icon="las la-store" :link="backpack_url('stand')" />--}}
{{--    <x-backpack::menu-dropdown-item title="Lacuri" icon="las la-water" :link="backpack_url('lac')" />--}}
{{--</x-backpack::menu-dropdown>--}}

<x-backpack::menu-item title="Inscrieri" icon="las la-newspaper" :link="backpack_url('inscriere')" />
<x-backpack::menu-item title="Concursuri" icon="las la-trophy" :link="backpack_url('concurs')" />
<x-backpack::menu-item title="Manse" icon="las la-sitemap" :link="backpack_url('mansa')" />
<x-backpack::menu-item title="Standuri" icon="las la-store" :link="backpack_url('stand')" />
<x-backpack::menu-item title="Lacuri" icon="las la-water" :link="backpack_url('lac')" />
<x-backpack::menu-item title="Sectoare" icon="las la-school" :link="backpack_url('sector')" />

<x-backpack::menu-item title="Palmares" icon="las la-history" :link="backpack_url('palmares')" />
