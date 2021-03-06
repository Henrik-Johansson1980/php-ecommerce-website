<!-- Top Sale -->
<section id="top-sale">
    <div class="container py-5">
        <h2 class="font-rubik font-size-20">Top Sales</h2>
        <hr>
        <!-- OWL Carousel -->
        <div class="owl-carousel owl-theme">
        <?php foreach ($products as $item) : ?>
            <div class="item py-2">
                <div class="product font-raleway">
                    <a href="#">
                    <img src="<?php echo htmlspecialchars( (isset( $item['item_image']) && $item['item_image'] != '') ? $item['item_image'] : './assets/comingsoon.png' , ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars( $item['item_brand'] . ' ' . $item['item_name'], ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid p-2">
                    </a>
                    <div class="text-center">
                        <h6><?php echo htmlspecialchars( $item['item_brand'] . ' ' . $item['item_name'], ENT_QUOTES, 'UTF-8'); ?></h6>
                        <div class="rating text-warning font-size12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo htmlspecialchars( $item['item_price'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            </div>
        </div> <!-- OWL Carousel End-->
    </div>
</section><!-- Top Sale End -->
