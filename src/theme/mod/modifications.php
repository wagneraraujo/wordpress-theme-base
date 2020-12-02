<?php 
remove_action("woocommerce_before_shop_loop", "woocommerce_result_count", 20);
remove_action("woocommerce_before_shop_loop", "woocommerce_catalog_ordering", 30);
remove_action("woocommerce_before_main_content", "woocommerce_breadcrumb", 20);
