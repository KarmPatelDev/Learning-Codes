<?php
// it is use to filter multiple values
// Syntax : filter_var_array(data array, filter array);

$arr = Array(
        "stname" => "Kar737m",
        "stmarks" => "35",
        "stemail" => "ka  /rm@gmail/.com",
);

$filters = Array(
        "stname" => Array(
            "filter" => FILTER_SANITIZE_STRING,
            "options" => FILTER_FLAG_STRIP_HIGH
        ),
        "stmarks" => Array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => Array(
                "min_range" => 1,
                "max_range" => 100
            )
        ),
        "stemail" => FILTER_SANITIZE_EMAIL,
);

echo "<pre>";
print_r(filter_var_array($arr, $filters));
echo "</pre>";

?>