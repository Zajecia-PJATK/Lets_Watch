<?php
    include 'antyhack.php';
?>
<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.innerHTML === "More") {
            x.innerHTML = "Less";
        } else {
            x.innerHTML = "More";
        }
    }
</script>
