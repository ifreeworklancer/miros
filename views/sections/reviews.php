<?php
$reviews = [
	[
		'name' => 'Елена Зацаринская',
		'body' => 'Изделие очень красивое, аккуратное и добротное. Кто ещё сомневается заказывать или нет... Однозначно надо приобретать. На подарок вообще шикарно. Мне с кошельком пришел ещё и брелочек :) очень приятно!',
		'avatar' => 'https://scontent.fozh1-1.fna.fbcdn.net/v/t1.0-9/42631841_346993152705176_2429365104710516736_n.jpg',
        'date' => '25 октября 2018'
	],
	[
		'name' => 'Инна Сушицкая',
		'body' => 'Огромнейшее Вам спасибо!) Кошелёк восхитителен!! Работаете быстро и качественно))',
		'avatar' => 'https://scontent.fozh1-1.fna.fbcdn.net/v/t1.0-9/43704619_1136461003168363_8916303680739737600_n.jpg',
		'date' => '24 октября 2018'
	],
	[
		'name' => 'Лина Забродская',
		'body' => 'Отлично ребята сработали, пошли нам навстречу и сделали все чуть быстрее указанных сроков, чтоб мы успели с подарком! Портмоне - вне всяких похвал! Даже не ожидала такого качества! Его приятно держать в руках, выглядит очень достойно.',
		'avatar' => 'https://scontent.fozh1-1.fna.fbcdn.net/v/t1.0-9/44932956_2050133498379760_6206439488902660096_n.jpg',
		'date' => '2 августа 2018'
	],
];
?>

<!-- Reviews -->
<section id="reviews">
    <div class="container-fluid p-0">
        <div class="col-sm-6">
            <h2 class="section-title text-center">
                Отзывы
            </h2>
        </div>
        <div class="col-12 p-0">
            <div class="reviews-slider">

				<?php foreach ($reviews as $review) : ?>

                    <div class="reviews-slider-item">
                        <div class="reviews-slider-item-img"
                             style="background-image: url('<?= $review['avatar'] ?>);"></div>
                        <div class="reviews-slider-item-content">
                            <p class="reviews-slider-item-content__descr">
								<?= $review['body'] ?>
                            </p>
                            <div class="reviews-slider-item-content-info">
                                <div class="reviews-slider-item-content-info__name">
									<?= $review['name'] ?>
                                </div>
                                <div class="reviews-slider-item-content-info__data">
                                    <?= $review['date'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

				<?php endforeach; ?>

            </div>
        </div>
    </div>
</section>