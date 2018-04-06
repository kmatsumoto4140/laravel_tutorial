<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @yield('app')
    @yield('javascripts')

    {{-- <DIV ID="APP">
        <NAV CLASS="NAVBAR NAVBAR-EXPAND-MD NAVBAR-LIGHT NAVBAR-LARAVEL">
            <DIV CLASS="CONTAINER">
                <A CLASS="NAVBAR-BRAND" HREF="{{ URL('/') }}">
                    {{ CONFIG('APP.NAME', 'LARAVEL') }}
                </A>
                <BUTTON CLASS="NAVBAR-TOGGLER" TYPE="BUTTON" DATA-TOGGLE="COLLAPSE" DATA-TARGET="#NAVBARSUPPORTEDCONTENT" ARIA-CONTROLS="NAVBARSUPPORTEDCONTENT" ARIA-EXPANDED="FALSE" ARIA-LABEL="TOGGLE NAVIGATION">
                    <SPAN CLASS="NAVBAR-TOGGLER-ICON"></SPAN>
                </BUTTON>

                <DIV CLASS="COLLAPSE NAVBAR-COLLAPSE" ID="NAVBARSUPPORTEDCONTENT">
                    <!-- LEFT SIDE OF NAVBAR -->
                    <UL CLASS="NAVBAR-NAV MR-AUTO">

                    </UL>

                    <!-- RIGHT SIDE OF NAVBAR -->
                    <UL CLASS="NAVBAR-NAV ML-AUTO">
                        <!-- AUTHENTICATION LINKS -->
                        @GUEST
                            <LI><A CLASS="NAV-LINK" HREF="{{ ROUTE('LOGIN') }}">{{ __('LOGIN') }}</A></LI>
                            <LI><A CLASS="NAV-LINK" HREF="{{ ROUTE('REGISTER') }}">{{ __('REGISTER') }}</A></LI>
                        @ELSE
                            <LI CLASS="NAV-ITEM DROPDOWN">
                                <A ID="NAVBARDROPDOWN" CLASS="NAV-LINK DROPDOWN-TOGGLE" HREF="#" ROLE="BUTTON" DATA-TOGGLE="DROPDOWN" ARIA-HASPOPUP="TRUE" ARIA-EXPANDED="FALSE" V-PRE>
                                    {{ AUTH::USER()->NAME }} <SPAN CLASS="CARET"></SPAN>
                                </A>

                                <DIV CLASS="DROPDOWN-MENU" ARIA-LABELLEDBY="NAVBARDROPDOWN">
                                    <A CLASS="DROPDOWN-ITEM" HREF="{{ ROUTE('LOGOUT') }}"
                                       ONCLICK="EVENT.PREVENTDEFAULT();
                                                     DOCUMENT.GETELEMENTBYID('LOGOUT-FORM').SUBMIT();">
                                        {{ __('LOGOUT') }}
                                    </A>

                                    <FORM ID="LOGOUT-FORM" ACTION="{{ ROUTE('LOGOUT') }}" METHOD="POST" STYLE="DISPLAY: NONE;">
                                        @CSRF
                                    </FORM>
                                </DIV>
                            </LI>
                        @ENDGUEST
                    </UL>
                </DIV>
            </DIV>
        </NAV>

        <MAIN CLASS="PY-4">
            @YIELD('CONTENT')
        </MAIN>
    </DIV> --}}
</body>
</html>
