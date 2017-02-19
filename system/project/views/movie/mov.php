<div class="container-left">

    <?php 
        if(isset($_GET['id'])) 
        { 

            $unique_id = request::get('email', '');;

        }
     ?>   
        
     <?php if(isset($unique_id)) : ?>

    <h2><?php echo $movies->name; ?></h2>
        

        <div class="rating">
            Rating: <strong><?php echo $movies->rating; ?></strong>
        </div>
        
    <?php else : ?>
        
        <p>Sorry, page not found!</p>

    <?php endif; ?> 
</div>

