@if (config('app.env') === 'production')
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-RPEH3MRV1Z"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  // gtag('config', 'G-RPEH3MRV1Z');
  </script>
@endif

