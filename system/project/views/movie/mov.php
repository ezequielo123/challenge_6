<div class="left">

    <?php 
        if(isset($_GET['id'])) 
        { 

            $unique_id = request::get('id');

        }
     ?>   
        
    <h2><?php echo $movie_name->name; ?><?php echo ' <small> (' . $movie_name->year . ')</small>'; ?></h2>
    <?php echo '<img src="' . $movie_name->image . '" class="mypicture2">'; ?>
    <h4><?php echo $movie_name->description; ?></h4>
    <br>
    <h4>Cast</h4> 

        

</div>

