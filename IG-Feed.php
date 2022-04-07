<?php include('includes/navbar.php'); ?>
<title>IG-Feed</title>
<style>
    #instafeed-container img{
        height: 100%;
        width: 100%
    }
</style>


<div class="container m-auto my-32 h-screen min-h-full">

    <div id="instafeed-container" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"></div>

</div>


<script src="instafeed.js"></script>
<script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        target: "instafeed-container",
        resolution: 'low_resolution',
        accessToken: 'IGQVJWUnpHUTdwTHp2TVJtMkdESVVYdjNJQmp2SkpRU3JCSHU0SzkyWHM4TWVsNTRpSVRwVFEyM2JlUUl6ZAHNOWXFReUxhMlJJVGtDRUtCM1pyVFpLdjFlQ3pFSzBfNktXOFlGN3ludjJhSU5lbzRYRwZDZD'
    });
    userFeed.run();
</script>




<?php include('includes/footer.php'); ?>