<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
@include('layouts.navigation')
<!-- ***** Header Area End ***** -->

@yield('bodySection')


<!-- ***** Footer Start ***** -->
@include('layouts.footer')

@include('layouts.js')
@stack('header CSS')
</body>
</html>

