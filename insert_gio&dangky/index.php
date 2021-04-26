<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CT250</title>

    <!-- BS4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- FONT AWESOME  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- FONT GOOGLE -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/main.css">

</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="row header-banner">
                <img src="./image/banner_TOP.png" alt="">
            </div>
            <div class="row header-navbar">
                <nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
                    <div class="container nav-left-right">
                        <div class="left-nav d-flex">
                            <a class="navbar-brand" href="./index.html">
                                <img src="./image/logo-fix.png" alt="">
                            </a>
                            <form class="">
                                <div class="input-group navbar-search">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" aria-label=""
                                        aria-describedby="basic-addon1">
                                </div>
                            </form>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse header-navbar--content" id="navbarSupportedContent">
                            <div class="navbar-select">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#laptop">Laptop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#sales">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#bestseller">Bestseller</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./cart.html">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./login.html">Login</a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- banner -->
    <section class="carousel">
        <div class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="./image/Slide-Galaxy-Buds-Live-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./image/Slide-Mi-11-5G-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./image/Slide-oppo-reno5.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
    </section>
    <!-- filter -->
    <section id="laptop" class="filter">
        <div class="container">
            <div class="row">
                <div class="card">
                    <img src="./image/MacBook44-b_27.png" alt="">
                </div>
                <div class="card">
                    <img src="./image/Acer44-b_25.jpg" alt="">
                </div>
                <div class="card">
                    <img src="./image/Asus44-b_1.png" alt="">
                </div>
                <div class="card">
                    <img src="./image/Dell44-b_2.jpg" alt="">
                </div>
                <div class="card">
                    <img src="./image/HP44-b_27.jpg" alt="">
                </div>
                <div class="card">
                    <img src="./image/Huawei44-b_7.jpg" alt="">
                </div>
                <div class="card">
                    <img src="./image/Lenovo44-b_35.png" alt="">
                </div>
                <div class="card">
                    <img src="./image/LG44-b_32.jpg" alt="">
                </div>
                <div class="card">
                    <img src="./image/MSI44-b_17.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- New Item -->
    <section class="item">
        <div class="container">
            <div class="row item-title">
                <h2>Sản phẩm mới</h2>
            </div>
            <div class="row item-content">
                <div class="row">
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bestseller  -->
    <section id="bestseller" class="bestseller item">
        <div class="container">
            <div class="row bestseller-title item-title">
                <h2>Sản phẩm bán chạy</h2>
            </div>
            <div class="row bestseller-content item-content">
                <div class="row">
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <?php $MASP=4;
                            echo "<a href='../insert_gio&dangky/view.php?tenbien=$MASP'"?>
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card titleHHHHH</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bestseller  -->
    <section id="sales" class="sales item">
        <div class="container">
            <div class="row sales-title item-title">
                <h2>Sản phẩm giảm giá</h2>
            </div>
            <div class="row sales-content item-content">
                <div class="row">
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-group col-md-3 col-sm-6">
                        <div class="card">
                            <a href="./view.html">
                                <div class="card-header">
                                    <img src="./image/laptop.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                    <button type="submit">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="bottom">
            <p>copyright</p>
        </div>
    </footer>
    <!-- script -->
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>

    <!-- popper -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <!-- BS4 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <!-- OWL JS     -->
    <script src="./js/owl.carousel.min.js"></script>
    <script>
        $('.courses__carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>
    <!-- MAIN JS -->
    <script src="./js/main.js"></script>
</body>
</html>