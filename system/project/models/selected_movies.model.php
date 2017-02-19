<?php 

class Selected_Movie_Model extends model
{
   protected static $object_class = 'Selected_Movie';

   public static function getSelectedMovie($unique_id)
   {
        //write query
        $query = "
            SELECT imdb_movie.* 
            FROM imdb_movie 
            WHERE imdb_movie.imdb_id = ?
        ";

        //run query and get result set
        $resultset = db::query($query, array($unique_id));

        //retreive all the rows as objects
        $objects = static::fetchObject($resultset);
        
        return $objects;
   }
}