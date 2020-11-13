<!DOCTYPE html>
<html lang="ru">

@include ('layouts.head')

<body>

    @include ('layouts.header')

    @yield ('content')

    @include ('layouts.footer')

    @include ('layouts.scripts')

</body>
</html>
