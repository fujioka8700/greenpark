@if (config('app.env') === 'production')
  <!-- Google Analytics -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-RPEH3MRV1Z"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  // gtag('config', 'G-RPEH3MRV1Z');
  </script>

  <!-- Google AdSense -->
  <meta name="google-adsense-account" content="ca-pub-4144075773862475">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4144075773862475"
  crossorigin="anonymous"></script>
@endif
