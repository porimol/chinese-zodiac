<?php
/**
 * Chinise zodiac sign generator class .
 * By : p.c_roy@yahoo.com
 * Date: 30-Jul-15
 * Time: 2:39 PM
 */
class ZodiacSign
{
    // properties
    private $signs;
    private $sexaCycle;

    /**
     * Get all chinise zodiac signs
     *
     * @param
     * @return Response
     */
    private function signs()
    {
        $signs = array(
            "Rat" => "Yang Wood",
            "Ox" => "Yin Wood",
            "Tiger" => "Yang Fire",
            "Rabbit" => "Yin Fire",
            "Dragon" => "Yang Earth",
            "Snake" => "Yin Earth",
            "Horse" => "Yang Metal",
            "Goat" => "Yin Metal",
            "Monkey" => "Yang Water",
            "Rooster" => "Yin Water",
            "Dog" => "Yang Wood",
            "Pig" => "Yin Wood"
        );

        return $signs;
    }

    /**
     * Now, to determine the sexagenary cycle of a gregorian year, the algorithm is as follows:
     * $grego = (grego - 3) - (60 X ([(grego - 3)] / 60))
     *
     * @param
     * @return Response
     */
    private function sexagenaryToGregorian( $gYear )
    {
        return ($gYear - 3) - (60 * (floor(($gYear - 3) / 60)));
    }

    /**
     * Now, we know that the Sexagenary cycle consists of 60 periods, thus, to determine what animal and element a certain year matches:
     *
     * @param
     * @return Response
     */
    public function generateAnimal( $dateOfBirth )
    {
        $this->signs = $this->signs();
        $this->sexaCycle = $this->sexagenaryToGregorian( $dateOfBirth );

        $i = 1;
        while (ceil($this->sexaCycle / 12) > 0) {
            foreach ($this->signs as $animal => $value) {
                if ($i == $this->sexaCycle)
                    return array($animal => $value);
                $i++;
            }
        }
    }
}

$zodiac = new ZodiacSign();
$animal = $zodiac->generateAnimal( 2026 );

echo '<pre>';
print_r($animal);
echo '</pre>';
