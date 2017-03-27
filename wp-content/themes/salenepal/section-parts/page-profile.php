<?php session_start();
if(!$_SESSION['id']) {
    header('Location:' . get_site_url() . '/' . 'login');  
} 

/*
 Template Name: Profile
*/
get_header('profile');
?>
    
    <?php
        
        if(isset($_POST['delete']) ) {
            $wpdb->delete( 'wp_365posts', array('id' => $_POST['id']) );
        }


        if(isset($_POST['view']) ) {
            $wpdb->view( 'wp_365posts', the_permalink() );
        }

        if($_POST['Submit']){
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
        }if (isset ($_POST['warrenty_period'])) {
            $warrenty_period = $_POST['warrenty_period'];
        } else {
            echo 'Please enter the content';
        }if (isset ($_POST['warrenty_includes'])) {
            $warrenty_includes = $_POST['warrenty_includes'];
        } else {
            echo 'Please enter the content';
        }

        // Add the content of the form to $post as an array
        $post = array(
            'post_title'    => $title,
            'post_status'   => 'publish',         
            'post_type'     => 'product',
            'post_author'   => $_SESSION['id']
        );

        // Pass  the value of $post to WordPress the insert function
        $post_id = wp_insert_post($post);

        add_post_meta($post_id, 'price_negotiable', $price_negotiable, true);
        add_post_meta($post_id, 'condition', $condition, true);
        add_post_meta($post_id, 'used_for', $used_for, true);
        add_post_meta($post_id, 'features', $features, true);
        add_post_meta($post_id, 'home_delivery', $home_delivery, true);
        add_post_meta($post_id, 'delivery_area', $delivery_area, true);
        add_post_meta($post_id, 'delivery_charges', $delivery_charges, true);
        add_post_meta($post_id, 'warrenty_type', $warrenty_type, true);
        add_post_meta($post_id, 'warrenty_period', $warrenty_period, true);
        add_post_meta($post_id, 'warrenty_includes', $warrenty_includes, true);
        add_post_meta($post_id, 'description', $description, true);
        add_post_meta($post_id, 'price', $price, true);
        add_post_meta($post_id, 'status', 'available', true);

        wp_set_object_terms( $post_id, $_POST['category'], 'product_category');

        if ($_FILES) {
            array_reverse($_FILES);
            $i = 0;//this will count the posts
            
            foreach ($_FILES as $file => $array) {
                if ($i == 0) $set_feature = 1; //if $i ==0 then we are dealing with the first post
                    else $set_feature = 0; //if $i!=0 we are not dealing with the first post
                        $newupload = insert_attachment($file,$post_id, $set_feature);
                            echo $i++; //count posts
                    }
                } 
            }
    ?>

<script src="https://cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
<script>
    var filter = $('#filter label.active input').val()
</script>

