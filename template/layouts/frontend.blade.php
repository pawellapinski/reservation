<!--The MIT License (MIT)

Copyright (c) 2017 www.netprogs.pl

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.-->
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Enjoy the trip!</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://bootswatch.com/3/readable/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">Home</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><p class="navbar-text">Logged in as:</p></li>
                        <li><p class="navbar-text">Robert</p></li>
                        <li><a href="admin.blade.php">admin</a></li>
                        <li><a href="#contact">logout</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Sign in</a></li>
                        <li><a href="#">Sign up</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="jumbotron">
            <div class="container">
                <h1>Enjoy the trip!</h1>
                <p>A platform for tourists and owners of tourist facilities. Find the original place for the holidays!</p>
                <p>Place your home on the site and let yourself be found by many tourists!</p>
                <form action="./?view=roomsearch" class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="city">City</label>
                        <input name="city" type="text" class="form-control autocomplete" id="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="day_in">Check in</label>
                        <input name="check_in" type="text" class="form-control datepicker" id="check_in" placeholder="Check in">
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="day_out">Check out</label>
                        <input name="check_out" type="text" class="form-control datepicker" id="check_out" placeholder="Check out">
                    </div>
                    <div class="form-group">
                        <select name="room_size" class="form-control">
                            <option>Room size</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Search</button>
                    <input type="hidden" name="view" value="roomsearch">
                </form>

            </div>
        </div>

        <?php include 'frontend/' . $view . '.blade.php'; ?>

        <div class="container-fluid">

            <div class="row mobile-apps">

                <div class="col-md-6 col-xs-12">
                    <img src="images/mobile-app.png" alt="" class="img-responsive center-block">
                </div>

                <div class="col-md-6 col-xs-12">
                    <h1 class="text-center">Download mobile app.</h1>
                    <a href="#"><img class="img-responsive center-block" src="images/google.png" alt=""></a><br><br>
                    <a href="#"><img class="img-responsive center-block" src="images/apple.png" alt=""></a><br><br>
                    <a href="#"><img class="img-responsive center-block" src="images/windows.png" alt=""></a>

                </div>

            </div>

            <hr>

            <footer>

                <p class="text-center">&copy; 2017 Enjoy the trip!, Inc.</p>

            </footer>

        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
    </body>
</html>
