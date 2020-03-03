@php
  $header_color = get_theme_mod( 'header_color' );
  $text_color = get_theme_mod( 'header_text_color' );
  $logo_width = get_theme_mod( 'header_logo_width' );
  $cta_text = get_theme_mod( 'header_cta_text' );
  $cta_link = get_theme_mod( 'header_cta_link' );
  $cta_target_bool = get_theme_mod( 'header_cta_target' );
  $cta_target = '';

  if ($cta_target_bool == true) {
    $cta_target = 'target="_blank" rel="noopener"';
  }
@endphp
<header class="header-inline {{ $cta_link ? 'banner banner--has-cta' : 'banner' }}" role="banner">
  <nav class="nav-primary" role="navigation">
    <div class="navbar container-wide">
      @php
        if (!empty($logo_width)) {
          $custom_logo_width = 'style=width:' . $logo_width . 'px;';
        } else {
          $custom_logo_width = '';
        }
      @endphp
      <a class="logo" href="{{ home_url('/') }}" rel="home" {{ $custom_logo_width }}>
        @if (has_custom_logo())
          @php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'simple-logo' );
            $logo_2x = wp_get_attachment_image_src( $custom_logo_id, 'simple-logo-2x' );
          @endphp
          <img src="{{ $logo[0] }}"
                srcset="{{ $logo[0] }} 1x, {{ $logo_2x[0] }} 2x"
                alt="{{ get_bloginfo('name', 'display') }}"
                width="{{ $logo[1] }}" height="{{ $logo[2] }}" />
        @else
          {!! get_bloginfo('name', 'display') !!}
        @endif
      </a>
      @if (has_nav_menu('primary_navigation'))
        <div class="menu-trigger-wrapper hide-on-large-only">
          <button class="btn-menu-toggle" id="menu-trigger" aria-label="Show navigation menu" aria-expanded="false">
            <i class="material-icons" aria-hidden="true">menu</i>
          </button>
        </div>
        <div class="navbar-menu flex flex-center space-between">
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'container' => FALSE,
            'menu_class' => 'flex flex-center space-between',
            'depth' => 2,
          ]) !!}
          @if (!empty($cta_text) && !empty($cta_link))
            <div class="cta-link-wrapper">
              <div class="container-wide">
                <div class="cta-link">
                  <a href="{{ $cta_link }}" {{ $cta_target }}>{{ $cta_text }}</a>
                </div>
              </div>
            </div>
          @endif
        </div>
      @endif
    </div>
  </nav>
</header>
