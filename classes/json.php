<?php
class JSON {
    /** Function to json encode an array
     * @param $arr the array to encode called from post.php
     */
    public function returnJSON($arr) {
        echo json_encode($arr);
    }
}
