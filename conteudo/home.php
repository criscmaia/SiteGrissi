<div class="home">
    <img src="images/home/grice2.JPG" alt="Foto" class="frame" />
    <!-- se for class="align-center frame ROUND" fica arrendonda a borda -->
</div>

<div class="homeaudio">
    <!-- se aceita HTML5 audio -->
    <script type="text/javascript" language="javascript">
    
            if (Modernizr.audio)
            {
                document.write(
                '    <audio controls="true">' +
                '        <source src="funiculi_funicula.mp3" type="audio/mpeg" autoplay="autoplay" preload="auto"/>' +
                '        <source src="funiculi_funicula.wma">' +
                '        <source src="funiculi_funicula.wav">' +
                '        /* O seu navegador n&atilde;o suporta &aacute;udio. */' +
                '    </audio>');
            } else {
                document.write(
                '    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="165" height="38" id="niftyPlayer1">' +
                '        <param name=movie value="niftyplayer.swf?file=funiculi_funicula.mp3&as=1">' +
                '        <param name=quality value=high>' +
                '        <param name=bgcolor value=#FFFFFF>' +
                '        <embed src="niftyplayer.swf?file=funiculi_funicula.mp3&as=1" autoplay=true quality=high bgcolor=#FFFFFF width="165" height="38" name="niftyPlayer1" align="" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>' +
                '    </object>');
            }    
    </script>
</div>


<!-- Autoplay:
<embed src="niftyplayer.swf?file=funiculi_funicula.mp3&as=1" quality=high bgcolor=#FFFFFF width="165" height="38" name="niftyPlayer1" align="" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
-->