<?php

?>
<html>
    <head>
        <title>Calculator</title>
        <style>
            .but{
                width: 25px;
                height: 25px;
                font-weight: bold;
                text-align: center;
            }
            .cls{
                width: 25px;
                height: 25px;
                font-weight: bold;
                text-align: center;
                color: #ffffff;
                background-color: red;
            }
            .eql{
                width: 100%;
                height: 25px;
                font-weight: bold;
                text-align: center;
                color: #ffffff;
                background-color: green;
            }
            .display{
                background-color: #BCCD64;
                border:1px #666 solid; 
                height: 50px; width: 150px; 
                text-align: right; 
                font-size: 20px;
            }
        </style>
    </head>
    <body>

<table width="120">
    <tr>
        <td colspan="5"><textarea id="display" class="display"></textarea></td>
    </tr>
    <tr>
        <td><input value="7" type="button" class="but"></td>
        <td><input value="8" type="button" class="but"></td>
        <td><input value="9" type="button" class="but"></td>
        <td><input id="plus" value="+" type="button" class="but"></td>
        <td><input id="cls" value="C" type="button" class="cls"></td>
    </tr>
    <tr>
        <td><input value="4" type="button" class="but"></td>
        <td><input value="5" type="button" class="but"></td>
        <td><input value="6" type="button" class="but"></td>
        <td><input id="sub" value="-" type="button" class="but"></td>
        <td><input id="sqr" value="x2" type="button" class="but"></td>
    </tr>
    <tr>
        <td><input value="1" type="button" class="but"></td>
        <td><input value="2" type="button" class="but"></td>
        <td><input value="3" type="button" class="but"></td>
        <td><input id="mul" value="*" type="button" class="but"></td>
        <td><input id="per" value="%" type="button" class="but"></td>
    </tr>
    <tr>
        <td><input value="0" type="button" class="but"></td>
        <td><input id="dot" value="." type="button" class="but"></td>
        <td><input id="neg" value="+/-" type="button" class="but"></td>
        <td><input id="div" value="/" type="button" class="but"></td>
        <td><input id="some" value="" type="button" class="but" disabled></td>
    </tr>
    <tr>
        <td colspan="5"><input id="eql" value="=" type="button" class="eql"></td>
    </tr>
</table>

<script src="./js/calculator.js"></script>
    </body>

</html>

