<?php
    require('inc/links.php');

    if (isset($_GET['type'])) {
      if ($_GET['type'] == 'checksums') {
        $redirect .= '/sha256sum.txt';
      }
    } else {

      $format = 'zip';

      if (isset($_GET['format'])) {
        switch ($_GET['format']) {
            case 'tar.gz':
            case 'tgz':
              $format = 'tar.gz';
              break;
            case 'tar.bz2':
            case 'tbz2':
              $format = 'tar.bz2';
              break;
        }
      }

      $redirect .= '/time2backup-'.$versions[$latest].'.'.$format;
    }

    require('inc/header.php');
?>

<h2>Thank you for downloading time2backup!</h2>
<p>Your download will start soon.<br/>
If not, click on <a href="<?php echo $redirect ?>">this link</a>.</p>
<a href="#" onclick="window.history.back();" class="btn btn-default btn-lg">Return to time2backup website</a>
<p></p>
<p>Other downloads:
    <a href="https://jean.prunneaux.com/files/time2backup/stable/">All files and versions</a> |
    <a href="https://jean.prunneaux.com/files/time2backup/stable/latest/checksums.php">SHA256 checksums</a><br/>
    <a href="https://github.com/time2backup/time2backup/blob/master/CHANGELOG.md">See changelog</a></p>
</p>

<?php require('inc/footer.php'); ?>
