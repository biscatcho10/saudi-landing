@component('dashboard::layouts.components.sidebarItem')
    @slot('can', ['permission' => 'read_settings'])
    @slot('url', route('dashboard.settings.index'))
    @slot('name', trans('settings::settings.tabs.about'))
    @slot('isActive', request()->routeIs('*about-us*') || request()->routeIs('*awards*'))
    @slot('icon', 'fas fa-file-invoice')
    @php($trees = [
        [
            'name' => trans('settings::settings.tabs.about'),
            'url' => route('dashboard.about-us'),
            'can' => ['permission' => 'read_settings'],
            'isActive' => request()->routeIs('dashboard.about-us'),
            'module' => 'Settings',
        ],
        [
            'name' => trans('settings::awards.plural'),
            'url' => route('dashboard.awards.index'),
            'can' => ['permission' => 'read_awards'],
            'isActive' => request()->routeIs('dashboard.news.index'),
            'module' => 'Settings',
        ],
    ])
    @slot('tree', $trees)
@endcomponent
