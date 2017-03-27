<?php
/*
* Template Name: - Process
*/
?>

<?php
if($_POST['update']){
        // Do some minor form validation to make sure there is content
        if (isset ($_POST['title'])) {
            $title =  $_POST['title'];
        } else {
            echo 'Please enter a title';
        }
        if (isset ($_POST['price'])) {
            $price = $_POST['price'];
        } else {
            echo 'Please enter the content';
        }
        if (isset ($_POST['description1'])) {
            $description = $_POST['description1'];
        } else {
            echo 'Please enter the content';
        }
        if (isset ($_POST['price_negotiable'])) {
            $price_negotiable = $_POST['price_negotiable'];
        } else {
            echo 'Please enter the content';
        }
        if (isset ($_POST['condition'])) {
            $condition = $_POST['condition'];
        } else {
            echo 'Please enter the content';
        }
        if (isset ($_POST['used_for'])) {
             $used_for = $_POST['used_for'];
        } else {
            echo 'Please enter the content';
        }
        if (isset ($_POST['features'])) {
            $features = $_POST['features'];
        } else {
            echo 'Please enter the content';
        }
        if (isset ($_POST['home_delivery'])) {
           $home_delivery = $_POST['home_delivery'];
        } else {
            echo 'Please enter the content';
        }
        if (isset ($_POST['delivery_area'])) {
            $delivery_area = $_POST['delivery_area'];
        } else {
            echo 'Please enter the content';
        }
        if (isset ($_POST['delivery_charges'])) {
           $delivery_charges = $_POST['delivery_charges'];
        } else {
            echo 'Please enter the content';
        }
         if (isset ($_POST['warrenty_type'])) {
            $warrenty_type = $_POST['warrenty_type'];
        } else {
            echo 'Please enter the content';
        }
        if (isset ($_POST['warrenty_period'])) {
            $warrenty_period = $_POST['warrenty_period'];
        } else {
            echo 'Please enter the content';
        }
        if (isset ($_POST['warrenty_includes'])) {
            $warrenty_includes = $_POST['warrenty_includes'];
        } else {
            echo 'Please enter the content';
        }
        if (isset ($_POST['status'])) {
            $status = $_POST['status'];
        } else {
            echo 'Please enter the content';
        }

        $post = array(
            'ID'            => $_POST['id'],
            'post_title'    => $title   
        );
       
       wp_update_post($post);
 
        update_post_meta($_POST['id'], 'price_negotiable', $price_negotiable);
        update_post_meta($_POST['id'], 'condition', $condition);
        update_post_meta($_POST['id'], 'used_for', $used_for);
        update_post_meta($_POST['id'], 'features', $features);
        update_post_meta($_POST['id'], 'home_delivery', $home_delivery);
        update_post_meta($_POST['id'], 'delivery_area', $delivery_area);
        update_post_meta($_POST['id'], 'delivery_charges', $delivery_charges);
        update_post_meta($_POST['id'], 'warrenty_type', $warrenty_type);
        update_post_meta($_POST['id'], 'warrenty_period', $warrenty_period);
        update_post_meta($_POST['id'], 'warrenty_includes', $warrenty_includes);
        update_post_meta($_POST['id'], 'description', $description);
        update_post_meta($_POST['id'], 'price', $price);
        update_post_meta($_POST['id'], 'status', $status);

        if ($_FILES) {
            array_reverse($_FILES);
            $i = 0;//this will count the posts
            
            foreach ($_FILES as $file => $array) {
                if ($i == 0) $set_feature = 1; //if $i ==0 then we are dealing with the first post
                    else $set_feature = 0; //if $i!=0 we are not dealing with the first post
                        $newupload = insert_attachment($file,$_POST['id'], $set_feature);
                            $i++; //count posts
                    }
                } 

        wp_set_object_terms( $_POST['id'], $_POST['category'], 'product_category');
        $url= get_site_url() . '/' . 'profile/';
        echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
    }

?>