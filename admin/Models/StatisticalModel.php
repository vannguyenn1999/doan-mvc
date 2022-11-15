<?php

class StatisticalModel extends BaseModel
{

    public function getAll()
    {
        $obj_sql = $this->connect->prepare('SELECT trang_thai , COUNT(trang_thai)AS num_status FROM don_hang GROUP BY trang_thai');
        if ($obj_sql->execute()) {
            if ($obj_sql->rowCount() > 0) {
                $result = $obj_sql->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        return $result;
    }

   
}
