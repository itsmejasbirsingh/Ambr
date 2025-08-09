<?php

function getFaqs($conn)
{
    $sql = "SELECT * FROM faqs ORDER BY orderby";
    $result = $conn->query($sql);

    return $result;
}
