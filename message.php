<?php
    if(isset($_SESSION['message'])) :
?>

    <div id="message-box" class="message-box" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['message']);
    endif;
?>
<style>
    .message-box {
    border: 2px solid #000;
    padding: 20px;
    width: 300px;
    margin: 0 auto;
    text-align: center;
    background-color: #f0f0f0;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    border-radius: 15px;
}

</style>

<script>
    // Function to hide the message box after 3 seconds
    setTimeout(function(){
        var messageBox = document.getElementById('message-box');
        messageBox.style.display = 'none';
    }, 3000); // 3000 milliseconds = 3 seconds
</script>
