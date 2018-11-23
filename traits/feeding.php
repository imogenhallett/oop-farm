<?php
trait Feeding {

    private $feedingArray = array (
        'cow' => '3 times a day',
        'sheep' => '4 times a day',
        'chicken' => '5 times a day',
        'pig' => '6 times a day'
    );

    /**
     * Function to return the number of feeding times of the passed in animal
     * @param string $animal the animal to select from the $feedingArray
     * @return string the sentence about the number of feeding times for the passed in animal
     */
    public function feedAnimals(string $animal) :string {
        return $this->feedingArray[$animal];
    }
}
