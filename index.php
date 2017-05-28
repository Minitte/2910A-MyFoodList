<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <?php include("include/head.inc"); ?>
    <link rel="stylesheet" href="css/home.css">

</head>

<body>
    <?php include("include/header.inc"); ?>
    <main>


        <!-- introduction section -->

        <section class="container-fluid text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thePull">
                            <div class="page-header">
                                <h2>Pull them In header</h2>
                            </div>
                            <p>Fusce vel tempus ante, id vestibulum arcu. Maecenas molestie faucibus turpis, in imperdiet libero bibendum eget. Nam ornare commodo arcu ut lacinia. Cras ut tincidunt diam, egestas posuere sem.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <div class="registerBox contentBox">
                            <h2>Register Now</h2>
                            <form>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Username or Email">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Repeat Password">
                                </div>
                                <button type="button" class="btn btn-primary btn-block btn-md">Register</button>
                            </form>
                            <button type="button" class="btn btn-default btn-block btn-xs">Already have an account?</button>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- background data / support -->


        <section class="container-fluid text-center bgDark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">

                        <img src="images/chart.png" class="img-responsive" alt="chart" />

                    </div>
                    <div class="col-sm-8">
                        <div class="page-header">
                            <h2>What's happening?</h2>
                        </div>
                        <p>About 20% of all foods blah blah...Aenean et vestibulum libero, vitae fringilla massa. Maecenas eget elementum lorem, non eleifend risus. Etiam facilisis ipsum tempor mauris volutpat auctor. </p>
                        <p>Vestibulum malesuada elit quis pulvinar maximus. Nulla facilisi. Aliquam finibus risus libero, eu varius mi aliquam sed. Curabitur vitae mi at ipsum maximus varius. Ut ex dolor, semper quis sollicitudin sit amet, consequat ac nunc.</p>

                    </div>
                </div>
            </div>
        </section>


        <!-- explain how does this help -->

        <section class="container-fluid text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-user glyphiconBig slideanim"></span>
                        <h2 class="slideanim">Profiles</h2>
                        <ul>
                            <li class="slideanim">Food preference</li>
                            <li class="slideanim">Show it to others</li>
                        </ul>

                    </div>
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-list-alt glyphiconBig slideanim"></span>
                        <h2 class="slideanim">Group List</h2>
                        <ul>
                            <li class="slideanim">Select your friends</li>
                            <li class="slideanim">Get a complete prefence list</li>
                        </ul>

                    </div>
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-shopping-cart glyphiconBig slideanim"></span>
                        <h2 class="slideanim">Shopping list</h2>
                        <ul>
                            <li class="slideanim">Plan a meal with the group list</li>
                            <li class="slideanim">Avoid buying undesired food</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!-- Something -->

        <section class="container-fluid text-center bgDark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="page-header">
                            <h2>Something here</h2>
                        </div>
                        <p>Morbi fringilla augue commodo, dapibus turpis eget, dictum odio. Praesent mollis lorem leo. Praesent id elit pretium, volutpat ligula at, dictum orci. Donec ultricies dolor eu mi suscipit sagittis. </p>
                        <p>Pellentesque in pulvinar tortor. Ut sit amet placerat felis. Praesent sit amet ultricies enim. Donec vitae interdum nisi. Donec rhoncus magna eu arcu commodo condimentum. Donec pulvinar vitae enim vulputate pharetra.</p>
                    </div>
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-grain glyphiconReallyBig"></span>
                    </div>
                </div>
            </div>
        </section>


        <!-- register / sign in button -->

        <section class="container-fluid text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <button class="btn btn-primary btn-md btn-block">Register</button>
                        <button class="btn btn-default btn-xs btn-block">Already have an account?</button>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </section>
    </main>
    <?php include("include/footer.inc"); ?>

    <!-- SCRIPT -->
    <script>
        // for slide animation as you scroll
        // https://www.w3schools.com/bootstrap/bootstrap_theme_company.asp
        $(window).scroll(function() {
            $(".slideanim").each(function() {
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });

    </script>

</body>

</html>
