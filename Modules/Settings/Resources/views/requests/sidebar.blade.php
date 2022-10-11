@component('dashboard::layouts.components.sidebarItem')
    @slot('can', ['permission' => 'read_settings'])
    @slot('url', route('dashboard.contact-requests'))
    @slot('name', "Contacts")
    @slot('isActive', request()->routeIs('dashboard.contact-requests'))
    @slot('icon', 'fas fa-address-card')
@endcomponent
