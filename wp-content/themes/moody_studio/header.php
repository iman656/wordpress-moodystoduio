<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="/scripts/jquery.js"></script>

    <?php wp_head(); ?>
</head>

<body  >

    <?php wp_body_open(); ?>

    <header>
    <div class="upper-header">
        <div class="column1">
            <a href="/"><span class="logo-text">MOODY STORE</span></a>
        </div>
        <div class="column1">
           
                    <?php
                     $cart_items_count = WC()->cart->get_cart_contents_count();
                    $menu_header = array(
                        'theme_location' => 'main_menu',
                        'menu_id' => 'main_menu',
                        'container' => 'nav',
                        'items_wrap' => 
                        '<ul>
                        <li><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/resources/images/Search.png" alt="Search"></a></li>
                        <li><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/resources/images/account.png" alt="My Account"></a></li>
                        <li><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/resources/images/cart11.png" alt="Cart" style="width: 25px;"></a></li>
                        <div class="basket-item-count">
                        <span class="cart-items-count count">
                    
                        <span class="cart-items-count count">' . $cart_items_count . '</span>
                            
                        </span>
                    </div>
                        <li><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/resources/images/Favorite.png" alt="Favorite"></a></li>
                        </ul>',
                    
        );
        
                    wp_nav_menu($menu_header);
                    ?>
                           
            </div>
    </div>

    <div class="lowheader">
        <?php
        $menu_header = array(
            'theme_location' => 'primary_menu',
            'menu_id' => 'primary_menu',
            'container' => 'nav',
            'container_class' => 'primary_menu'
        );
        wp_nav_menu($menu_header);
        ?>
    </div>
</header>
