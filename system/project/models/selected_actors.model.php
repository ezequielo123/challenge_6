<?php 

class Selected_Actors_Model extends model
{
   protected static $object_class = 'Selected_Actors_Object';

   public static function getSelected_Actors($unique_actor_id)
   {
        //write query
        $query = "
            SELECT imdb_person.* 
            FROM imdb_person 
            WHERE imdb_id = ?
        ";

        //run query and get result set
        $resultset = db::query($query, array($unique_actor_id));

        //retreive all the rows as objects
        $objects = static::fetchObject($resultset);
        
        return $objects;
   }
}