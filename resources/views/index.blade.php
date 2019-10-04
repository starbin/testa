<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="topbar">
        <div class="topbar__wrapper">
            <div class="topbar__left">
            
            </div>
            <div class="topbar__right">
                <div class="topbar__search">
                    <div class="form__group">
                        <input type="text" class="form__basic" placeholder="find in forum"/>
                        <span class="form__icon"><i class="fa fa-search"></i></span>
                    </div>
                </div>
                <div class="topbar__icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="topbar__icon">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <a href="" class="btn btn-primary--noborder">Sign in</a>
                <a href="" class="btn btn-primary">Sign up</a>
            </div>
        </div>
    </div>
    <section>
        <div class="container--fluid">
            <div class="row">
                <section class="maincontent grid__col-12 grid__col-md-8">
                    <div class="section__title">
                        What's hot
                    </div>
                    <div class="list__vertical">
                        <div class="card">
                            <div class="card__wrapper">
                                <div class="card__media" >
                                    <figure class="card__image" role="img" style="background-image: url(https://via.placeholder.com/150)">
                                        <img alt="media alt">
                                    </figure>
                                </div>
                                <div class="card__content">
                                    <div class="card__title">
                                        <a href="">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet ex feugiat, tempus ex ullamcorper, faucibus arcu. Sed convallis dui vitae lectus gravida, at luctus eros pretium. 
                                        </a>    
                                    </div>
                                    <div class="card__infos">
                                        <div class="card__poster">
                                            posted by <a href="#">orlandoMagic</a>
                                        </div>
                                    </div>
                                    <div class="card__action">
                                        <a href="" class="card__actionbutton card__comment">
                                            <span class="card__actionicon"><i class="fa fa-envelope"></i></span>2,4K Replies
                                        </a>
                                        <a href="" class="card__actionbutton card__share">
                                            <span class="card__actionicon"><i class="fa fa-share"></i></span>share
                                        </a>
                                    </div>
                                </div>
                                <div class="card__vote">
                                    <div class="voter voted">
                                        <div class="voter__wrapper">
                                            <div class="voter__up active">
                                                <button class="voter__button"><i class="fa fa-angle-up"></i></button>
                                            </div>
                                            <div class="voter__sums">
                                                45
                                            </div>
                                            <div class="voter__down">
                                                <button class="voter__button"><i class="fa fa-angle-down"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="sidebar grid__col-12 grid__col-md-4">
                    <div class="section__title">
                        Read Other Post
                    </div>
                    <div class="promote">
                        
                    </div>
                </section>
            </div>
        </div>
    </section>
</body>
</html>