<footer class="content-info page-footer" role="contentinfo">
  <div class="container-wide">
    <div class="row flex space-between align-center">
      <div class="footer-left col l4 s12">
        @php dynamic_sidebar('footer-left') @endphp
      </div>
      <div class="footer-center col l2 s12">
        @php dynamic_sidebar('footer-center') @endphp
      </div>
      <div class="footer-right col l6 s12">
        @if ($privacy_policy = get_privacy_policy_url())
          <a href="{{ $privacy_policy }}">{{ __('Privacy Policy', 'sage') }}</a>
        @endif
        <p class="copyright">Copyright {!! current_time('Y') !!} By {!! get_bloginfo('name', 'display') !!}</p>
      </div>
    </div>
  </div>
</footer>
