
 <script>  CKEDITOR.replace( 'editor1' );
  </script>

  <script>
Function myconverter(x) {
            CKEDITOR.instances.editor1.insertHtml('x');
    }
</script>

<script type='text/javascript' src="<?php echo base_url('assets/js/sample.js') ?>"></script>
</body>
</html>