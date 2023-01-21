<?php

class EntityProvider
{

    public static function getEntities($con, $categoryId, $limit, $id = null)
    {

        $sql = "SELECT * FROM entities ";

        if ($categoryId != null) {
            $sql .= "WHERE categoryId=:categoryId ";
        }

        if ($id != null) {
            $sql .= "AND id!=:id ";
        }

        $sql .= "ORDER BY RAND() LIMIT :limit";

        $query = $con->prepare($sql);

        if ($categoryId != null) {
            $query->bindValue(":categoryId", $categoryId);
        }
        if ($id != null) {
            $query->bindValue(":id", $id);
        }
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);

        $query->execute();

        $result = array();

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $result[] = new Entity($con, $row);
        }

        return $result;


    }

}

?>