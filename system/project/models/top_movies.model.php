<?php 

class Movies_Model extends model
{
   protected static $object_class = 'Movies_Object';

   public static function getMovies()
   {
        //write query
        $query = "
            SELECT imdb_movie.* 
            FROM imdb_movie 
            WHERE imdb_movie.rating > 9.7
            order by rating DESC
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }
}