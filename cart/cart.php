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
                                        <button class="btn btn-outline-secondary" type="button">Button</button>
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
                                            <a class="nav-link active" aria-current="page" href="index.php">Laptop</a>
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
    <!-- cart item -->
    <section class="cartItem">
        <div class="container">
            <table id="tblItem">
                <thead id="tblHead">
                    <tr>
                        <th>Hình Ảnh Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Đơn Giá</th>
                        <th>Số lượng</th>
                        <th>Số Tiền</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody id="tblBody">
                  <?PHP  require_once('tsx_SP_gio.php');
                  view_sp_gio('bichngan') ?>
                </tbody>
                <tfoot id="tblFooter">
                    <tr>
                        <th>Tạm tính</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Giảm giá</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Phí vận chuyển</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Tổng tiền</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button>MUA NGAY</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
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
    <!-- <script src="./js/main.js"></script> -->
    <script src="./js/main.js"></script>
</body>