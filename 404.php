<?php
include("header.php");
?>
<style>
.fulll{
    background-color: #f1f1f1;
}
.vh{
    height: 100vh;
}
.mai{
    padding-top: 50vh;
}
.ccss{
    font-size: 20px;
}
</style>
<div class="fulll">
<div class="container text-center vh">
    <div class="mai">
        <h2>404<br>Page not found</h2>
        <a class="ccss btn btn-primary shadow mt-3" href="./"><i class="lnr lnr-home ccss"></i> Go To Home</a>
    </div>
</div>
</div>
<script>
    const express = require('express');
const app = express();

// ... other routes and middleware ...

// 404 Error Handling
app.use(function(req, res, next) {
    res.status(404).sendFile(__dirname + '/404.php');
});

// ... start the server ...

</script>
<?php
include("footer.php");
?>