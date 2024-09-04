</div>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('public/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/assets/dist/js/adminlte.min.js')}}"></script>
{{-- alert msg --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
    setTimeout(function() {
      var alertElement = document.getElementById('auto-hide-alert');
      if (alertElement) {
        var alert = new bootstrap.Alert(alertElement);
        alert.close();
      }
    }, 3000);
  </script>
{{-- alert msg --}}
</body>
</html>