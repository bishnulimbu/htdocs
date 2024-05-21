<?php
class Division {
    public function divide($numerator, $denominator) {
        if ($denominator == 0) {
            throw new Exception("Division by zero is not allowed.");
        }
        return $numerator / $denominator;
    }
}

// Usage example
try {
    $division = new Division();
    $result = $division->divide(10, 2); // This will cause an exception
    echo "Result: " . $result;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

