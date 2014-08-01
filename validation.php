<html>
    <head>
        <title>
           By Sukhbir Singh Dhiman
        </title>
        <link type="text/css" rel="stylesheet" href="style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="validation.js"></script>
    </head>
    <body>
        <div class="main-form">
            <form action="#" method="post">
                <div class="inner-form">
                    <div class="inner-box">
                        <h1>jquery form validations</h1>
                    </div>
                    <div class="inner-box">
                        <div class="box-child-right">
                            <div class="fieldname">Firstname:</div>
                        </div>
                        <div class="box-child-left">
                            <div class="upper-child"><input type="text" id="name"></div>
                            <div class="upper-child"><label style="display:none" class="val-0 val">Please fill this field</label></div>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="box-child-right">
                            <div class="fieldname">Lastname:</div>
                        </div>
                        <div class="box-child-left">
                            <div class="upper-child"><input type="text" id="lname"></div>
                            <div class="upper-child"><label style="display:none" class="val-1 val">Please fill this field</label></div>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="box-child-right">
                            <div class="fieldname">Email:</div>
                        </div>
                        <div class="box-child-left">
                            <div class="upper-child"><input type="text" id="email"></div>
                            <div class="upper-child"><label style="display:none" class="val-2 val">Please fill this field</label></div>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="box-child-right">
                            <div class="fieldname">Password:</div>
                        </div>
                        <div class="box-child-left">
                            <div class="upper-child"><input type="password" id="pass"></div>
                            <div class="upper-child"><label style="display:none" class="val-3 val">Please fill this field</label></div>
                        </div>
                    </div>
                    <div class="inner-box">
                        <input type="button" value="submit" onclick="validation();">
                    </div>
                </div>

            </form>
        </div>
    </body>
</html>