<div class="container">
    <a style="color:white!important" type="button" class="btn btn-danger pull-right" href="<?php echo get_site_url() . '/' . '/profile/logout' ?>">Logout</a>
        <div class="row" style="min-height:300px;">
            <div class="col-md-2">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class=""><a href="#newad" data-toggle="tab">Post a new Ad</a></li>
                    <li class="active"><a href="#mypost" data-toggle="tab">My Posts</a></li>
                    <li class=""><a href="#messages" data-toggle="tab">Messages</a></li>
                </ul>
            </div><!--End col-md-2-->

            <div class="col-md-10">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane" id="newad">
                        <div class="col-md-6">
                            <form action="" method="post" id="addcourse" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label>Item Name:</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>Upload File:</label>
                                    <input type="file" name="file" id="file" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Category:</label>
                                    <select name="category">
                                        <?php
                                            $terms = get_terms( 'product_category' );
                                                foreach ( $terms as $term ) { ?>
                                            <option value="<?php echo $term->name; ?>">
                                                <?php echo $term->name; ?>
                                            </option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Description:</label>
                                    <textarea name="description1"></textarea>
                                </div>
                                <script>
                                    CKEDITOR.replace( 'description1' );
                                </script>

                                <div class="form-group">
                                    <label>Price:</label>
                                    <input type="text" name="price" class="form-control">
                                </div>

                                <div class="form-group" id="filter">
                                    <label>Price Negotiable:</label>
                                    <label class="radio-inline">
                                    <input value="Yes" type="radio" name="price_negotiable">Yes
                                    </label>
                                    <label class="radio-inline">
                                      <input value="No" type="radio" name="price_negotiable">No
                                    </label>
                                    <label class="radio-inline">
                                      <input value="Fixed Price" type="radio" name="price_negotiable">Fixed Price
                                    </label>
                                </div>

                                <div class="form-group"  id="filter">
                                    <label>Condition:</label>
                                    <div class="radio">
                                    <label><input value="Brand New [Not Used]" type="radio" name="condition">Brand New [Not Used]</label>
                                    </div>
                                    <div class="radio">
                                      <label><input value="Like New [Used for few times]" type="radio" name="condition">Like New [Used for few times]</label>
                                    </div>
                                    <div class="radio">
                                      <label><input value="Excellent" type="radio" name="condition">Excellent</label>
                                    </div>
                                    <div class="radio">
                                      <label><input value="Good/Fair" type="radio" name="condition">Good/Fair</label>
                                    </div>
                                    <div class="radio disabled">
                                      <label><input value="Not Working" type="radio" name="condition">Not Working</label>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label>Used For:</label>
                                    <input type="text" name="used_for" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Features:</label>
                                    <input type="text" name="features" class="form-control">
                                </div>

                                <div class="form-group" id="filter">
                                    <label>Home Delivery:</label>
                                    <label class="radio-inline">
                                    <input value="Yes" type="radio" name="home_delivery">Yes
                                    </label>
                                    <label class="radio-inline">
                                      <input value="No" type="radio" name="home_delivery">No
                                    </label>
                                </div>

                                <div class="form-group" id="filter">
                                    <label>Delivery Area:</label>
                                    <div class="radio">
                                    <label><input value="Within My Area" type="radio" name="delivery_area">Within My Area</label>
                                    </div>
                                    <div class="radio">
                                      <label><input value="Within My City" type="radio" name="delivery_area">Within My City</label> 
                                    </div>
                                    <div class="radio disabled">
                                      <label><input value="Almost Anywhere in Nepal" type="radio" name="delivery_area">Almost Anywhere in Nepal</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Delivery Charges:</label>
                                    <input type="text" name="delivery_charges" class="form-control">
                                </div>

                                <div class="form-group" id="filter">
                                    <label>Warrenty Type:</label>
                                    <div class="radio">
                                    <label><input value="Dealer/Shop" type="radio" name="warrenty_type">Dealer/Shop</label>
                                    </div>
                                    <div class="radio">
                                      <label><input value="Manufacturer/Importer" type="radio" name="warrenty_type">Manufacturer/Importer</label> 
                                    </div>
                                    <div class="radio disabled">
                                      <label><input value="No warrenty" type="radio" name="warrenty_type">No warrenty</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Warrenty Period:</label>
                                    <input type="text" name="warrenty_period" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Warrenty Includes:</label>
                                    <input type="text" name="warrenty_includes" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="hidden" value="<?php echo date("Y-m-d"); ?>" name="created_date" class="form-control">
                                </div>

                                <div class="form-group" >
                                    <input type="submit" class="btn btn-primary" name="Submit" id="addcoursesubmit" value="Submit">
                                </div>
                            </form>
                        </div><!--End col md 6-->
                    </div><!--End tab pane-->
            
                    
                    <div class="tab-pane active" id="mypost">
                        <?php
                        $login_user_id = $_SESSION['id'];
                            $products = new WP_Query(array(
                              'post_type' => 'product',
                              'author' => $login_user_id
                            ));
                            // echo '<pre>',
                            // print_r($products)
                            // ,'</pre>';
                        ?>
                        <p><strong>Ads Posted By Me</strong></p>

                        <div class="container">
                            <div class="auto-container">
                                <div class="clearfix">
                                <div class="space-60"></div>
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            if($products->have_posts()) :
                                            while ($products->have_posts()) :
                                                $products->the_post(); ?>
                                        <tr>
                                            <td>
                                                <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
                                            </td>
                                            <td>
                                                <?php 
                                                    
                                                   $terms=wp_get_post_terms(get_the_ID(),'product_category');
                                                   echo ($terms[0]->name);
                                                ?>
                                            </td>
                                            <td></td>
                                            <td>
                                                <form action="<?php echo get_site_url() . '/' . 'edit-classified' ; ?>" method="post"> 
                                                    <input type="hidden" name="id" value="<?php echo get_the_ID() ?>">
                                                    <input type="submit" name="edit"  class="btn btn-primary" value="Edit"/>
                                                </form>
                                                    <a style="color:white!important" href="<?php the_permalink(); ?>" class="btn btn-success">View</a>
                                                <form action="" method="post">    
                                                    <input type="hidden" name="id" value="<?php echo get_the_ID() ?>">
                                                    <input type="submit" name="delete"  class="btn btn-danger" value="Delete"/>
                                                </form>
                                            </td>
                                        </tr>
                                            <?php
                                                endwhile;
                                                endif;
                                            ?>
                                    </tbody>
                                </table>
                                </div><!--End row clearfix-->
                            </div><!--End auto-container-->
                        </div><!--End container-->
                    </div><!--End tab pane active-->
                
                    <div class="tab-pane " id="messages">Messages Tab.</div>
                </div><!--End tab content-->
            </div><!--End col md 10-->
        </div><!--End row-->
</div><!--End container-->

<?php get_footer(); ?>