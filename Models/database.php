<?php
    function openDatabase()
    {
        return mysqli_connect("localhost:3306", "caso2_ambiente", "123456", "caso2");
    }

    function closeDatabase($database)
    {
        mysqli_close($database);
    }

    function executeQuery($sql)
    {
        $database = openDatabase();
        $recordset = mysqli_query($database, $sql);
        closeDatabase($database);

        return $recordset;
    }
?>