<?php
    function openDatabase()
    {
        return mysqli_connect("localhost:3306", "root", "12345678", "ventas");
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