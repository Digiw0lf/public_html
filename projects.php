<?php
require_once("layout.php");

html_header("Jordan Hinkle - Projects");
navigation();
?>
    <div class="container">
        <h2>Projects</h2>
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Starcraft 2 Hotkey Trainer</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <p>Test your knowledge of SC2 hotkeys. With this little diddy all you need to do is choose a race then you'll be prompted for every hotkey for that race. <br/><br/><a href="sc2">Try the demo here!</a></p>
                </div>
            </div>
        </div>
    </div>
<?php
html_footer();
?>
