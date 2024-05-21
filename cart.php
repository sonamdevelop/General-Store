<?php include('include/header.php'); ?> 

    <div class="cart d-flex justify-content-around align-items-center">
        <div class="cart-products">
            <div class="row row-cols-1 row-cols-md-2 mx-2 my-2 g-5" style="width: 40rem;">
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
                                <button class="btn btn-primary me-md-2" type="button">Qty: 2</button>
                            </div>
                        </div>
                    </div>  
                </div>
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
                                <button class="btn btn-primary me-md-2" type="button">Qty: 2</button>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <div class="cart-checkout d-flex flex-column" style="width: 30rem;">
            <h1 class="title">Total products: 4</h1>
            <h1 class="title">Total price: 2000</h1>
            <h1 class="title">Discount: 10%</h1>
            <h1 class="title">Final price: 1800</h1>
            <button type="button" class="btn btn-outline-dark my-2 fs-4">Add more items</button>
            <button type="button" class="btn btn-dark my-2 fs-4">Checkout Now</button>
        </div>
    </div>
    <?php include('include/footer.php'); ?> 