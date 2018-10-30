<?php
$products = [
	[
		'title' => 'Черный кожаный кошелек',
		'price' => '699.00 грн',
		'img1' => 'IMG_2509Edit1.jpg',
		'img2' => 'IMG_2555-Edit-Edit.jpg',
	],
	[
		'title' => 'Коричневый кошелек ручной работы',
		'price' => '699.00 грн',
		'img1' => 'IMG_0067Edit1.jpg',
		'img2' => 'IMG_0101.jpg',
	],
	[
		'title' => 'Темно-коричневый кошелек',
		'price' => '699.00 грн',
		'img1' => '816532c9-1d44-4c4d-a.jpg',
		'img2' => 'IMG_2988-Edit-2.jpg',
	],
	[
		'title' => 'Высокое черное портмоне прошито черной нитью',
		'price' => '1399.00 грн',
		'img1' => 'IMG_3349Edit.jpg',
		'img2' => 'IMG_3350Edit.jpg',
	],
	[
		'title' => 'Высокое портмоне из темно-коричневой матовой кожи',
		'price' => '1399.00 грн',
		'img1' => 'IMG_2003Edit1.jpg',
		'img2' => 'IMG_2021EditEdit.jpg',
	],
	[
		'title' => 'Высокое портмоне из матовой кожи цвета коньяк',
		'price' => '1399.00 грн',
		'img1' => 'IMG_2003Edit1.jpg',
		'img2' => 'IMG_4395Edit3.jpg',
	],
];
?>

<!-- Catalog -->
<section id="catalog">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="section-title pl-3">
                    Каталог товаров
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">

			<?php foreach ($products as $product) : ?>
                <div class="col-sm-6 col-lg-4 p-0">
                    <div class="catalog-item">
                        <div class="catalog-item-prev">
                            <div class="catalog-item-prev-img"
                                 data-img="/images/products/<?= $product['img1'] ?>"
                                 style="background-image: url('/images/products/<?= $product['img1'] ?>');"></div>
                        </div>
                        <div class="catalog-item-content">
                            <div class="catalog-item-content-img"
                                 style="background-image: url('/images/products/<?= $product['img2'] ?>');"></div>
                            <div class="catalog-item-content-description">
                                <div class="catalog-item-content-description__name">
									<?= $product['title'] ?>
                                </div>
                                <div class="catalog-item-content-description__value">
									<?= $product['price'] ?>
                                </div>
                            </div>
                            <div class="catalog-item-content-nav d-flex">
                                <a href="#checkout" class="btn btn-decor catalog-item-btn__sale scroll-link"
                                   data-wallet="<?= $product['title'] ?>">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
			<?php endforeach; ?>

        </div>
        <div class="catalog-parallax-item parallax-item" data-paroller-factor="0.3" data-paroller-type="foreground"
             data-paroller-direction="vertical" style="z-index: 100">
            <img src="images/content/parallax/catalog/w-04.png" style="margin-right: -20px;" alt="">
        </div>
    </div>
</section>