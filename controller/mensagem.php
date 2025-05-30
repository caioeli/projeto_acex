<?php
	if (isset($_SESSION['mensagem'])):
?>

<div class="alert alert-success alert-dismissible fade show position-fixed" role="alert"
     style="top: 20px; right: 20px; min-width: 250px; z-index: 1055;">
    <?= $_SESSION['mensagem']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
	unset($_SESSION['mensagem']);
	endif;
?>

<script>
  setTimeout(function() {
    var alert = document.querySelector('.alert');
    if(alert) {
      var Alert = bootstrap.Alert.getOrCreateInstance(alert);
      Alert.close();
    }
  }, 3000); // 3000 ms = 3 segundos
</script>