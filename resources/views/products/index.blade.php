@extends('layouts.master')
@section('page_title','product')
    
@section('content')
<div id="pagetitle" class="page-title bg-image ">
    <div class="container">
        <div class="page-title-inner">
            <div class="page-title-holder">
                <h1 class="page-title">Boutique</h1>
            </div>
            <ul class="ct-breadcrumb">
                <li><a class="breadcrumb-entry" href="/">Accueil</a></li>
                <li><span class="breadcrumb-entry">Produits</span></li>
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
                                <p class="woocommerce-result-count"> Affichage 1&ndash;12 de 45 resultats</p>
                            </div>
                            <div class="woocommerce-archive-layout"> <span
                                    class="archive-layout layout-grid active"></span> <span
                                    class="archive-layout layout-list"></span></div>
                            <div class="woocommerce-topbar-ordering">
                                <form class="woocommerce-ordering" method="get"> <select name="orderby"
                                        class="orderby" aria-label="Shop order">
                                        <option value="popularity">Trier par la popularité</option>
                                        <option value="rating">Trier par note moyenne</option>
                                        <option value="date" selected='selected'>Trier par dernier</option>
                                        <option value="price">Trier par prix : du plus bas au plus élevé</option>
                                        <option value="price-desc">Trier par prix : décroissant</option>
                                    </select> <input type="hidden" name="paged" value="1" /> <input
                                        type="hidden" name="sidebar-shop" value="left" /></form>
                            </div>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                        <ul class="products columns-4">
                            <li
                                class="product type-product post-1006 status-publish first instock product_cat-food product_cat-organic product_tag-apple product_tag-bread product_tag-cheese has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                <a href=""
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner">
                                    <div class="woocommerce-product-header">
                                         <a
                                            class="woocommerce-product-details"
                                            href="">
                                            <img width="500" height="400"
                                           
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-1006 "
                                                    data-id="1006">Comparer</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-1006 .ct-woosw-btn"
                                                    data-id="1006">Ajouter à la liste de souhaits</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-1006" data-id="1006"
                                                    data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="">Jus</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>10.00</bdi></span>
                                            &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>20.00</bdi></span></span>
                                        
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Somptueux, rassasiant et tentant de santé. Notre Biona Bio
                                                    Le granola aux baies sauvages est exactement ce qu'il vous faut
                                                    de lit. Les bienfaits de l'avoine entière roulée sont combinés
                                                    avec une variété de baies biologiques acidulées et cuites dans
                                                    grappes croustillantes qui sont aussi nutritives.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a
                                                href=""
                                                data-quantity="1"
                                                class="button product_type_variable add_to_cart_button"
                                                data-product_id="1006" data-product_sku="0012"
                                                aria-label="Select options for &ldquo;Organic Juice&rdquo;"
                                                rel="nofollow">Sélectionnez les options</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-1006 "
                                    data-id="1006">Comparer</button><a href="#" class="woosq-btn woosq-btn-1006"
                                    data-id="1006" data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a><button class="woosw-btn woosw-btn-1006 .ct-woosw-btn"
                                    data-id="1006"></button>
                            </li>
                            <li
                                class="product type-product post-1005 status-publish instock product_cat-fresh-fruits product_tag-coffee product_tag-fish product_tag-grape has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                <a href=""
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-600x500.png"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-600x500.png 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-1024x853.png 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-768x640.png 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1.png 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-1005 "
                                                    data-id="1005">Comparer</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-1005 .ct-woosw-btn"
                                                    data-id="1005">Ajouter à la liste de souhaits</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-1005" data-id="1005"
                                                    data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="">Orange frais</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>12.00</bdi></span>
                                            &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>65.00</bdi></span></span>
                                        
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Somptueux, rassasiant et délicieusement sain, notre Biona Organic
                                                    Le granola aux baies sauvages est exactement ce qu'il vous faut
                                                    de lit. Les bienfaits de l'avoine entière roulée sont combinés
                                                    avec une variété de baies biologiques acidulées et cuites dans
                                                    grappes croustillantes qui sont aussi nutritives.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a
                                                href=""
                                                data-quantity="1"
                                                class="button product_type_variable add_to_cart_button"
                                                data-product_id="1005" data-product_sku="0011"
                                                aria-label="Select options for &ldquo;Fresh Orange&rdquo;"
                                                rel="nofollow">Selectionnez les options</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-1005 "
                                    data-id="1005">Comparer</button><a href="#" class="woosq-btn woosq-btn-1005"
                                    data-id="1005" data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a><button class="woosw-btn woosw-btn-1005 .ct-woosw-btn"
                                    data-id="1005">Ajouter à la liste de souhaits</button>
                            </li>
                            <li
                                class="product type-product post-1004 status-publish instock product_cat-fresh-nuts product_cat-organic product_tag-apple product_tag-bread product_tag-cheese has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                <a href=""
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner"
                                    style="border-color: rgba(189,4,150,0.32)">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="">
                                            <img width="600" height="500"
                                                src="https://img.lemde.fr/2018/03/27/0/0/5760/3840/664/0/75/0/532f98c_18068-6hi00q.b16kl.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-1004 "
                                                    data-id="1004">Comparer</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-1004 .ct-woosw-btn"
                                                    data-id="1004">Ajouter à la liste de souhaits</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-1004" data-id="1004"
                                                    data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="">Les choux</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>4.00</bdi></span></span>
                                        
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Somptueux, rassasiant et délicieusement sain, notre Biona Organic
                                                     Le granola aux baies sauvages est exactement ce qu'il vous faut
                                                     de lit. Les bienfaits de l'avoine entière roulée sont combinés
                                                     avec une variété de baies biologiques acidulées et cuites dans
                                                     grappes croustillantes qui sont aussi nutritives.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a
                                                href=""
                                                data-quantity="1"
                                                class="button product_type_variable add_to_cart_button"
                                                data-product_id="1004" data-product_sku="0010"
                                                aria-label="Select options for &ldquo;Organic Cabbage&rdquo;"
                                                rel="nofollow">Sélectionnez les options</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-1004 "
                                    data-id="1004">Comparer</button><a href="#" class="woosq-btn woosq-btn-1004"
                                    data-id="1004" data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a><button class="woosw-btn woosw-btn-1004 .ct-woosw-btn"
                                    data-id="1004">Ajouter à la liste de souhaits</button>
                            </li>
                            <li
                                class="product type-product post-1003 status-publish last instock product_cat-bread-bakery product_cat-food product_cat-organic product_tag-coffee product_tag-fish product_tag-grape has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                <a href=""
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product4-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product4-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product4-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product4-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product4.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-1003 "
                                                    data-id="1003">Comparer</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-1003 .ct-woosw-btn"
                                                    data-id="1003">Ajouter à la liste de souhaits</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-1003" data-id="1003"
                                                    data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="">Pain</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>6.00</bdi></span></span>
                                        
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Somptueux, rassasiant et délicieusement sain, notre Biona Organic
                                                     Le granola aux baies sauvages est exactement ce qu'il vous faut
                                                     de lit. Les bienfaits de l'avoine entière roulée sont combinés
                                                     avec une variété de baies biologiques acidulées et cuites dans
                                                     grappes croustillantes qui sont aussi nutritives.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a
                                                href=""
                                                data-quantity="1"
                                                class="button product_type_variable add_to_cart_button"
                                                data-product_id="1003" data-product_sku="009"
                                                aria-label="Select options for &ldquo;Brown Bread&rdquo;"
                                                rel="nofollow">Sélectionnez les options</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-1003 "
                                    data-id="1003">Comparer</button><a href="#" class="woosq-btn woosq-btn-1003"
                                    data-id="1003" data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a><button class="woosw-btn woosw-btn-1003 .ct-woosw-btn"
                                    data-id="1003">Ajouter à la liste de souhaits</button>
                            </li>
                            <li
                                class="product type-product post-1002 status-publish first instock product_cat-organic product_tag-apple product_tag-bread product_tag-cheese has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                <a href=""
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product5-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product5-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product5-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product5-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product5.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-1002 "
                                                    data-id="1002">Comparer</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-1002 .ct-woosw-btn"
                                                    data-id="1002">Ajouter à la liste de souhaits</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-1002" data-id="1002"
                                                    data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="">Jus frais</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>8.00</bdi></span></span>
                                        
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Somptueux, rassasiant et délicieusement sain, notre Biona Organic
                                                     Le granola aux baies sauvages est exactement ce qu'il vous faut
                                                     de lit. Les bienfaits de l'avoine entière roulée sont combinés
                                                     avec une variété de baies biologiques acidulées et cuites dans
                                                     grappes croustillantes qui sont aussi nutritives.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=1002"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="1002" data-product_sku="008"
                                                aria-label="Add &ldquo;Fresh Juice&rdquo; to your cart"
                                                rel="nofollow">Ajouter</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-1002 "
                                    data-id="1002">Comparer</button><a href="#" class="woosq-btn woosq-btn-1002"
                                    data-id="1002" data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a><button class="woosw-btn woosw-btn-1002 .ct-woosw-btn"
                                    data-id="1002">Ajouter à la liste de souhaits</button>
                            </li>
                            <li
                                class="product type-product post-1001 status-publish instock product_cat-organic product_tag-organic product_tag-pasta has-post-thumbnail sale shipping-taxable purchasable product-type-variable">
                                <a href=""
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"> <span
                                        class="onsale">Sale!</span> </a>
                                <div class="woocommerce-product-inner"
                                    style="border-color: rgba(26,129,52,0.32)">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product6-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product6-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product6-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product6-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product6.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-1001 "
                                                    data-id="1001">Comparer</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-1001 .ct-woosw-btn"
                                                    data-id="1001">Ajouter à la liste de souhaits</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-1001" data-id="1001"
                                                    data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="">Riz</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>10.00</bdi></span>
                                            &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>20.00</bdi></span></span>
                                        
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Somptueux, rassasiant et délicieusement sain, notre Biona Organic
                                                     Le granola aux baies sauvages est exactement ce qu'il vous faut
                                                     de lit. Les bienfaits de l'avoine entière roulée sont combinés
                                                     avec une variété de baies biologiques acidulées et cuites dans
                                                     grappes croustillantes qui sont aussi nutritives.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a
                                                href=""
                                                data-quantity="1"
                                                class="button product_type_variable add_to_cart_button"
                                                data-product_id="1001" data-product_sku="007"
                                                aria-label="Select options for &ldquo;Organic Rice&rdquo;"
                                                rel="nofollow">Sélectionnez les options</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-1001 "
                                    data-id="1001">Comparer</button><a href="#" class="woosq-btn woosq-btn-1001"
                                    data-id="1001" data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a><button class="woosw-btn woosw-btn-1001 .ct-woosw-btn"
                                    data-id="1001">Ajouter à la liste de souhaits</button>
                            </li>
                            <li
                                class="product type-product post-999 status-publish instock product_cat-discount-weekly product_cat-fresh-fruits product_cat-organic product_tag-organic product_tag-pasta has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                <a href=""
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"> <span
                                        class="onsale">Sale!</span> </a>
                                <div class="woocommerce-product-inner"
                                    style="border-color: rgba(166,46,37,0.22)">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product5-600x500.png"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product5-600x500.png 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product5-768x640.png 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product5.png 800w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-999 "
                                                    data-id="999">Comparer</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-999 .ct-woosw-btn"
                                                    data-id="999">Ajouter à la liste de souhaits</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-999" data-id="999"
                                                    data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href=""></a>Envie des pommes</h4> <span class="price"><del
                                                aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>24.00</bdi></span></del>
                                            <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>18.00</bdi></span></ins></span>
                                        
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Somptueux, rassasiant et délicieusement sain, notre Biona Organic
                                                     Le granola aux baies sauvages est exactement ce qu'il vous faut
                                                     de lit. Les bienfaits de l'avoine entière roulée sont combinés
                                                     avec une variété de baies biologiques acidulées et cuites dans
                                                     grappes croustillantes qui sont aussi nutritives.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=999"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="999" data-product_sku="006"
                                                aria-label="Add &ldquo;Red Apple Envy&rdquo; to your cart"
                                                rel="nofollow">Ajouter</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-999 "
                                    data-id="999">Comparer</button><a href="#" class="woosq-btn woosq-btn-999"
                                    data-id="999" data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a><button class="woosw-btn woosw-btn-999 .ct-woosw-btn"
                                    data-id="999">Ajouter à la liste de souhaits</button>
                            </li>
                            <li
                                class="product type-product post-998 status-publish last instock product_cat-bread-bakery product_tag-coffee product_tag-fish product_tag-grape has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                <a href=""
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner"
                                    style="border-color: rgba(167,73,48,0.32)">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href=""> <img
                                                width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product8-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product8-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product8-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product8-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product8.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-998 "
                                                    data-id="998">Comparer</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-998 .ct-woosw-btn"
                                                    data-id="998">Ajouter à la liste de souhaits</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-998" data-id="998"
                                                    data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="">Gâteau Avoine
                                                </a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>14.00</bdi></span></span>
                                        
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Somptueux, rassasiant et délicieusement sain, notre Biona Organic
                                                     Le granola aux baies sauvages est exactement ce qu'il vous faut
                                                     de lit. Les bienfaits de l'avoine entière roulée sont combinés
                                                     avec une variété de baies biologiques acidulées et cuites dans
                                                     grappes croustillantes qui sont aussi nutritives.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=998"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="998" data-product_sku="005"
                                                aria-label="Add &ldquo;Oat Cake&rdquo; to your cart"
                                                rel="nofollow">Ajouter</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-998 "
                                    data-id="998">Comparer</button><a href="#" class="woosq-btn woosq-btn-998"
                                    data-id="998" data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a><button class="woosw-btn woosw-btn-998 .ct-woosw-btn"
                                    data-id="998">Ajouter à la liste de souhaits</button>
                            </li>
                            <li
                                class="product type-product post-996 status-publish first instock product_cat-organic product_tag-apple product_tag-bread product_tag-cheese has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                <a href=""
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner"
                                    style="border-color: rgba(223,27,47,0.32)">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product9-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product9-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product9-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product9-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product9.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-996 "
                                                    data-id="996">Comparer</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-996 .ct-woosw-btn"
                                                    data-id="996">Ajouter à la liste de souhaits</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-996" data-id="996"
                                                    data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="">Baies rouge
                                                </a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>2.00</bdi></span></span>
                                        
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Somptueux, rassasiant et délicieusement sain, notre Biona Organic
                                                     Le granola aux baies sauvages est exactement ce qu'il vous faut
                                                     de lit. Les bienfaits de l'avoine entière roulée sont combinés
                                                     avec une variété de baies biologiques acidulées et cuites dans
                                                     grappes croustillantes qui sont aussi nutritives.</p>
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
                                    data-id="996">Comparer</button><a href="#" class="woosq-btn woosq-btn-996"
                                    data-id="996" data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a><button class="woosw-btn woosw-btn-996 .ct-woosw-btn"
                                    data-id="996">Ajouter à la liste de souhaits</button>
                            </li>
                            <li
                                class="product type-product post-995 status-publish instock product_cat-food product_cat-fresh-meat product_cat-grocery-frozen product_cat-organic product_tag-organic product_tag-pasta has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                <a href=""
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"> <span
                                        class="onsale">Sale!</span> </a>
                                <div class="woocommerce-product-inner">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product11-600x500.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product11-600x500.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product11-1024x853.jpg 1024w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product11-768x640.jpg 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product11.jpg 1260w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-995 "
                                                    data-id="995">Comparer</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-995 .ct-woosw-btn"
                                                    data-id="995">Ajouter à la liste de souhaits</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-995" data-id="995"
                                                    data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                    href="">Viande fraiche</a></h4> <span class="price"><del
                                                aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>20.00</bdi></span></del>
                                            <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>15.00</bdi></span></ins></span>
                                        
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Somptueux, rassasiant et délicieusement sain, notre Biona Organic
                                                     Le granola aux baies sauvages est exactement ce qu'il vous faut
                                                     de lit. Les bienfaits de l'avoine entière roulée sont combinés
                                                     avec une variété de baies biologiques acidulées et cuites dans
                                                     grappes croustillantes qui sont aussi nutritives.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=995"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="995" data-product_sku="003"
                                                aria-label="Add &ldquo;French Beef&rdquo; to your cart"
                                                rel="nofollow">Ajouter</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-995 "
                                    data-id="995">Comparer</button><a href="#" class="woosq-btn woosq-btn-995"
                                    data-id="995" data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a><button class="woosw-btn woosw-btn-995 .ct-woosw-btn"
                                    data-id="995">Ajouter à la liste de souhaits</button>
                            </li>
                            <li
                                class="product type-product post-994 status-publish instock product_cat-nature product_cat-organic product_cat-vegetable product_tag-apple product_tag-bread product_tag-cheese has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                <a href=""
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                <div class="woocommerce-product-inner"
                                    style="border-color: rgba(118,167,19,0.32)">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href=""> <img
                                                width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product11-600x500.png"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product11-600x500.png 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product11-768x640.png 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product11.png 800w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-994 "
                                                    data-id="994">Comparer</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-994 .ct-woosw-btn"
                                                    data-id="994">Ajouter à la liste de souhaits</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-994" data-id="994"
                                                    data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="">Arc vert</a></h4> <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>4.00</bdi></span></span>
                                        
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Somptueux, rassasiant et délicieusement sain, notre Biona Organic
                                                     Le granola aux baies sauvages est exactement ce qu'il vous faut
                                                     de lit. Les bienfaits de l'avoine entière roulée sont combinés
                                                     avec une variété de baies biologiques acidulées et cuites dans
                                                     grappes croustillantes qui sont aussi nutritives.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=994"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="994" data-product_sku="002"
                                                aria-label="Add &ldquo;Green Bow&rdquo; to your cart"
                                                rel="nofollow">Ajouter</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-994 "
                                    data-id="994">Comparer</button><a href="#" class="woosq-btn woosq-btn-994"
                                    data-id="994" data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a><button class="woosw-btn woosw-btn-994 .ct-woosw-btn"
                                    data-id="994">Ajouter à la liste de souhaits</button>
                            </li>
                            <li
                                class="product type-product post-2972 status-publish last instock product_cat-food product_cat-fresh-fish product_cat-grocery-frozen product_cat-organic product_tag-organic product_tag-pasta has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                <a href=""
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"> <span
                                        class="onsale">Sale!</span> </a>
                                <div class="woocommerce-product-inner">
                                    <div class="woocommerce-product-header"> <a
                                            class="woocommerce-product-details"
                                            href="">
                                            <img width="600" height="500"
                                                src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product111-600x500.png"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""
                                                srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product111-600x500.png 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product111-768x640.png 768w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/h3-product111.png 800w"
                                                sizes="(max-width: 600px) 100vw, 600px" /> </a>
                                        <div class="woocommerce-product-meta">
                                            <div class="woocommerce-compare"> <button
                                                    class="woosc-btn woosc-btn-2972 "
                                                    data-id="2972">Comparer</button></div>
                                            <div class="woocommerce-wishlist"> <button
                                                    class="woosw-btn woosw-btn-2972 .ct-woosw-btn"
                                                    data-id="2972">Ajouter à la liste de souhaits</button></div>
                                            <div class="woocommerce-quick-view"> <a href="#"
                                                    class="woosq-btn woosq-btn-2972" data-id="2972"
                                                    data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a></div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-product-content">
                                        <h4 class="woocommerce-product--title"> <a
                                                href="">Poisson frais</a></h4> <span class="price"><del
                                                aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>20.00</bdi></span></del>
                                            <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>15.00</bdi></span></ins></span>
                                        
                                        <div class="woocommerce-product--excerpt" style="display: none;">
                                            <div class="woocommerce-product-details__short-description">
                                                <p>Somptueux, rassasiant et délicieusement sain, notre Biona Organic
                                                     Le granola aux baies sauvages est exactement ce qu'il vous faut
                                                     de lit. Les bienfaits de l'avoine entière roulée sont combinés
                                                     avec une variété de baies biologiques acidulées et cuites dans
                                                     grappes croustillantes qui sont aussi nutritives.</p>
                                            </div>
                                        </div>
                                        <div class="woocommerce-add-to-cart"> <a href="?add-to-cart=2972"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="2972" data-product_sku="0023"
                                                aria-label="Add &ldquo;Fresh Sea Fish&rdquo; to your cart"
                                                rel="nofollow">Ajouter</a></div>
                                    </div>
                                </div> <button class="woosc-btn woosc-btn-2972 "
                                    data-id="2972">Comparer</button><a href="#" class="woosq-btn woosq-btn-2972"
                                    data-id="2972" data-effect="mfp-3d-unfold" data-context="default">Voir rapidement</a><button class="woosw-btn woosw-btn-2972 .ct-woosw-btn"
                                    data-id="2972">Ajouter à la liste de souhaits</button>
                            </li>
                        </ul>
                        <nav class="woocommerce-pagination">
                            <ul class='page-numbers'>
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers"
                                        href="">2</a>
                                </li>
                                <li><span class="page-numbers dots">&hellip;</span></li>
                                <li><a class="page-numbers"
                                        href="">4</a>
                                </li>
                                <li><a class="next page-numbers"
                                        href="">&rarr;</a>
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
                                        for="woocommerce-product-search-field-0">Rechercher :</label> <input
                                        type="search" id="woocommerce-product-search-field-0"
                                        class="search-field" placeholder="Search products&hellip;" value=""
                                        name="s" /> <button type="submit" value="Search">Rechercher</button> <input
                                        type="hidden" name="post_type" value="product" /></form>
                            </div>
                        </section>
                        <section id="woocommerce_product_categories-2"
                            class="widget woocommerce widget_product_categories">
                            <div class="widget-content">
                                <h2 class="widget-title"><span>Catégories</span></h2>
                                <ul class="product-categories">
                                    <li class="cat-item cat-item-69"><a
                                            href="">Boulangerie <span class="count right">2</span></a></li>
                                    <li class="cat-item cat-item-85"><a
                                            href="">Café
                                            <span class="count right">6</span></a></li>
                                    <li class="cat-item cat-item-73"><a
                                            href="">Rabais hebdomadaire <span class="count right">6</span></a></li>
                                
                                            
                                    <li class="cat-item cat-item-37"><a
                                            href="">Aliments 
                                            <span class="count right">8</span></a></li>
                                    <li class="cat-item cat-item-80"><a
                                            href="">Boissons alimentaires <span class="count right">5</span></a></li>
                                    <li class="cat-item cat-item-67"><a
                                            href="">Poisson frais <span class="count right">1</span></a></li>
                                    <li class="cat-item cat-item-66"><a
                                            href="">Fruits frais<span class="count right">7</span></a></li>
                                    <li class="cat-item cat-item-68"><a
                                            href="">Viande fraiche <span class="count right">2</span></a></li>
                                    <li class="cat-item cat-item-63"><a
                                            href="">Des noisettes fraiches <span class="count right">1</span></a></li>
                                    
                                    
                            </div>
                        </section>
                        <section id="woocommerce_price_filter-2"
                            class="widget woocommerce widget_price_filter">
                            <div class="widget-content">
                                <h2 class="widget-title"><span>Filtrer par le prix</span></h2>
                                <form method="get" action="">
                                    <div class="price_slider_wrapper">
                                        <div class="price_slider" style="display:none;"></div>
                                        <div class="price_slider_amount" data-step="10"> <input type="text"
                                                id="min_price" name="min_price" value="0" data-min="0"
                                                placeholder="Min price" /> <input type="text" id="max_price"
                                                name="max_price" value="120" data-max="120"
                                                placeholder="Max price" /> <button type="submit"
                                                class="button">Filter</button>
                                            <div class="price_label" style="display:none;"> Prix: <span
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
                                <h2 class="widget-title"><span>Meilleure vente</span></h2>
                                <ul class="product_list_widget">
                                    <li>
                                        <div class="wg-product-inner">
                                            <div class="wg-product-image"> <a
                                                    href="">
                                                    <img width="300" height="300"
                                                        src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-300x300.jpg"
                                                        class="attachment-300x300 size-300x300" alt=""
                                                        srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-300x300.jpg 300w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-600x600.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-96x96.jpg 96w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product1-460x460.jpg 460w"
                                                        sizes="(max-width: 300px) 100vw, 300px" /> </a></div>
                                            <div class="wg-product-holder">
                                                <h3 class="product-title"> <a
                                                        href="">Jus</a></h3>
                                               <span
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
                                                    href="">
                                                    <img width="300" height="300"
                                                        src="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-300x300.png"
                                                        class="attachment-300x300 size-300x300" alt=""
                                                        srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-300x300.png 300w, https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-600x600.png 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-96x96.png 96w, https://demo.casethemes.net/organio/wp-content/uploads/2021/04/h3-product2-1-460x460.png 460w"
                                                        sizes="(max-width: 300px) 100vw, 300px" /> </a></div>
                                            <div class="wg-product-holder">
                                                <h3 class="product-title"> <a
                                                        href="">
                                                        Orange frais</a></h3>
                                                 <span
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
                                                    href="">
                                                    <img width="300" height="300"
                                                        src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-300x300.jpg"
                                                        class="attachment-300x300 size-300x300" alt=""
                                                        srcset="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-300x300.jpg 300w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-600x600.jpg 600w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-96x96.jpg 96w, https://demo.casethemes.net/organio/wp-content/uploads/2021/03/product3-460x460.jpg 460w"
                                                        sizes="(max-width: 300px) 100vw, 300px" /> </a></div>
                                            <div class="wg-product-holder">
                                                <h3 class="product-title"> <a
                                                        href="">Les choux</a></h3>
                                                 <span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>4.00</bdi></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        {{-- <section id="woocommerce_product_tag_cloud-2"
                            class="widget woocommerce widget_product_tag_cloud">
                            <div class="widget-content">
                                <h2 class="widget-title"><span>Mots clés</span></h2>
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
                        </section> --}}
                    </div>
                </aside>
            </div>
        </div>
    </div><!-- #content inner -->
</div><!-- #content -->

@endsection