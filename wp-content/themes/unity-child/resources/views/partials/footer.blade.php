<footer class="content-info page-footer" role="contentinfo">
  <div class="container-wide">
    <div class="row flex space-between align-center">
      <div class="footer-left col l4 s12">
        @php dynamic_sidebar('footer-left') @endphp
      </div>
      <div class="footer-center col l4 s12">
        @php dynamic_sidebar('footer-center') @endphp
      </div>
      <div class="footer-right col l4 s12">
        @php dynamic_sidebar('footer-right') @endphp
      </div>
    </div>
  </div>
  <div class="footer-copyright text-uppercase">
    <div class="container-wide">
      <div class="row">
        <div class="col m4 s12">
          @if ($privacy_policy = get_privacy_policy_url())
            <a href="{{ $privacy_policy }}">{{ __('Privacy Policy', 'sage') }}</a>
          @endif
          <p class="copyright">Copyright {!! current_time('Y') !!} By {!! get_bloginfo('name', 'display') !!}</p>
        </div>
      </div>
    </div>
  </div>
</footer>
