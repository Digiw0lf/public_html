<?php
require_once("layout.php");

html_header("Page not found - 404");
navigation();
?>
    <div class="container">
        <p>Whoa there. We can't find the page your looking for.</p>
        <span class="goback" onclick="goBack();">Go back!</span>
    </div>
<script type="text/javascript">
	window.goBack = function (e){
    var defaultLocation = "http://www.jordanhinkle.com";
    var oldHash = window.location.hash;

    history.back(); // Try to go back

    var newHash = window.location.hash;

    if(
        newHash === oldHash &&
        (typeof(document.referrer) !== "string" || document.referrer  === "")
    ){
        window.setTimeout(function(){
            // redirect to default location
            window.location.href = defaultLocation;
        },1000); // set timeout in ms
    }
    if(e){
        if(e.preventDefault)
            e.preventDefault();
        if(e.preventPropagation)
            e.preventPropagation();
    }
    return false; // stop event propagation and browser default event
}
</script>
<?php
html_footer();
?>
