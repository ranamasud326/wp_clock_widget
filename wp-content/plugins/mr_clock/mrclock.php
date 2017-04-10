<?php

/*
 * Plugin Name: Clock widget
 * plugin URI: http://www.github.com
 * Description: This is a digital clock widget.
 * Author: Masud Rana
 * Author URI: http://www.facebook.com
 */

class mrClockWidget extends WP_Widget{
    public function __construct(){
        parent::__construct(false, $name = __('Digital Clock ') );
    }

    public function form($instance){

    }

    public function update($new_instance, $old_instance){

    }

    public function widget($args, $instance){
        ?>
        <script>
            var localtime = new Date();

            function digitalClock() {
                localtime.setTime(localtime.getTime() + 1000);
                var hrs = localtime.getHours();
                var mins = localtime.getMinutes();
                var secs = localtime.getSeconds();

                mins = (mins < 10 ? "0" : "") + mins;
                secs = (secs < 10 ? "0" : "") + secs;
                var apm = (hrs < 12) ? "AM" : "PM";
                hrs = (hrs > 12) ? hrs - 12 : hrs;
                hrs = (hrs == 0) ? 12 : hrs;
                var current_time = hrs + ":" + mins + ":" + secs + " " + apm;

                document.getElementById("mrclock").innerHTML = current_time;
            }
            window.onload = function() {
                digitalClock();
                setInterval('digitalClock()', 1000);
            }
    </script>

    <div class="widget-title">
        <b> Local Time: &nbsp  <span id="mrclock"> </span> </b>
    </div>


<?php
    }
}

add_action('widgets_init' , function(){
    register_widget('mrClockWidget');
});