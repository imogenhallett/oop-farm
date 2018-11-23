<?php
class AnimalFacts {

    use Feeding;

    private $animalsArray = array(
        array(
            'species' => 'cow',
            'produces' => 'milk',
            'eats' => 'grass',
            'joke' =>'Why do cows have hooves instead of feet?',
            'punch' => 'Because they lactose!'
        ),
        array(
            'species' => 'sheep',
            'produces' => 'wool',
            'eats' => 'grass',
            'joke' =>'What do you call a sheep covered in chocolate?',
            'punch' => 'A candy baa!'
        ),
        array(
            'species' => 'chicken',
            'produces' => 'eggs',
            'eats' => 'grains',
            'joke' =>'Knock knock. Who\'s there? Chicken! Chicken who?',
            'punch' => 'Chicken your pockets, maybe your keys are there!'
        ),
        array(
            'species' => 'pig',
            'produces' => 'pork',
            'eats' => 'vegetables',
            'joke' =>'How do pigs write top secret messages?',
            'punch' => 'With invisible oink!'
        )
    );

    /**
     * Function to loop through $animalsArray and find the species of animal passed in
     * @param string $species the species of animal to search for in the array
     * @return array|bool either the part of the array pertaining to the species or, if the species was not found, FALSE
     */
    public function findFact(string $species){
        foreach($this->animalsArray as $key => $animal) {
            if ($animal['species'] === $species) {
                $output = array_slice($this->animalsArray, $key,1);
                return $output;
            }
        }
        return false;
    }
}
