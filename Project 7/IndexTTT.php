<!DOCTYPE html>
<html>
    <head>
        <title>TicTacToe</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="scriptsTTT.js?<?php echo rand(); ?>"></script>

        <link rel="stylesheet" type="text/css" href="stylesTTT.css?<?php echo rand(); ?>" />
    </head>

    <body>
        <h1 id="title">TicTacToe</h1>
        <svg width="400" height="400" id="svg">
            <rect id="line" x="0" y="0" width="400" height="400" />
            <rect id="back11" class="back" x="0" y="0" width="123" height="123" onClick="play(11)"/>
            <rect id="back12" class="back" x="143" y="0" width="123" height="123" onClick="play(12)"/>
            <rect id="back13" class="back" x="285" y="0" width="123" height="123" onClick="play(13)"/>
            <rect id="back22" class="back" x="143" y="143" width="123" height="123" onClick="play(22)"/>
            <rect id="back23" class="back" x="285" y="143" width="123" height="123" onClick="play(23)"/>
            <rect id="back21" class="back" x="0" y="143" width="123" height="123" onClick="play(21)"/>
            <rect id="back32" class="back" x="143" y="285" width="123" height="123" onClick="play(32)"/>
            <rect id="back33" class="back" x="285" y="285" width="123" height="123" onClick="play(33)"/>
            <rect id="back31" class="back" x="0" y="285" width="123" height="123" onClick="play(31)"/>
            
            
            
            <text id="x11" class="xo" x="30" y="90">X</text>
            <text id="x21" class="xo" x="30" y="230">X</text>
            <text id="x31" class="xo" x="30" y="370">X</text>
            <text id="x12" class="xo" x="170" y="90">X</text>
            <text id="x22" class="xo" x="170" y="230">X</text>
            <text id="x32" class="xo" x="170" y="370">X</text>
            <text id="x13" class="xo" x="310" y="90">X</text>
            <text id="x23" class="xo" x="310" y="230">X</text>
            <text id="x33" class="xo" x="310" y="370">X</text>
            
            <text id="o11" class="xo" x="30" y="90">O</text>
            <text id="o21" class="xo" x="30" y="230">O</text>
            <text id="o31" class="xo" x="30" y="370">O</text>
            <text id="o12" class="xo" x="170" y="90">O</text>
            <text id="o22" class="xo" x="170" y="230">O</text>
            <text id="o32" class="xo" x="170" y="370">O</text>
            <text id="o13" class="xo" x="310" y="90">O</text>
            <text id="o23" class="xo" x="310" y="230">O</text>
            <text id="o33" class="xo" x="310" y="370">O</text>
            
            
        </svg>
        <div id="control">
            <button onclick="reset()">New Game</button>
        </div>
    </body>
</html>

