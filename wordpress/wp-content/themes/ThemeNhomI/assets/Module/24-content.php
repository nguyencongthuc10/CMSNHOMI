<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-24">
    <div class="container magrin_travel">
        <div class="row">
            <div class="row shop">
                <div class="col-md-4">
                    <div class="box one" style="visibility: visible;">
                        <div class="item">
                            <div class="picture-home">
                                <div class="picturehover">
                                    <a href="#" class="product">
                                        <img src="images/product1.jpg" class="shop-product" alt="product1">
                                    </a>
                                </div>
                                <a href="#" class="shop-product"></a>
                            </div>
                            <a href="#" class="shop-product"></a>
                        </div>
                        <a href="#" class="shop-product"></a>
                        <div class="content">
                            <a href="#" class="shop-product"></a>
                            <h3>
                                <a href="#" class="shop-product"></a>
                                <a href="#">Product1</a>
                            </h3>
                            <div class="star-rating" title="raiting">
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                            </div>
                            <span class="price">
                                <ins>
                                    <span class="amount-price">
                                        <span class="currency">$</span>20.00
                                    </span>
                                </ins>
                            </span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                            <div class="prewiew">
                                <a href="#" rel="nofollow" class="cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box one" style="visibility: visible;">
                        <div class="item">
                            <div class="picture-home">
                                <div class="picturehover">
                                    <span class="sale">
                                        Sale!
                                    </span>
                                    <a href="#" class="product">
                                        <img src="images/product2.jpg" class="shop-product" alt="product2">
                                    </a>
                                </div>
                                <a href="#" class="shop-product"></a>
                            </div>
                            <a href="#" class="shop-product"></a>
                        </div>
                        <a href="#" class="shop-product"></a>
                        <div class="content">
                            <a href="#" class="shop-product"></a>
                            <h3>
                                <a href="#" class="shop-product"></a>
                                <a href="#">Product2</a>
                            </h3>
                            <div class="star-rating" title="raiting">
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star-o checkeds">
                                </span>
                                <span class="fa fa-star-o checkeds">
                                </span>
                            </div>
                            <span class="price">
                                <del>
                                    <span class="amount-price">
                                        <span class="currency">&#36;</span>25.00</span>
                                </del>
                                <ins>
                                    <span class="amount-price">
                                        <span class="currency">&#36;</span>30.00</span>
                                </ins>
                            </span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                            <div class="prewiew">
                                <a href="#" rel="nofollow" class="cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box one" style="visibility: visible;">
                        <div class="item">
                            <div class="picture-home">
                                <div class="picturehover">
                                    <span class="sale">
                                        Sale!
                                    </span>
                                    <a href="#" class="product">
                                        <img src="images/product3.jpg" class="shop-product" alt="product3">
                                    </a>
                                </div>
                                <a href="#" class="shop-product"></a>
                            </div>
                            <a href="#" class="shop-product"></a>
                        </div>
                        <a href="#" class="shop-product"></a>
                        <div class="content">
                            <a href="#" class="shop-product"></a>
                            <h3>
                                <a href="#" class="shop-product"></a>
                                <a href="#">Product3</a>
                            </h3>
                            <div class="star-rating" title="raiting">
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star-o checkeds">
                                </span>
                            </div>
                            <span class="price">
                                <del>
                                    <span class="amount-price">
                                        <span class="currency">&#36;</span>30.00</span>
                                </del>
                                <ins>
                                    <span class="amount-price">
                                        <span class="currency">&#36;</span>20.00</span>
                                </ins>
                            </span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                            <div class="prewiew">
                                <a href="#" rel="nofollow" class="cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box one" style="visibility: visible;">
                        <div class="item">
                            <div class="picture-home">
                                <div class="picturehover">
                                    <a href="#" class="product">
                                        <img src="images/product4.jpg" class="shop-product" alt="product4">
                                    </a>
                                </div>
                                <a href="#" class="shop-product"></a>
                            </div>
                            <a href="#" class="shop-product"></a>
                        </div>
                        <a href="#" class="shop-product"></a>
                        <div class="content">
                            <a href="#" class="shop-product"></a>
                            <h3>
                                <a href="#" class="shop-product"></a>
                                <a href="#">Product4</a>
                            </h3>
                            <div class="star-rating" title="raiting">
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                            </div>
                            <span class="price">
                            <ins>
                                    <span class="amount-price">
                                        <span class="currency">$</span>40.00
                                    </span>
                                </ins>
                            </span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                            <div class="prewiew">
                                <a href="#" rel="nofollow" class="cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box one" style="visibility: visible;">
                        <div class="item">
                            <div class="picture-home">
                                <div class="picturehover">
                                    <span class="sale">
                                        Sale!
                                    </span>
                                    <a href="#" class="product">
                                        <img src="images/product5.jpg" class="shop-product" alt="product5">
                                    </a>
                                </div>
                                <a href="#" class="shop-product"></a>
                            </div>
                            <a href="#" class="shop-product"></a>
                        </div>
                        <a href="#" class="shop-product"></a>
                        <div class="content">
                            <a href="#" class="shop-product"></a>
                            <h3>
                                <a href="#" class="shop-product"></a>
                                <a href="#">Product5</a>
                            </h3>
                            <div class="star-rating" title="raiting">
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star-o checkeds">
                                </span>
                                <span class="fa fa-star-o checkeds">
                                </span>
                            </div>
                            <span class="price">
                                <del>
                                    <span class="amount-price">
                                        <span class="currency">&#36;</span>40.00</span>
                                </del>
                                <ins>
                                    <span class="amount-price">
                                        <span class="currency">&#36;</span>35.00</span>
                                </ins>
                            </span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                            <div class="prewiew">
                                <a href="#" rel="nofollow" class="cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box one" style="visibility: visible;">
                        <div class="item">
                            <div class="picture-home">
                                <div class="picturehover">
                                    <span class="sale">
                                        Sale!
                                    </span>
                                    <a href="#" class="product">
                                        <img src="images/product6.jpg" class="shop-product" alt="product6">
                                    </a>
                                </div>
                                <a href="#" class="shop-product"></a>
                            </div>
                            <a href="#" class="shop-product"></a>
                        </div>
                        <a href="#" class="shop-product"></a>
                        <div class="content">
                            <a href="#" class="shop-product"></a>
                            <h3>
                                <a href="#" class="shop-product"></a>
                                <a href="#">Product6</a>
                            </h3>
                            <div class="star-rating" title="raiting">
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star checked">
                                </span>
                                <span class="fa fa-star-o checkeds">
                                </span>
                            </div>
                            <span class="price">
                                <del>
                                    <span class="amount-price">
                                        <span class="currency">&#36;</span>45.00</span>
                                </del>
                                <ins>
                                    <span class="amount-price">
                                        <span class="currency">&#36;</span>40.00</span>
                                </ins>
                            </span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                            <div class="prewiew">
                                <a href="#" rel="nofollow" class="cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>