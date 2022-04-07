@extends('layouts.master')
@section('page_title','product')
    
@section('content')
<div id="pagetitle" class="page-title bg-image ">
    <div class="container">
        <div class="page-title-inner">
            <div class="page-title-holder">
                <h1 class="page-title">Shop</h1>
            </div>
            <ul class="ct-breadcrumb">
                <li><a class="breadcrumb-entry" href="https://demo.casethemes.net/organio/">Home</a></li>
                <li><span class="breadcrumb-entry">Products</span></li>
            </ul>
        </div>
    </div>
</div>
<div id="content" class="site-content">
    <div class="content-inner">
        <div class="container content-container">
            <div class="row content-row">
                <div id="primary"
                    class="content-area content-has-sidebar float-right col-xl-9 col-lg-9 col-md-12 col-sm-12">
                    <main id="main" class="site-main" role="main">
                        <div class="woocommerce-topbar">
                            <div class="woocommerce-result-count">
                                <p class="woocommerce-result-count"> Showing 1&ndash;12 of 45 results</p>
                            </div>
                            <div class="woocommerce-archive-layout"> <span
                                    class="archive-layout layout-grid active"></span> <span
                                    class="archive-layout layout-list"></span></div>
                            <div class="woocommerce-topbar-ordering">
                                <form class="woocommerce-ordering" method="get"> <select name="orderby"
                                        class="orderby" aria-label="Shop order">
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date" selected='selected'>Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select> <input type="hidden" name="paged" value="1" /> <input
                                        type="hidden" name="sidebar-shop" value="left" /></form>
                            </div>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                        <ul class="products columns-4">
                            <li
                                class="product type-product post-1006 status-publish first instock product_cat-food product_cat-organic product_tag-apple product_tag-bread product_tag-cheese has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                <a href="https://demo.casethemes.net/organio/product/organic-juice/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="https://demo.casethemes.net/organio/product/organic-juice/">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-1006 "
                                                    data-id="1006">Compare</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-1006 .ct-woosw-btn"
                                                    data-id="1006">Add to wishlist</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-1006" data-id="1006"
                                                    data-effect="mfp-3d-unfold" data-context="default">Quick
                                                    view</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="https://demo.casethemes.net/organio/product/organic-juice/">Organic
                                                Juice</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>10.00</bdi></span>
                                            &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>20.00</bdi></span></span>
                                        <div class="woocommerce-product--rating">
                                            <div class="star-rating" role="img"
                                                aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of
                                                    5</span></div>
                                        </div>
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Sumptuous, filling, and temptingly healthy. Our Biona Organic
                                                    Granola with Wild Berries is just the thing to get you out
                                                    of bed. The goodness of rolled wholegrain oats are combined
                                                    with a variety of tangy organic berries, and baked into
                                                    crispy clusters that are as nutritious.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a
                                                href="https://demo.casethemes.net/organio/product/organic-juice/"
                                                data-quantity="1"
                                                class="button product_type_variable add_to_cart_button"
                                                data-product_id="1006" data-product_sku="0012"
                                                aria-label="Select options for &ldquo;Organic Juice&rdquo;"
                                                rel="nofollow">Select options</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-1006 "
                                    data-id="1006">Compare</button><a href="#" class="woosq-btn woosq-btn-1006"
                                    data-id="1006" data-effect="mfp-3d-unfold" data-context="default">Quick
                                    view</a><button class="woosw-btn woosw-btn-1006 .ct-woosw-btn"
                                    data-id="1006">Add to wishlist</button>
                            </li>
                            <li
                                class="product type-product post-1005 status-publish instock product_cat-fresh-fruits product_tag-coffee product_tag-fish product_tag-grape has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                <a href="https://demo.casethemes.net/organio/product/fresh-orange/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="https://demo.casethemes.net/organio/product/fresh-orange/">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-600x500.png"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-600x500.png 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-1024x853.png 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-768x640.png 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1.png 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-1005 "
                                                    data-id="1005">Compare</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-1005 .ct-woosw-btn"
                                                    data-id="1005">Add to wishlist</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-1005" data-id="1005"
                                                    data-effect="mfp-3d-unfold" data-context="default">Quick
                                                    view</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="https://demo.casethemes.net/organio/product/fresh-orange/">Fresh
                                                Orange</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>12.00</bdi></span>
                                            &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>65.00</bdi></span></span>
                                        <div class="woocommerce-product--rating">
                                            <div class="star-rating" role="img"
                                                aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of
                                                    5</span></div>
                                        </div>
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Sumptuous, filling, and temptingly healthy, our Biona Organic
                                                    Granola with Wild Berries is just the thing to get you out
                                                    of bed. The goodness of rolled wholegrain oats are combined
                                                    with a variety of tangy organic berries, and baked into
                                                    crispy clusters that are as nutritious.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a
                                                href="https://demo.casethemes.net/organio/product/fresh-orange/"
                                                data-quantity="1"
                                                class="button product_type_variable add_to_cart_button"
                                                data-product_id="1005" data-product_sku="0011"
                                                aria-label="Select options for &ldquo;Fresh Orange&rdquo;"
                                                rel="nofollow">Select options</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-1005 "
                                    data-id="1005">Compare</button><a href="#" class="woosq-btn woosq-btn-1005"
                                    data-id="1005" data-effect="mfp-3d-unfold" data-context="default">Quick
                                    view</a><button class="woosw-btn woosw-btn-1005 .ct-woosw-btn"
                                    data-id="1005">Add to wishlist</button>
                            </li>
                            <li
                                class="product type-product post-1004 status-publish instock product_cat-fresh-nuts product_cat-organic product_tag-apple product_tag-bread product_tag-cheese has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                <a href="https://demo.casethemes.net/organio/product/organic-cabbage/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner"
                                    style="border-color: rgba(189,4,150,0.32)">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="https://demo.casethemes.net/organio/product/organic-cabbage/">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-1004 "
                                                    data-id="1004">Compare</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-1004 .ct-woosw-btn"
                                                    data-id="1004">Add to wishlist</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-1004" data-id="1004"
                                                    data-effect="mfp-3d-unfold" data-context="default">Quick
                                                    view</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="https://demo.casethemes.net/organio/product/organic-cabbage/">Organic
                                                Cabbage</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>4.00</bdi></span></span>
                                        <div class="woocommerce-product--rating">
                                            <div class="star-rating" role="img"
                                                aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of
                                                    5</span></div>
                                        </div>
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Sumptuous, filling, and temptingly healthy, our Biona Organic
                                                    Granola with Wild Berries is just the thing to get you out
                                                    of bed. The goodness of rolled wholegrain oats are combined
                                                    with a variety of tangy organic berries, and baked into
                                                    crispy clusters that are as nutritious.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a
                                                href="https://demo.casethemes.net/organio/product/organic-cabbage/"
                                                data-quantity="1"
                                                class="button product_type_variable add_to_cart_button"
                                                data-product_id="1004" data-product_sku="0010"
                                                aria-label="Select options for &ldquo;Organic Cabbage&rdquo;"
                                                rel="nofollow">Select options</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-1004 "
                                    data-id="1004">Compare</button><a href="#" class="woosq-btn woosq-btn-1004"
                                    data-id="1004" data-effect="mfp-3d-unfold" data-context="default">Quick
                                    view</a><button class="woosw-btn woosw-btn-1004 .ct-woosw-btn"
                                    data-id="1004">Add to wishlist</button>
                            </li>
                            <li
                                class="product type-product post-1003 status-publish last instock product_cat-bread-bakery product_cat-food product_cat-organic product_tag-coffee product_tag-fish product_tag-grape has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                <a href="https://demo.casethemes.net/organio/product/brown-bread/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="https://demo.casethemes.net/organio/product/brown-bread/">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product4-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product4-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product4-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product4-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product4.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-1003 "
                                                    data-id="1003">Compare</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-1003 .ct-woosw-btn"
                                                    data-id="1003">Add to wishlist</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-1003" data-id="1003"
                                                    data-effect="mfp-3d-unfold" data-context="default">Quick
                                                    view</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="https://demo.casethemes.net/organio/product/brown-bread/">Brown
                                                Bread</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>6.00</bdi></span></span>
                                        <div class="woocommerce-product--rating">
                                            <div class="star-rating" role="img"
                                                aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of
                                                    5</span></div>
                                        </div>
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Sumptuous, filling, and temptingly healthy, our Biona Organic
                                                    Granola with Wild Berries is just the thing to get you out
                                                    of bed. The goodness of rolled wholegrain oats are combined
                                                    with a variety of tangy organic berries, and baked into
                                                    crispy clusters that are as nutritious.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a
                                                href="https://demo.casethemes.net/organio/product/brown-bread/"
                                                data-quantity="1"
                                                class="button product_type_variable add_to_cart_button"
                                                data-product_id="1003" data-product_sku="009"
                                                aria-label="Select options for &ldquo;Brown Bread&rdquo;"
                                                rel="nofollow">Select options</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-1003 "
                                    data-id="1003">Compare</button><a href="#" class="woosq-btn woosq-btn-1003"
                                    data-id="1003" data-effect="mfp-3d-unfold" data-context="default">Quick
                                    view</a><button class="woosw-btn woosw-btn-1003 .ct-woosw-btn"
                                    data-id="1003">Add to wishlist</button>
                            </li>
                            <li
                                class="product type-product post-1002 status-publish first instock product_cat-organic product_tag-apple product_tag-bread product_tag-cheese has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                <a href="https://demo.casethemes.net/organio/product/fresh-juice/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="https://demo.casethemes.net/organio/product/fresh-juice/">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product5-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product5-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product5-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product5-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product5.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-1002 "
                                                    data-id="1002">Compare</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-1002 .ct-woosw-btn"
                                                    data-id="1002">Add to wishlist</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-1002" data-id="1002"
                                                    data-effect="mfp-3d-unfold" data-context="default">Quick
                                                    view</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="https://demo.casethemes.net/organio/product/fresh-juice/">Fresh
                                                Juice</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>8.00</bdi></span></span>
                                        <div class="woocommerce-product--rating">
                                            <div class="star-rating" role="img"
                                                aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of
                                                    5</span></div>
                                        </div>
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Sumptuous, filling, and temptingly healthy, our Biona Organic
                                                    Granola with Wild Berries is just the thing to get you out
                                                    of bed. The goodness of rolled wholegrain oats are combined
                                                    with a variety of tangy organic berries, and baked into
                                                    crispy clusters that are as nutritious.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=1002"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="1002" data-product_sku="008"
                                                aria-label="Add &ldquo;Fresh Juice&rdquo; to your cart"
                                                rel="nofollow">Add to cart</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-1002 "
                                    data-id="1002">Compare</button><a href="#" class="woosq-btn woosq-btn-1002"
                                    data-id="1002" data-effect="mfp-3d-unfold" data-context="default">Quick
                                    view</a><button class="woosw-btn woosw-btn-1002 .ct-woosw-btn"
                                    data-id="1002">Add to wishlist</button>
                            </li>
                            <li
                                class="product type-product post-1001 status-publish instock product_cat-organic product_tag-organic product_tag-pasta has-post-thumbnail sale shipping-taxable purchasable product-type-variable">
                                <a href="https://demo.casethemes.net/organio/product/organic-rice/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"> <span
                                        class="onsale">Sale!</span> </a>
                                <div class="woocommerce-product-inner"
                                    style="border-color: rgba(26,129,52,0.32)">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="https://demo.casethemes.net/organio/product/organic-rice/">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product6-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product6-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product6-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product6-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product6.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-1001 "
                                                    data-id="1001">Compare</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-1001 .ct-woosw-btn"
                                                    data-id="1001">Add to wishlist</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-1001" data-id="1001"
                                                    data-effect="mfp-3d-unfold" data-context="default">Quick
                                                    view</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="https://demo.casethemes.net/organio/product/organic-rice/">Organic
                                                Rice</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>10.00</bdi></span>
                                            &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>20.00</bdi></span></span>
                                        <div class="woocommerce-product--rating">
                                            <div class="star-rating" role="img"
                                                aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of
                                                    5</span></div>
                                        </div>
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Sumptuous, filling, and temptingly healthy, our Biona Organic
                                                    Granola with Wild Berries is just the thing to get you out
                                                    of bed. The goodness of rolled wholegrain oats are combined
                                                    with a variety of tangy organic berries, and baked into
                                                    crispy clusters that are as nutritious.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a
                                                href="https://demo.casethemes.net/organio/product/organic-rice/"
                                                data-quantity="1"
                                                class="button product_type_variable add_to_cart_button"
                                                data-product_id="1001" data-product_sku="007"
                                                aria-label="Select options for &ldquo;Organic Rice&rdquo;"
                                                rel="nofollow">Select options</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-1001 "
                                    data-id="1001">Compare</button><a href="#" class="woosq-btn woosq-btn-1001"
                                    data-id="1001" data-effect="mfp-3d-unfold" data-context="default">Quick
                                    view</a><button class="woosw-btn woosw-btn-1001 .ct-woosw-btn"
                                    data-id="1001">Add to wishlist</button>
                            </li>
                            <li
                                class="product type-product post-999 status-publish instock product_cat-discount-weekly product_cat-fresh-fruits product_cat-organic product_tag-organic product_tag-pasta has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                <a href="https://demo.casethemes.net/organio/product/red-apple-envy/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"> <span
                                        class="onsale">Sale!</span> </a>
                                <div class="woocommerce-product-inner"
                                    style="border-color: rgba(166,46,37,0.22)">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="https://demo.casethemes.net/organio/product/red-apple-envy/">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product5-600x500.png"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product5-600x500.png 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product5-768x640.png 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product5.png 800w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-999 "
                                                    data-id="999">Compare</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-999 .ct-woosw-btn"
                                                    data-id="999">Add to wishlist</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-999" data-id="999"
                                                    data-effect="mfp-3d-unfold" data-context="default">Quick
                                                    view</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="https://demo.casethemes.net/organio/product/red-apple-envy/">Red
                                                Apple Envy</a></h4> <span class="price"><del
                                                aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>24.00</bdi></span></del>
                                            <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>18.00</bdi></span></ins></span>
                                        <div class="woocommerce-product--rating">
                                            <div class="star-rating" role="img"
                                                aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of
                                                    5</span></div>
                                        </div>
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Sumptuous, filling, and temptingly healthy, our Biona Organic
                                                    Granola with Wild Berries is just the thing to get you out
                                                    of bed. The goodness of rolled wholegrain oats are combined
                                                    with a variety of tangy organic berries, and baked into
                                                    crispy clusters that are as nutritious.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=999"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="999" data-product_sku="006"
                                                aria-label="Add &ldquo;Red Apple Envy&rdquo; to your cart"
                                                rel="nofollow">Add to cart</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-999 "
                                    data-id="999">Compare</button><a href="#" class="woosq-btn woosq-btn-999"
                                    data-id="999" data-effect="mfp-3d-unfold" data-context="default">Quick
                                    view</a><button class="woosw-btn woosw-btn-999 .ct-woosw-btn"
                                    data-id="999">Add to wishlist</button>
                            </li>
                            <li
                                class="product type-product post-998 status-publish last instock product_cat-bread-bakery product_tag-coffee product_tag-fish product_tag-grape has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                <a href="https://demo.casethemes.net/organio/product/oat-cake/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner"
                                    style="border-color: rgba(167,73,48,0.32)">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="https://demo.casethemes.net/organio/product/oat-cake/"> <img
                                                width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product8-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product8-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product8-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product8-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product8.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-998 "
                                                    data-id="998">Compare</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-998 .ct-woosw-btn"
                                                    data-id="998">Add to wishlist</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-998" data-id="998"
                                                    data-effect="mfp-3d-unfold" data-context="default">Quick
                                                    view</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="https://demo.casethemes.net/organio/product/oat-cake/">Oat
                                                Cake</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>14.00</bdi></span></span>
                                        <div class="woocommerce-product--rating">
                                            <div class="star-rating" role="img"
                                                aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of
                                                    5</span></div>
                                        </div>
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Sumptuous, filling, and temptingly healthy, our Biona Organic
                                                    Granola with Wild Berries is just the thing to get you out
                                                    of bed. The goodness of rolled wholegrain oats are combined
                                                    with a variety of tangy organic berries, and baked into
                                                    crispy clusters that are as nutritious.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=998"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="998" data-product_sku="005"
                                                aria-label="Add &ldquo;Oat Cake&rdquo; to your cart"
                                                rel="nofollow">Add to cart</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-998 "
                                    data-id="998">Compare</button><a href="#" class="woosq-btn woosq-btn-998"
                                    data-id="998" data-effect="mfp-3d-unfold" data-context="default">Quick
                                    view</a><button class="woosw-btn woosw-btn-998 .ct-woosw-btn"
                                    data-id="998">Add to wishlist</button>
                            </li>
                            <li
                                class="product type-product post-996 status-publish first instock product_cat-organic product_tag-apple product_tag-bread product_tag-cheese has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                <a href="https://demo.casethemes.net/organio/product/red-berries/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner"
                                    style="border-color: rgba(223,27,47,0.32)">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="https://demo.casethemes.net/organio/product/red-berries/">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product9-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product9-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product9-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product9-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product9.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-996 "
                                                    data-id="996">Compare</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-996 .ct-woosw-btn"
                                                    data-id="996">Add to wishlist</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-996" data-id="996"
                                                    data-effect="mfp-3d-unfold" data-context="default">Quick
                                                    view</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="https://demo.casethemes.net/organio/product/red-berries/">Red
                                                Berries</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>2.00</bdi></span></span>
                                        <div class="woocommerce-product--rating">
                                            <div class="star-rating" role="img"
                                                aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of
                                                    5</span></div>
                                        </div>
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Sumptuous, filling, and temptingly healthy, our Biona Organic
                                                    Granola with Wild Berries is just the thing to get you out
                                                    of bed. The goodness of rolled wholegrain oats are combined
                                                    with a variety of tangy organic berries, and baked into
                                                    crispy clusters that are as nutritious.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=996"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="996" data-product_sku="004"
                                                aria-label="Add &ldquo;Red Berries&rdquo; to your cart"
                                                rel="nofollow">Add to cart</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-996 "
                                    data-id="996">Compare</button><a href="#" class="woosq-btn woosq-btn-996"
                                    data-id="996" data-effect="mfp-3d-unfold" data-context="default">Quick
                                    view</a><button class="woosw-btn woosw-btn-996 .ct-woosw-btn"
                                    data-id="996">Add to wishlist</button>
                            </li>
                            <li
                                class="product type-product post-995 status-publish instock product_cat-food product_cat-fresh-meat product_cat-grocery-frozen product_cat-organic product_tag-organic product_tag-pasta has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                <a href="https://demo.casethemes.net/organio/product/french-beef/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"> <span
                                        class="onsale">Sale!</span> </a>
                                <div class="woocommerce-product-inner">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="https://demo.casethemes.net/organio/product/french-beef/">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product11-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product11-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product11-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product11-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product11.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-995 "
                                                    data-id="995">Compare</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-995 .ct-woosw-btn"
                                                    data-id="995">Add to wishlist</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-995" data-id="995"
                                                    data-effect="mfp-3d-unfold" data-context="default">Quick
                                                    view</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="https://demo.casethemes.net/organio/product/french-beef/">French
                                                Beef</a></h4> <span class="price"><del
                                                aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>20.00</bdi></span></del>
                                            <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>15.00</bdi></span></ins></span>
                                        <div class="woocommerce-product--rating">
                                            <div class="star-rating" role="img"
                                                aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of
                                                    5</span></div>
                                        </div>
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Sumptuous, filling, and temptingly healthy, our Biona Organic
                                                    Granola with Wild Berries is just the thing to get you out
                                                    of bed. The goodness of rolled wholegrain oats are combined
                                                    with a variety of tangy organic berries, and baked into
                                                    crispy clusters that are as nutritious.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=995"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="995" data-product_sku="003"
                                                aria-label="Add &ldquo;French Beef&rdquo; to your cart"
                                                rel="nofollow">Add to cart</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-995 "
                                    data-id="995">Compare</button><a href="#" class="woosq-btn woosq-btn-995"
                                    data-id="995" data-effect="mfp-3d-unfold" data-context="default">Quick
                                    view</a><button class="woosw-btn woosw-btn-995 .ct-woosw-btn"
                                    data-id="995">Add to wishlist</button>
                            </li>
                            <li
                                class="product type-product post-994 status-publish instock product_cat-nature product_cat-organic product_cat-vegetable product_tag-apple product_tag-bread product_tag-cheese has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                <a href="https://demo.casethemes.net/organio/product/green-bow/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner"
                                    style="border-color: rgba(118,167,19,0.32)">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="https://demo.casethemes.net/organio/product/green-bow/"> <img
                                                width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product11-600x500.png"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product11-600x500.png 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product11-768x640.png 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product11.png 800w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-994 "
                                                    data-id="994">Compare</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-994 .ct-woosw-btn"
                                                    data-id="994">Add to wishlist</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-994" data-id="994"
                                                    data-effect="mfp-3d-unfold" data-context="default">Quick
                                                    view</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="https://demo.casethemes.net/organio/product/green-bow/">Green
                                                Bow</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>4.00</bdi></span></span>
                                        <div class="woocommerce-product--rating">
                                            <div class="star-rating" role="img"
                                                aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of
                                                    5</span></div>
                                        </div>
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Sumptuous, filling, and temptingly healthy, our Biona Organic
                                                    Granola with Wild Berries is just the thing to get you out
                                                    of bed. The goodness of rolled wholegrain oats are combined
                                                    with a variety of tangy organic berries, and baked into
                                                    crispy clusters that are as nutritious.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=994"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="994" data-product_sku="002"
                                                aria-label="Add &ldquo;Green Bow&rdquo; to your cart"
                                                rel="nofollow">Add to cart</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-994 "
                                    data-id="994">Compare</button><a href="#" class="woosq-btn woosq-btn-994"
                                    data-id="994" data-effect="mfp-3d-unfold" data-context="default">Quick
                                    view</a><button class="woosw-btn woosw-btn-994 .ct-woosw-btn"
                                    data-id="994">Add to wishlist</button>
                            </li>
                            <li
                                class="product type-product post-2972 status-publish last instock product_cat-food product_cat-fresh-fish product_cat-grocery-frozen product_cat-organic product_tag-organic product_tag-pasta has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                <a href="https://demo.casethemes.net/organio/product/fresh-sea-fish/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"> <span
                                        class="onsale">Sale!</span> </a>
                                <div class="woocommerce-product-inner">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="https://demo.casethemes.net/organio/product/fresh-sea-fish/">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product111-600x500.png"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product111-600x500.png 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product111-768x640.png 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product111.png 800w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-2972 "
                                                    data-id="2972">Compare</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-2972 .ct-woosw-btn"
                                                    data-id="2972">Add to wishlist</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-2972" data-id="2972"
                                                    data-effect="mfp-3d-unfold" data-context="default">Quick
                                                    view</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="https://demo.casethemes.net/organio/product/fresh-sea-fish/">Fresh
                                                Sea Fish</a></h4> <span class="price"><del
                                                aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>20.00</bdi></span></del>
                                            <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>15.00</bdi></span></ins></span>
                                        <div class="woocommerce-product--rating">
                                            <div class="star-rating" role="img"
                                                aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of
                                                    5</span></div>
                                        </div>
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Sumptuous, filling, and temptingly healthy, our Biona Organic
                                                    Granola with Wild Berries is just the thing to get you out
                                                    of bed. The goodness of rolled wholegrain oats are combined
                                                    with a variety of tangy organic berries, and baked into
                                                    crispy clusters that are as nutritious.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=2972"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="2972" data-product_sku="0023"
                                                aria-label="Add &ldquo;Fresh Sea Fish&rdquo; to your cart"
                                                rel="nofollow">Add to cart</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-2972 "
                                    data-id="2972">Compare</button><a href="#" class="woosq-btn woosq-btn-2972"
                                    data-id="2972" data-effect="mfp-3d-unfold" data-context="default">Quick
                                    view</a><button class="woosw-btn woosw-btn-2972 .ct-woosw-btn"
                                    data-id="2972">Add to wishlist</button>
                            </li>
                        </ul>
                        <nav class="woocommerce-pagination">
                            <ul class='page-numbers'>
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers"
                                        href="https://demo.casethemes.net/organio/shop/page/2/?sidebar-shop=left">2</a>
                                </li>
                                <li><span class="page-numbers dots">&hellip;</span></li>
                                <li><a class="page-numbers"
                                        href="https://demo.casethemes.net/organio/shop/page/4/?sidebar-shop=left">4</a>
                                </li>
                                <li><a class="next page-numbers"
                                        href="https://demo.casethemes.net/organio/shop/page/2/?sidebar-shop=left">&rarr;</a>
                                </li>
                            </ul>
                        </nav>
                    </main><!-- #main -->
                </div><!-- #primary -->
                <aside id="secondary"
                    class="sidebar-fixed widget-area widget-has-sidebar sidebar-fixed col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="sidebar-sticky">
                        <section id="woocommerce_product_search-2"
                            class="widget woocommerce widget_product_search">
                            <div class="widget-content">
                                <form role="search" method="get" class="woocommerce-product-search"
                                    action="https://demo.casethemes.net/organio/"> <label
                                        class="screen-reader-text"
                                        for="woocommerce-product-search-field-0">Search for:</label> <input
                                        type="search" id="woocommerce-product-search-field-0"
                                        class="search-field" placeholder="Search products&hellip;" value=""
                                        name="s" /> <button type="submit" value="Search">Rechercher</button> <input
                                        type="hidden" name="post_type" value="product" /></form>
                            </div>
                        </section>
                        <section id="woocommerce_product_categories-2"
                            class="widget woocommerce widget_product_categories">
                            <div class="widget-content">
                                <h2 class="widget-title"><span>Categories</span></h2>
                                <ul class="product-categories">
                                    <li class="cat-item cat-item-69"><a
                                            href="https://demo.casethemes.net/organio/product-category/bread-bakery/">Bread
                                            &amp; Bakery <span class="count right">2</span></a></li>
                                    <li class="cat-item cat-item-85"><a
                                            href="https://demo.casethemes.net/organio/product-category/coffee/">Coffee
                                            <span class="count right">6</span></a></li>
                                    <li class="cat-item cat-item-73"><a
                                            href="https://demo.casethemes.net/organio/product-category/discount-weekly/">Discount
                                            Weekly <span class="count right">6</span></a></li>
                                    <li class="cat-item cat-item-82"><a
                                            href="https://demo.casethemes.net/organio/product-category/dry-food/">Dry
                                            Food <span class="count right">3</span></a></li>
                                    <li class="cat-item cat-item-37"><a
                                            href="https://demo.casethemes.net/organio/product-category/food/">Food
                                            <span class="count right">8</span></a></li>
                                    <li class="cat-item cat-item-80"><a
                                            href="https://demo.casethemes.net/organio/product-category/food-drinks/">Food
                                            Drinks <span class="count right">5</span></a></li>
                                    <li class="cat-item cat-item-67"><a
                                            href="https://demo.casethemes.net/organio/product-category/fresh-fish/">Fresh
                                            Fish <span class="count right">1</span></a></li>
                                    <li class="cat-item cat-item-66"><a
                                            href="https://demo.casethemes.net/organio/product-category/fresh-fruits/">Fresh
                                            Fruits <span class="count right">7</span></a></li>
                                    <li class="cat-item cat-item-68"><a
                                            href="https://demo.casethemes.net/organio/product-category/fresh-meat/">Fresh
                                            Meat <span class="count right">2</span></a></li>
                                    <li class="cat-item cat-item-63"><a
                                            href="https://demo.casethemes.net/organio/product-category/fresh-nuts/">Fresh
                                            Nuts <span class="count right">1</span></a></li>
                                    <li class="cat-item cat-item-65"><a
                                            href="https://demo.casethemes.net/organio/product-category/grocery-frozen/">Grocery
                                            &amp; Frozen <span class="count right">4</span></a></li>
                                    <li class="cat-item cat-item-81"><a
                                            href="https://demo.casethemes.net/organio/product-category/millk-cream/">Millk
                                            Cream <span class="count right">3</span></a></li>
                                    <li class="cat-item cat-item-38"><a
                                            href="https://demo.casethemes.net/organio/product-category/nature/">Nature
                                            <span class="count right">7</span></a></li>
                                    <li class="cat-item cat-item-15"><a
                                            href="https://demo.casethemes.net/organio/product-category/organic/">Organic
                                            <span class="count right">22</span></a></li>
                                    <li class="cat-item cat-item-39"><a
                                            href="https://demo.casethemes.net/organio/product-category/recipies/">Recipies
                                            <span class="count right">3</span></a></li>
                                    <li class="cat-item cat-item-77"><a
                                            href="https://demo.casethemes.net/organio/product-category/soya-dairy-free/">Soya
                                            &amp; Dairy Free <span class="count right">7</span></a></li>
                                    <li class="cat-item cat-item-64"><a
                                            href="https://demo.casethemes.net/organio/product-category/vegetable/">Vegetable
                                            <span class="count right">7</span></a></li>
                                </ul>
                            </div>
                        </section>
                        <section id="woocommerce_price_filter-2"
                            class="widget woocommerce widget_price_filter">
                            <div class="widget-content">
                                <h2 class="widget-title"><span>Filter By Price</span></h2>
                                <form method="get" action="https://demo.casethemes.net/organio/shop/">
                                    <div class="price_slider_wrapper">
                                        <div class="price_slider" style="display:none;"></div>
                                        <div class="price_slider_amount" data-step="10"> <input type="text"
                                                id="min_price" name="min_price" value="0" data-min="0"
                                                placeholder="Min price" /> <input type="text" id="max_price"
                                                name="max_price" value="120" data-max="120"
                                                placeholder="Max price" /> <button type="submit"
                                                class="button">Filter</button>
                                            <div class="price_label" style="display:none;"> Price: <span
                                                    class="from"></span> &mdash; <span
                                                    class="to"></span></div> <input type="hidden"
                                                name="sidebar-shop" value="left" />
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                        <section id="woocommerce_products-2" class="widget woocommerce widget_products">
                            <div class="widget-content">
                                <h2 class="widget-title"><span>Best Seller</span></h2>
                                <ul class="product_list_widget">
                                    <li>
                                        <div class="wg-product-inner">
                                            <div class="wg-product-image"> <a
                                                    href="https://demo.casethemes.net/organio/product/organic-juice/">
                                                    <img width="300" height="300"
                                                        src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-300x300.jpg"
                                                        class="attachment-300x300 size-300x300" alt=""
                                                        srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-300x300.jpg 300w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-600x600.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-96x96.jpg 96w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-460x460.jpg 460w"
                                                        sizes="(max-width: 300px) 100vw, 300px" /> </a></div>
                                            <div class="wg-product-holder">
                                                <h3 class="product-title"> <a
                                                        href="https://demo.casethemes.net/organio/product/organic-juice/">Organic
                                                        Juice</a></h3>
                                                <div class="star-rating" role="img"
                                                    aria-label="Rated 5.00 out of 5"><span
                                                        style="width:100%">Rated <strong
                                                            class="rating">5.00</strong> out of
                                                        5</span></div> <span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>10.00</bdi></span>
                                                &ndash; <span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>20.00</bdi></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wg-product-inner">
                                            <div class="wg-product-image"> <a
                                                    href="https://demo.casethemes.net/organio/product/fresh-orange/">
                                                    <img width="300" height="300"
                                                        src="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-300x300.png"
                                                        class="attachment-300x300 size-300x300" alt=""
                                                        srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-300x300.png 300w, https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-600x600.png 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-96x96.png 96w, https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-460x460.png 460w"
                                                        sizes="(max-width: 300px) 100vw, 300px" /> </a></div>
                                            <div class="wg-product-holder">
                                                <h3 class="product-title"> <a
                                                        href="https://demo.casethemes.net/organio/product/fresh-orange/">Fresh
                                                        Orange</a></h3>
                                                <div class="star-rating" role="img"
                                                    aria-label="Rated 5.00 out of 5"><span
                                                        style="width:100%">Rated <strong
                                                            class="rating">5.00</strong> out of
                                                        5</span></div> <span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>12.00</bdi></span>
                                                &ndash; <span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>65.00</bdi></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wg-product-inner">
                                            <div class="wg-product-image"> <a
                                                    href="https://demo.casethemes.net/organio/product/organic-cabbage/">
                                                    <img width="300" height="300"
                                                        src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-300x300.jpg"
                                                        class="attachment-300x300 size-300x300" alt=""
                                                        srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-300x300.jpg 300w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-600x600.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-96x96.jpg 96w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-460x460.jpg 460w"
                                                        sizes="(max-width: 300px) 100vw, 300px" /> </a></div>
                                            <div class="wg-product-holder">
                                                <h3 class="product-title"> <a
                                                        href="https://demo.casethemes.net/organio/product/organic-cabbage/">Organic
                                                        Cabbage</a></h3>
                                                <div class="star-rating" role="img"
                                                    aria-label="Rated 5.00 out of 5"><span
                                                        style="width:100%">Rated <strong
                                                            class="rating">5.00</strong> out of
                                                        5</span></div> <span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>4.00</bdi></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section id="woocommerce_product_tag_cloud-2"
                            class="widget woocommerce widget_product_tag_cloud">
                            <div class="widget-content">
                                <h2 class="widget-title"><span>Tags</span></h2>
                                <div class="tagcloud"><a
                                        href="https://demo.casethemes.net/organio/product-tag/apple/"
                                        class="tag-cloud-link tag-link-51 tag-link-position-1"
                                        style="font-size: 22pt;" aria-label="apple (24 products)">apple</a> <a
                                        href="https://demo.casethemes.net/organio/product-tag/bread/"
                                        class="tag-cloud-link tag-link-52 tag-link-position-2"
                                        style="font-size: 22pt;" aria-label="bread (24 products)">bread</a> <a
                                        href="https://demo.casethemes.net/organio/product-tag/cheese/"
                                        class="tag-cloud-link tag-link-53 tag-link-position-3"
                                        style="font-size: 22pt;" aria-label="cheese (24 products)">cheese</a> <a
                                        href="https://demo.casethemes.net/organio/product-tag/coffee/"
                                        class="tag-cloud-link tag-link-54 tag-link-position-4"
                                        style="font-size: 16.909090909091pt;"
                                        aria-label="coffee (15 products)">coffee</a> <a
                                        href="https://demo.casethemes.net/organio/product-tag/fish/"
                                        class="tag-cloud-link tag-link-55 tag-link-position-5"
                                        style="font-size: 16.909090909091pt;"
                                        aria-label="fish (15 products)">fish</a> <a
                                        href="https://demo.casethemes.net/organio/product-tag/grape/"
                                        class="tag-cloud-link tag-link-56 tag-link-position-6"
                                        style="font-size: 16.909090909091pt;"
                                        aria-label="grape (15 products)">grape</a> <a
                                        href="https://demo.casethemes.net/organio/product-tag/organic/"
                                        class="tag-cloud-link tag-link-57 tag-link-position-7"
                                        style="font-size: 8pt;" aria-label="organic (6 products)">organic</a> <a
                                        href="https://demo.casethemes.net/organio/product-tag/pasta/"
                                        class="tag-cloud-link tag-link-58 tag-link-position-8"
                                        style="font-size: 8pt;" aria-label="pasta (6 products)">pasta</a></div>
                            </div>
                        </section>
                    </div>
                </aside>
            </div>
        </div>
    </div><!-- #content inner -->
</div><!-- #content -->

@endsection