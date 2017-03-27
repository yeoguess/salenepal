<?php session_start();
/*
* Template Name: - Edit
*/
get_header(); ?>


<script src="https://cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
<script>
    var filter = $('#filter label.active input').val()
</script>

<?php
$products = get_post($_POST['id']);
// $products->the_post($_POST['id']);

$terms_this=wp_get_post_terms($_POST['id'],'product_category');
$post_meta = get_post_meta($_POST['id']);
$this_id=$_POST['id'];
echo '<pre>',
print_r($post_meta),
'</pre>';
?>



<div class="container">
 <div class="col-md-6">
                            <form action="<?php echo get_site_url() . '/process'; ?>" method="post" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label>Item Name:</label>
                                    <input type="text" name="title" value="<?php echo $products->post_title; ?>" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>Upload File:</label>
                                    <!-- <?php the_post_thumbnail('thumbnail', array('class' => 'img-rounded') );?> -->
                                    <input type="file" name="file" id="file" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Category: </label>
                                    <select name="category">
                                        <?php
                                            $terms = get_terms( 'product_category' );
                                                foreach ( $terms as $term ) { ?>
                                                <?php if ($term->name == $terms_this[0]->name){ ?>
                                                    <option value="<?php echo $term->name; ?>" selected>
                                                <?php } else { ?> 
                                                    <option value="<?php echo $term->name; ?>">
                                                    <?php } ?>
                                                <?php echo $term->name; ?>
                                            </option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Description:</label>
                                    <textarea name="description1"><?php echo $post_meta['description'][0]; ?></textarea>
                                </div>
                                <script>
                                    CKEDITOR.replace( 'description1' );
                                </script>

                                <div class="form-group">
                                    <label>Price:</label>
                                    <input type="text" value="<?php echo $post_meta['price'][0]; ?>" name="price" class="form-control">
                                </div>

                                <div class="form-group" id="filter">
                                    <label>Price Negotiable:</label>
                                     <?php  
                                        $option1 = '';
                                        $option2 = '';
                                        $option3 = '';
                                        $price = $post_meta['price_negotiable'][0];
                                        if($price == 'Yes'){
                                            $option1 = 'checked';
                                        }elseif ($price == 'No') {
                                            $option2 = 'checked';
                                        }else{
                                            $option3 = 'checked';
                                        }
                                    ?>
                                    <label class="radio-inline">
                                    <input value="Yes" type="radio" name="price_negotiable" <?php echo $option1; ?>>Yes
                                    </label>
                                    <label class="radio-inline">
                                      <input value="No" type="radio" name="price_negotiable" <?php echo $option2; ?>>No
                                    </label>
                                    <label class="radio-inline">
                                      <input value="Fixed Price" type="radio" name="price_negotiable" <?php echo $option3; ?>>Fixed Price
                                    </label>
                                </div>

                                <div class="form-group"  id="filter">
                                    <label>Condition:</label>
                                    <?php  
                                        $option1 = '';
                                        $option2 = '';
                                        $option3 = '';
                                        $option4 = '';
                                        $option5 = '';
                                        $condition = $post_meta['condition'][0];
                                        if($condition == 'Brand New [Not Used]'){
                                            $option1 = 'checked';
                                        }elseif ($condition == 'Like New [Used for few times]') {
                                            $option2 = 'checked';
                                        }elseif ($condition == 'Excellent') {
                                            $option3 = 'checked';
                                        }elseif ($condition == 'Good/Fair') {
                                            $option4 = 'checked';
                                        }else{
                                            $option5 = 'checked';
                                        }
                                    ?>
                                    <div class="radio">
                                    <label><input value="Brand New [Not Used]" type="radio" name="condition" <?php echo $option1; ?>>Brand New [Not Used]</label>
                                    </div>
                                    <div class="radio">
                                      <label><input value="Like New [Used for few times]" type="radio" name="condition" <?php echo $option2; ?>>Like New [Used for few times]</label>
                                    </div>
                                    <div class="radio">
                                      <label><input value="Excellent" type="radio" name="condition" <?php echo $option3; ?>>Excellent</label>
                                    </div>
                                    <div class="radio">
                                      <label><input value="Good/Fair" type="radio" name="condition" <?php echo $option4; ?>>Good/Fair</label>
                                    </div>
                                    <div class="radio disabled">
                                      <label><input value="Not Working" type="radio" name="condition" <?php echo $option5; ?>>Not Working</label>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label>Used For:</label>
                                    <input type="text" value="<?php echo $post_meta['used_for'][0]; ?>" name="used_for" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Features:</label>
                                    <input type="text" value="<?php echo $post_meta['features'][0]; ?>" name="features" class="form-control">
                                </div>

                                <div class="form-group" id="filter">
                                    <label>Home Delivery:</label>
                                    <?php  
                                        $option1 = '';
                                        $option2 = ''; 
                                        $warrenty =$post_meta['home_delivery'][0];
                                        if($warrenty == 'Yes'){
                                            $option1 = 'checked';
                                        }else{
                                            $option2 = 'checked';
                                        }
                                    ?>
                                    <label class="radio-inline">
                                    <input value="Yes" type="radio" name="home_delivery" <?php echo $option1; ?>>Yes
                                    </label>
                                    <label class="radio-inline">
                                      <input value="No" type="radio" name="home_delivery" <?php echo $option2; ?>>No
                                    </label>
                                </div>

                                <div class="form-group" id="filter">
                                    <label>Delivery Area:</label>
                                    <?php  
                                        $option1 = '';
                                        $option2 = '';
                                        $option3 = '';
                                        $delivery = $post_meta['delivery_area'][0];
                                        if($delivery == 'Within My Area'){
                                            $option1 = 'checked';
                                        }elseif ($delivery == 'Within My City') {
                                            $option2 = 'checked';
                                        }else{
                                            $option3 = 'checked';
                                        }
                                    ?>

                                    <div class="radio">
                                    <label><input value="Within My Area" type="radio" name="delivery_area" <?php echo $option1; ?>>Within My Area</label>
                                    </div>
                                    <div class="radio">
                                      <label><input value="Within My City" type="radio" name="delivery_area" <?php echo $option2; ?>>Within My City</label> 
                                    </div>
                                    <div class="radio disabled">
                                      <label><input value="Almost Anywhere in Nepal" type="radio" name="delivery_area" <?php echo $option3; ?>>Almost Anywhere in Nepal</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Delivery Charges:</label>
                                    <input type="text" value="<?php echo $post_meta['delivery_charges'][0]; ?>" name="delivery_charges" class="form-control">
                                </div>

                                <div class="form-group" id="filter">
                                    <label>Warrenty Type:</label>
                                    <?php  
                                        $option1 = '';
                                        $option2 = '';
                                        $option3 = '';
                                        $warrenty = $post_meta['warrenty_type'][0];
                                        if($warrenty == 'Dealer/Shop'){
                                            $option1 = 'checked';
                                        }elseif ($warrenty == 'Manufacturer/Importer') {
                                            $option2 = 'checked';
                                        }else{
                                            $option3 = 'checked';
                                        }
                                    ?>

                                    <div class="radio">
                                    <label><input value="Dealer/Shop" type="radio" name="warrenty_type" <?php echo $option1; ?>>Dealer/Shop</label>
                                    </div>
                                    <div class="radio">
                                      <label><input value="Manufacturer/Importer" type="radio" name="warrenty_type" <?php echo $option2; ?>>Manufacturer/Importer</label> 
                                    </div>
                                    <div class="radio disabled">
                                      <label><input value="No warrenty" type="radio" name="warrenty_type" <?php echo $option3; ?>>No warrenty</label>
                                    </div>
                                    </div>

                                <div class="form-group">
                                    <label>Warrenty Period:</label>
                                    <input type="text" value="<?php echo $post_meta['warrenty_period'][0]; ?>" name="warrenty_period" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Warrenty Includes:</label>
                                    <input type="text" value="<?php echo $post_meta['warrenty_includes'][0]; ?>" name="warrenty_includes" class="form-control">
                                </div>

                                 <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>" class="form-control">
                                </div>

                                <div class="form-group" id="filter">
                                    <label>Status:</label>
                                    <?php  
                                        $option1 = '';
                                        $option2 = ''; 
                                        $status =$post_meta['status'][0];
                                        if($status == 'Available'){
                                            $option1 = 'checked';
                                        }else{
                                            $option2 = 'checked';
                                        }
                                    ?>
                                    <label class="radio-inline">
                                    <input value="Available" type="radio" name="status" <?php echo $option1; ?>>Available
                                    </label>
                                    <label class="radio-inline">
                                      <input value="Sold" type="radio" name="status" <?php echo $option2; ?>>Sold
                                    </label>
                                </div>
                                <?php echo $post_meta['status'][0]; ?>
<!--
                                <div class="form-group">
                                    <input type="hidden" value="<?php echo date("Y-m-d"); ?>" name="created_date" class="form-control">
                                </div> -->

                                <div class="form-group" >
                                    <input type="submit" class="btn btn-primary" name="update" id="addcoursesubmit" value="Update">
                                </div>
                            </form>
                        </div><!--End col md 6-->
</div>

<?php get_footer(); ?>