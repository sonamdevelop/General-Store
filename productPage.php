<?php include('include/header.php'); ?>

      <div class="prod-head d-flex flex-wrap justify-content-evenly">
        <div class="img-container">
          <div class="one-image">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" style="width: 400px;  height: 400px;">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <?php for($i = 0; $i < 3; $i++) {
                    ?>
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="./images/product.png" class="d-block w-100 big-pro" alt="...">
                </div>
                <?php } ?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="more-image">
            <?php for($i = 0; $i < 3; $i++) {
                ?>
            <img src="./images/product.png" class="small-product-img" alt="...">
            <?php } ?>
          </div>
        </div>
        <div class="in-short-info">
          <h1>Product Name</h1>
          <div class="rate-price d-flex flex-wrap my-4">
            <h3>Ratings 3.5/5</h3>
            <h2 class="mx-5">$45.99</h2>
          </div>
          <div class="p-2 m-2 mx-0 ship border border-dark border-3 d-flex flex-wrap justify-content-between" style="width: 600px;">
            <h4>2 days shipping</h4>
            <h4><a href="/" class="link-offset-2 link-underline link-underline-opacity-0">See options</a></h4>
          </div>
          <div class="size-guide d-flex flex-wrap justify-content-start gap-3 align-items-center">
            <div class="dropdown">
              <a class="btn btn-outline-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Size: 9
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Size: 10</a></li>
                <li><a class="dropdown-item" href="#">Size: 11</a></li>
                <li><a class="dropdown-item" href="#">Size: 12</a></li>
              </ul>
            </div>
            <a href="/" class="link-offset-2 link-underline link-underline-opacity-0">Size Guide</a>
          </div>
          <p class="p my-4 fs-4">Hurry up only 2 items left</p>
          <button class="btn btn-outline-dark d-flex w-100 justify-content-center fs-5">Add to cart</button>
          <ul class="my-4">
            <li>One feature here</li>
            <li>Another feature here</li>
            <li>Some more features here</li>
          </ul>
        </div>
      </div>
      <section class="detailed m-5 my-0">
        <h4>Detailed description</h4>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque deserunt rerum consequatur, dolorum aliquid velit eaque consectetur quas sed id omnis fuga voluptas nihil facilis aliquam, eveniet minus deleniti suscipit!
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quidem quaerat ab! Earum voluptates, architecto voluptatibus animi magni, nobis eius inventore ratione accusantium voluptatum, laudantium facilis perferendis delectus? Sed, itaque.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem laboriosam provident sint magnam expedita accusamus aliquam odio distinctio eum, quasi, excepturi rem itaque ab dolores saepe nulla ullam corporis doloribus!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, eaque! Architecto ducimus id sapiente voluptatibus eveniet, ad recusandae quod, praesentium voluptatem voluptates perspiciatis cum, porro voluptas sit optio quidem amet.
        </p>
      </section>
      <section class="review-container m-5">
        <h2>Reviews</h2>
        <div class="reviews d-flex flex-wrap justify-content-between">
            <?php for($i = 0; $i < 3; $i++) {
                ?>
            <div class="card text-bg-dark mb-3" style="max-width: 24rem;">
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ipsam asperiores ullam saepe corrupti exercitationem dolore delectus laboriosam modi. Adipisci, eos eveniet in fuga natus autem maxime nostrum architecto officia.</p>
                    <h6 class="card-title">User Name</h6>
                    <h6 class="card-title">Ratings 4/5</h6>
                </div>
            </div>
            <?php } ?>
        </div>
      </section>
      <section class="recommend-prods m-5 d-flex flex-wrap flex-column align-items-center">
        <h3>Recommended products</h3>
        <div class="prods-container m-5 d-flex justify-content-around flex-wrap w-100">
            <?php for($i = 0; $i < 3; $i++) {
                ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./images/product.png" class="card-img-top" alt="product image">
                    <div class="card-body">
                        <h5 class="card-title">
                        Shirt
                        </h5>
                        <p class="card-text">
                        Classic yet contemporary, our shirt features timeless elegance with a modern twist, crafted from premium materials for comfort and style.
                        </p>
                        <p class="card-text">
                        Price: &#x20B9;500
                        </p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Go to cart</button>
                        </div>
                    </div>
                </div>  
            </div>
            <?php } ?>
        </div>
      </section>
      <?php include('include/footer.php'); ?>
