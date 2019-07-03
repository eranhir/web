<?php
    /* This file assumes that an associative array already exists with 4 keys:
    1. img - path to product image including image name and extension (e.g.: images/myimage.jpg)
    2. price - product price without currency sign (e.g.: 25)
    3. title - product title (e.g. Retro Lamp)
    4. description - product description
    */
    echo '
                     <div class="product-container">
                        <div class="img-div">
                            <img src="' . $product['img']. '" class="product-image"/>
                            <div class="price">
                                <div class="textHover">' . $product['price']. '$</div>
                            </div>
                        </div>
                        <h3 class="product-title">
                                ' . $product['title']. '
                            </h3>
                        <p class="product-description">
                            ' . $product['description']. '
                        </p>
                    </div>
        ';
    ?>