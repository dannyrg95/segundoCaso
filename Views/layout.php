<?php
    include_once(CONTROLLERS_PATH . '/userController.php');
    bindUsers();

    if (isset($_POST["actionMessage"]))
    {
        echo '<div class="alert">' . $_POST["actionMessage"] . '</div>';
    }
?>


<script>
    function Delete(email) {
        $.ajax({
            url: "<?php echo ROOT?>/api/rest/userApi.php",
            method: "POST",
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            data: "delete=1&email=" + encodeURIComponent(email)
        }).done(function(response) {
            const result = JSON.parse(response);
            if (result.success) {
                toastr.success("El usuario ha sido eliminado exitosamente.");
                location.reload();
            } else {
                toastr.error(result.errorMessage);
            }
        });
    }

</script>