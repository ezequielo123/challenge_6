<div class="movie-details">
    
    <div class="container">
        <div class="row">
            <?php foreach ($movies as $movie) : ?>
                    <div class="col-sm-4 spaces"><div class="name"><?php echo $movie->name; ?> <?php echo '<span class="year">' . $movie->year . '</span> '; ?><?php echo ' <span class="year">&star; ' . $movie->rating . '</span>'; ?></div></div>
            <?php endforeach; ?>
        </div>
    </div>
    <p>Fusce eleifend eget lectus ut tempor. Nam efficitur, mauris quis rutrum cursus, enim massa iaculis enim, malesuada sagittis quam nibh id eros. Nullam efficitur felis gravida nulla rhoncus, et aliquam neque finibus. Pellentesque nisl ex, semper eget enim in, mollis facilisis turpis. Ut iaculis massa risus. Etiam facilisis accumsan massa, eget volutpat turpis vulputate a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeo.</p>

    <p>Nulla et finibus erat, et consectetur mauris. Donec fringilla odio eros, eu tincidunt leo lacinia et. Sed sed pulvinar mauris. Donec sem lectus, suscipit at sollicitudin vitae, ullamcorper at augue. Ut molestie mi nec dui porttitor, ac lacinia diam porta. Fusce aliquam sapien et nisl feugiat, nec pellentesque nunc mollis. Quisque bibendum quam cursus, porta tellus ac, ultricies nisl. Donec et tellus sed libero iaculis auctor. Etiam velit ex, rhoncus nec quam sit amet, gravida ornare turpis. Aliquam erat volutpat.</p>
</div>      