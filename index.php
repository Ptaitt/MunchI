<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    </script>
    <script type="text/javascript" src="Scripts/Debug.js"></script>
    <script type="text/javascript" src="Scripts/MunchI.js"></script>
    <script type="text/javascript" src="Scripts/interface.js"></script>
    
  <link rel="stylesheet" type="text/css" href="styles/style.css" />
  <link rel="stylesheet" type="text/css" href="styles/dockstyle.css" />
</head>
<body>
<div id='debug'></div>
<div id='content'>
  <div id="leftliner">
    <div id="leftside">
      <div id="publicspaceliner">
        <div id="publicspace">
          <div id="opponentsliner">
            <div id="opponents" class="innerliner">
              <?php include("includes/opponents.html"); ?>
            </div><!--opponents-->
          </div><!--opponentsliner"-->
          <div id="boardliner">
            <div id="board" class="innerliner">
              <?php include("includes/board.html"); ?>
            </div><!--board-->
          </div><!--boardliner-->
          <div id="pubplayerliner">
            <div id="pubplayer" class="innerliner">
              <?php include("includes/pubplayer.html"); ?>
            </div><!--pubplayer-->
          </div><!--pubplayerliner-->
        </div><!--publicspace-->
      </div><!--publicspaceliner-->
      <div id="playerspaceliner">
        <div id="playerspace" class="innerliner">
        <!-- player's hand/lvl/cmbt -->
          <?php include("includes/playerspace.html"); ?>
        </div><!--playerspace"-->
      </div><!--playerspaceliner"-->
    </div><!--leftside-->
  </div><!--leftliner-->
  <div id="rightliner">
    <div id="rightside">
      <div id="infoliner">
        <div id="info">
          <center>info pane</center>
        </div><!--info-->
      </div><!--infoliner-->
      <div id="chatarealiner">
        <div id="chatarea">
          <center>chat area</center>
        </div> <!--chatarea-->
      </div><!--chatarealiner-->
    </div><!--rightside-->
  </div><!--rightliner-->


</div><!--Content-->
</body>
</html>
