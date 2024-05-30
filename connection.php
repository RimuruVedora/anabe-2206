<?php
$_connections = mysqli_connect("localhost","root","","db3");

if(mysqli_connect_error()){
    echo "<div id='message-box' class='message-box'>Error " . mysqli_connect_error() . "</div>";
}
else{
    echo "";
}

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
