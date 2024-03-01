<?php
    $tableName = "word";
    $columns = ['id', 'hieroglyph', 'meaning', 'pinyin', 'part_references']; // Список столбцов, которые вы хотите отобразить

    $fetchData = fetch_data($connect, $tableName, $columns);

    function fetch_data($connect, $tableName, $columns)
    {
        $columnName = implode(", ", $columns);
        $query = "SELECT * FROM word";
        $result = $connect->query($query);

        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    } ?>