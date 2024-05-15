<!doctype html>
<html lang="en" data-bs-theme="auto">
@include('admin.partials.head')

<body>
    @include('admin.partials.svg')
    @include('admin.partials.nav')
    <div class="container-fluid">
        <div class="row">
            @include('admin.partials.aside')
            @yield('content')
        </div>
    </div>
    @include('admin.partials.script')
</body>

</html>