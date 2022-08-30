<?php
?>
  <!-- ads script -->
  <?php
  if ($sundae->template_name == 'page-thank-you'):
    $script = get_field('script');
    if ($script == 'primary'):
      include('thank_you_script.php');
    else:
      include('thank_you_script_2nd.php');
    endif;
  else:
    include('ads_scripts.php');
  endif;
  ?>
  <?php if (is_front_page()) {
    echo '<script type="text/javascript">var ordnumber = Math.random() * 10000000000000;var sscUrl = ("https:" == document.location.protocol ? "https://" : "http://") + "trkn.us/pixel/conv/ppt=11466;g=homepage;gid=33295;ord="+ordnumber+";v=120";var x = document.createElement("IMG");x.setAttribute("src", sscUrl);x.setAttribute("width", "1");x.setAttribute("height", "1");document.body.appendChild(x);</script>';
  };?>


</body>
</html>
<?php
  /* End */
?>

