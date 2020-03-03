<!doctype html>
<html {!! language_attributes() !!}>
  @include('partials.head')
  <body {!! body_class() !!}>
    <a href="#content" class="screen-reader-text">{{ __('Skip to content', 'sage') }}</a>
    <!--[if IE]>
      <div class="alert alert-warning">
        {!! __('You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage') !!}
      </div>
    <![endif]-->
    @php do_action('get_header') @endphp
    @php $logo_align = get_theme_mod( 'header_logo_align' ) @endphp
    @if ($logo_align == 'inline-left')
      @include('partials.header-inline')
    @else
      @include('partials.header-float')
    @endif
    <div id="content" class="content" role="document">
      <div class="wrap">
        @if (App\display_sidebar())
          <aside id="aside" class="sidebar" role="complementary">
            @include('partials.sidebar')
          </aside>
        @endif
        <main role="main" class="main">
          @yield('content')
        </main>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
