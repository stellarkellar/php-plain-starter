    <footer>
      <hr/>
      <?php
          $hasPrivilegedAccess = $ctx->hasPrivilegedAccess();
          if (!$hasPrivilegedAccess) {
             echo '<a href="'. Routes::signin() . '">Sign in to preview changes</a>';
          }
      ?>
    </footer>
  </body>
</html>
