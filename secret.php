<?php require_once('layout/header.php'); ?>
<video width="100%" height="100%" controls autoplay id="myVideo">
         <source src="assets/vid/robi.mp4" type="video/mp4">
    </video>

    <script>
  const video = document.getElementById('myVideo');

  video.addEventListener('ended', () => {
    window.history.back();
  });
</script>
<?php require_once('layout/footer.php'); ?>