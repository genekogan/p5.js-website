<!DOCTYPE html>

<?php include('header.php'); ?>
<body id="home-page">
  <!--<div id="credits">
    <em><a href='https://paom.com/profiles/processing/#/profile-apps' target=_blank>Print All Over Me x Processing Foundation</a></em><br>
    collab with <a target=_blank href='http://sosolimited.com'>Sosolimited</a> and <a target=_blank href='http://liaworks.com/'>LIA</a>
  </div>-->
 
  <?php include('heading.php'); ?>

  <!-- content sections -->
  <div class="column-span">

    <ul id="menu" class="top_menu" >
      <li><a href="<?php echo getRoot(); ?>download/">Download</a></li>
      <object width="0" height="0" type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="separator-design-element">*</object>
      <li><a href="<?php echo getRoot(); ?>get-started/">Start</a></li>
      <object width="0" height="0" type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="separator-design-element">*</object>
      <li><a href="<?php echo getRoot(); ?>reference/">Reference</a></li>
      <object width="0" height="0" type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="separator-design-element">*</object>
      <li><a href="<?php echo getRoot(); ?>libraries/">Libraries</a></li>
      <object width="0" height="0" type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="separator-design-element">*</object>
      <li><a href="<?php echo getRoot(); ?>tutorials/">Learn</a></li>
      <object width="0" height="0" type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="separator-design-element">*</object>
      <li><a href="<?php echo getRoot(); ?>contribute/">Contribute</a></li>
    </ul>

    <section id="home" style='pointer-events:none;'>

      
<!--       <div class='focus_blue'>
        <p><a href='http://goo.gl/forms/vJYdqTQVdS'>Call for artists and coders: help us make our community video!</a></p>
      </div> -->


      <p><a href="http://hello.p5js.org">Hello!</a> p5.js is a JavaScript library that starts with the original goal of 
      <a href="http://processing.org">Processing</a>, to make coding accessible 
      for artists, designers, educators, and beginners, and reinterprets this for today&#8217;s web. 
      </p>

      <p>Using the original metaphor of a software sketchbook, p5.js has a full set of
      drawing functionality. However, you&#8217;re not limited
      to your drawing canvas, you can think of your whole browser page as your sketch!
      For this, p5.js has addon <a href="libraries/">libraries</a> that make it 
      <a href="http://hello.p5js.org">
      easy to interact</a> with other HTML5
      objects, including text, input, video, webcam, and sound.</p>

      <p>p5.js is a new interpretation, not an emulation or port, and it is in active development.
      An official editing environment is coming soon, as well as many more features!</p>
    </section>

    <?php include('footer.php'); ?>
  </div><!-- end column-span -->

  <!-- outside of column for footer to go across both -->

  <p class="clearfix"> &nbsp; </p>

  <object type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="asterisk-design-element">
    *<!-- to do: add fallback image in CSS -->
  </object>

  <?php include('end.php'); ?>

  <!--<iframe frameBorder='0' id='home-sketch-frame' src='./p5_featured/paom'></iframe>-->
  <script type='text/javascript'>
    $('#home-sketch-frame').width(window.innerWidth);
    $('#home-sketch-frame').height(window.innerHeight);

    $('#home-sketch-frame').css('position', 'fixed');
    $('#home-sketch-frame').css('top', '0px');
    $('#home-sketch-frame').css('left', '0px');
    $('#home-sketch-frame').css('z-index', '-2');
    $('body').css('pointer-events', 'none');
    $('iframe').css('pointer-events', 'auto');
    $('a').css('pointer-events', 'auto');

  </script>
</body>
</html>
