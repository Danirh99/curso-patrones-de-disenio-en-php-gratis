<?php
class Post
{



    public static function getAll()
    {
        $db = DB::getInstance();
        // Sentencia preparada para prevenir inyección SQL
        $stmt = $db->prepare('SELECT * FROM posts');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getById($id)
    {
        $db = DB::getInstance();

        // Sentencia preparada para prevenir inyección SQL
        $stmt = $db->prepare('SELECT * FROM posts WHERE id = :id');

        // Sanitizamos la entrada
        $id = filter_var($id, FILTER_VALIDATE_INT);

        // Vinculamos el parámetro :id 
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        // Obtenemos el post
        $post = $stmt->fetch();

        // Retornamos instancia de Post o null si no existe
        if ($post) {
            return $post;
        } else {
            return null;
        }
    }
}
