<div class="left">

    <?php 
        if(isset($_GET['id'])) 
        { 

            $unique_actor_id = request::get('id');

        }
     ?>   
        
    <h2><?php echo $actor->fullname; ?><?php echo ' <small> (' . $actor->birth_date . ')</small>'; ?></h2>
    <?php echo '<img src="' . $actor->image . '" class="mypicture2">'; ?>
    <h3>Biography</h3>
    <h4><?php echo $actor->bio; ?></h4>
    <br>

        

</div>

