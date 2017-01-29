<!DOCTYPE html>
<html lang="en">
<head>
	<title>Take Picture with WebCam</title>
    <script type="text/javascript" src="../M_scripts/M_webcam.js"></script>
    <script type="text/javascript">
        webcam.set_api_url( '../M_files/upload_webcam.php' );
        webcam.set_quality( 100 );
        webcam.set_shutter_sound( true ); // play shutter click sound
        
        webcam.set_hook( 'onComplete', 'my_completion_handler' );
        
        function take_snapshot() {
            // take snapshot and upload to server
            document.getElementById('upload_results').innerHTML = 'Snapshot<br>'+
            '<img src="../M_images/uploading.gif">';
            webcam.snap();
        }
        
        function my_completion_handler(msg) {
            // extract URL out of PHP output
            if (msg.match(/(..\/\S+)/)) {
                var image_url = RegExp.$1;
                // show JPEG image in page
                document.getElementById('upload_results').innerHTML = 
                    'Snapshot<br>' + 
                    '<a href="'+image_url+'" target"_blank"><img src="' + image_url + '"></a>';
                
                // reset camera for another shot
                webcam.reset();
            }
            else alert("PHP Error: " + msg);
        }
    </script>
    <style>
        body {
            background:#FAFAFA;
            font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        .main
        {
            margin-left: auto;
            margin-right: auto;
            width: 690px;
        }
        .snap
        {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            background: #009CDE;
            font-family: inherit;
            font-size: 100%;
            padding: .5em 1em;
            border: 0 hsla(0, 0%, 0%, 0);
            text-decoration: none;
        }
        .border
        {
            border: 3px #009CDE solid;
            padding: 5px;
            width: 320px;
            height: 258px;
        }
        .dokdiv {
            border: 1px #CCC solid;
            border-radius: 5px;
            background:#fff;
            margin: 30px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="dokdiv">
        <center><img src="../M_images/logo_paypal.png"><br><h2>Click to snap picture then click again to snap another picture !</h2><br>
        <input type="button" class="snap" value="SNAP IT" onClick="take_snapshot()"></center><br>
        <table class="main">
            <tr>
                <td valign="top">
                    <div class="border">
                    Live Webcam<br>
                    <script>
                    document.write( webcam.get_html(320, 240) );
                    </script>
                    </div>
                    <br/>
                </td>
                <td width="50">&nbsp;</td>
                <td valign="top">
                    <div id="upload_results" class="border">
                        Pictures<br>
                        <img src="../M_images/webcam_logo.jpg" />
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
