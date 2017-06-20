<?php
    require('inc/links.php');
    require('inc/header.php');
?>

<h2>Thank you for downloading time2backup!</h2>
<p>
  Your download will start soon.<br/>
  If not, click on <a href="<?php echo $redirect ?>">this link</a>.
</p>
<a href="#" onclick="window.history.back();" class="btn btn-default btn-lg">Return to time2backup website</a>
<p></p>
<p>Other downloads:
  <a href="index.php">All formats</a> |
  <a href="download.php?type=checksums">SHA256 checksums</a><br/>
  <a href="https://github.com/time2backup/time2backup/blob/master/CHANGELOG.md">See changelog</a></p>
</p>

<?php require('inc/footer.php'); ?>
