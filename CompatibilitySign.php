<?php
/**
 * Chinise zodiac sign compatibility class
 * By : p.c_roy@yahoo.com
 * Date: 30-Jul-15
 * Time: 4:32 PM
 */

class CompatibilitySign {

    /**
     * Check compatibility for chinese zodiac signs
     *
     * @param $user_sign, $pet_sign
     * @return Response
     */
    public function compatible($user_sign, $pet_sign)
    {
        $rat_compatible = $this->ratCompatibility( $user_sign, $pet_sign );
        $ox_compatible = $this->oxCompatibility( $user_sign, $pet_sign );
        $tiger_compatible = $this->tigerCompatibility( $user_sign, $pet_sign );
        $rabbit_compatible = $this->rabbitCompatibility( $user_sign, $pet_sign );
        $dragon_compatible = $this->dragonCompatibility( $user_sign, $pet_sign );
        $snake_compatible = $this->snakeCompatibility( $user_sign, $pet_sign );
        $horse_compatible = $this->horseCompatibility( $user_sign, $pet_sign );
        $sheep_compatible = $this->sheepCompatibility( $user_sign, $pet_sign );
        $monkey_compatible = $this->monkeyCompatibility( $user_sign, $pet_sign );
        $rooster_compatible = $this->roosterCompatibility( $user_sign, $pet_sign );
        $dod_compatible = $this->dogCompatibility( $user_sign, $pet_sign );
        $pig_compatible = $this->pigCompatibility( $user_sign, $pet_sign );

        if( $rat_compatible ) {
            return $rat_compatible;
        }
        elseif( $ox_compatible ) {
            return $ox_compatible;
        }
        elseif( $tiger_compatible ) {
            return $tiger_compatible;
        }
        elseif( $rabbit_compatible ) {
            return $rabbit_compatible;
        }
        elseif( $dragon_compatible ) {
            return $dragon_compatible;
        }
        elseif( $snake_compatible ) {
            return $snake_compatible;
        }
        elseif( $horse_compatible ) {
            return $horse_compatible;
        }
        elseif( $sheep_compatible ) {
            return $sheep_compatible;
        }
        elseif( $monkey_compatible ) {
            return $monkey_compatible;
        }
        elseif( $rooster_compatible ) {
            return $rooster_compatible;
        }
        elseif( $dod_compatible ) {
            return $dod_compatible;
        }
        elseif( $pig_compatible ) {
            return $pig_compatible;
        }
    }

    /**
     * Check compatibility for rat sign
     *
     * @param string $user_sign, $pet_sign
     * @return Response
     */
    public function ratCompatibility( $user_sign, $pet_sign )
    {
        if($user_sign == 'Rat' && $pet_sign == 'Rat') {
            return 'Well Suited';
        }
        elseif($user_sign == 'Rat' && $pet_sign == 'Ox') {
            return 'Happy & Steady';
        }
        elseif($user_sign == 'Rat' && $pet_sign == 'Tiger') {
            return 'Hot & Cold';
        }
        elseif($user_sign == 'Rat' && $pet_sign == 'Rabbit') {
            return 'May Argue';
        }
        elseif($user_sign == 'Rat' && $pet_sign == 'Dragon') {
            return 'Suitable Match';
        }
        elseif($user_sign == 'Rat' && $pet_sign == 'Snake') {
            return 'Volatile Pair';
        }
        elseif($user_sign == 'Rat' && $pet_sign == 'Horse') {
            return 'Poor Match';
        }
        elseif($user_sign == 'Rat' && $pet_sign == 'Sheep') {
            return 'Poor Match';
        }
        elseif($user_sign == 'Rat' && $pet_sign == 'Monkey') {
            return 'Very Lively';
        }
        elseif($user_sign == 'Rat' && $pet_sign == 'Rooster') {
            return 'Need Effort';
        }
        elseif($user_sign == 'Rat' && $pet_sign == 'Dog') {
            return 'Lively Pair';
        }
        elseif($user_sign == 'Rat' && $pet_sign == 'Pig') {
            return 'Quite Charming';
        }
    }

    /**
     * Check compatibility for ox sign
     *
     * @param string $user_sign, $pet_sign
     * @return Response
     */
    private function oxCompatibility( $user_sign, $pet_sign )
    {
        if($user_sign == 'Ox' && $pet_sign == 'Rat') {
            return 'Happy & Steady';
        }
        elseif($user_sign == 'Ox' && $pet_sign == 'Ox') {
            return 'Caring Pair';
        }
        elseif($user_sign == 'Ox' && $pet_sign == 'Tiger') {
            return 'Ups & Downs';
        }
        elseif($user_sign == 'Ox' && $pet_sign == 'Rabbit') {
            return 'Ups & Downs';
        }
        elseif($user_sign == 'Ox' && $pet_sign == 'Dragon') {
            return 'Tricky Pair';
        }
        elseif($user_sign == 'Ox' && $pet_sign == 'Snake') {
            return 'Support each Other';
        }
        elseif($user_sign == 'Ox' && $pet_sign == 'Horse') {
            return 'Difficult Match';
        }
        elseif($user_sign == 'Ox' && $pet_sign == 'Sheep') {
            return 'Steer Clear';
        }
        elseif($user_sign == 'Ox' && $pet_sign == 'Monkey') {
            return 'Loving Pair';
        }
        elseif($user_sign == 'Ox' && $pet_sign == 'Rooster') {
            return 'Good Match';
        }
        elseif($user_sign == 'Ox' && $pet_sign == 'Dog') {
            return 'Can be Good';
        }
        elseif($user_sign == 'Ox' && $pet_sign == 'Pig') {
            return 'Need Effort';
        }
    }

    /**
     * Check compatibility for tiger sign
     *
     * @param string $user_sign, $pet_sign
     * @return Response
     */
    private function tigerCompatibility( $user_sign, $pet_sign )
    {
        if($user_sign == 'Tiger' && $pet_sign == 'Rat') {
            return 'Hot & Cold';
        }
        elseif($user_sign == 'Tiger' && $pet_sign == 'Ox') {
            return 'Need Effort';
        }
        elseif($user_sign == 'Tiger' && $pet_sign == 'Tiger') {
            return 'Happy & Steady';
        }
        elseif($user_sign == 'Tiger' && $pet_sign == 'Rabbit') {
            return 'Can be Good';
        }
        elseif($user_sign == 'Tiger' && $pet_sign == 'Dragon') {
            return 'Require Patience';
        }
        elseif($user_sign == 'Tiger' && $pet_sign == 'Snake') {
            return 'Steer Clear';
        }
        elseif($user_sign == 'Tiger' && $pet_sign == 'Horse') {
            return 'Good Ally';
        }
        elseif($user_sign == 'Tiger' && $pet_sign == 'Sheep') {
            return 'Can Work Out';
        }
        elseif($user_sign == 'Tiger' && $pet_sign == 'Monkey') {
            return 'Very Rocky';
        }
        elseif($user_sign == 'Tiger' && $pet_sign == 'Rooster') {
            return 'Hard Work';
        }
        elseif($user_sign == 'Tiger' && $pet_sign == 'Dog') {
            return 'Strong Ally';
        }
        elseif($user_sign == 'Tiger' && $pet_sign == 'Pig') {
            return 'Superb Match';
        }
    }

    /**
     * Check compatibility for rabbit sign
     *
     * @param string $user_sign, $pet_sign
     * @return Response
     */
    private function rabbitCompatibility( $user_sign, $pet_sign )
    {
        if($user_sign == 'Rabbit' && $pet_sign == 'Rat') {
            return 'May Argue';
        }
        elseif($user_sign == 'Rabbit' && $pet_sign == 'Ox') {
            return 'Ups & Downs';
        }
        elseif($user_sign == 'Rabbit' && $pet_sign == 'Tiger') {
            return 'Can be Good';
        }
        elseif($user_sign == 'Rabbit' && $pet_sign == 'Rabbit') {
            return 'Truly Loving';
        }
        elseif($user_sign == 'Rabbit' && $pet_sign == 'Dragon') {
            return 'Hard Going';
        }
        elseif($user_sign == 'Rabbit' && $pet_sign == 'Snake') {
            return 'Hard Work';
        }
        elseif($user_sign == 'Rabbit' && $pet_sign == 'Horse') {
            return 'Can Work Out';
        }elseif($user_sign == 'Rabbit' && $pet_sign == 'Sheep') {
            return 'Great Fun';
        }
        elseif($user_sign == 'Rabbit' && $pet_sign == 'Monkey') {
            return 'Need Effort';
        }
        elseif($user_sign == 'Rabbit' && $pet_sign == 'Rooster') {
            return 'Many Conflicts';
        }
        elseif($user_sign == 'Rabbit' && $pet_sign == 'Dog') {
            return 'Truly Loving';
        }
        elseif($user_sign == 'Rabbit' && $pet_sign == 'Pig') {
            return 'Superb Match';
        }
    }

    /**
     * Check compatibility for dragon sign
     *
     * @param string $user_sign, $pet_sign
     * @return Response
     */
    private function dragonCompatibility( $user_sign, $pet_sign )
    {
        if($user_sign == 'Dragon' && $pet_sign == 'Rat') {
            return 'Suitable Match';
        }
        elseif($user_sign == 'Dragon' && $pet_sign == 'Ox') {
            return 'Tricky Pair';
        }
        elseif($user_sign == 'Dragon' && $pet_sign == 'Tiger') {
            return 'Require Patience';
        }elseif($user_sign == 'Dragon' && $pet_sign == 'Rabbit') {
            return 'Hard Going';
        }
        elseif($user_sign == 'Dragon' && $pet_sign == 'Dragon') {
            return 'Good Match';
        }
        elseif($user_sign == 'Dragon' && $pet_sign == 'Snake') {
            return 'Can be Good';
        }
        elseif($user_sign == 'Dragon' && $pet_sign == 'Horse') {
            return 'Lively Pair';
        }
        elseif($user_sign == 'Dragon' && $pet_sign == 'Sheep') {
            return 'Hot & Cold';
        }
        elseif($user_sign == 'Dragon' && $pet_sign == 'Monkey') {
            return 'Good Pair';
        }
        elseif($user_sign == 'Dragon' && $pet_sign == 'Rooster') {
            return 'Wonderful Pair';
        }
        elseif($user_sign == 'Dragon' && $pet_sign == 'Dog') {
            return 'Not Suitable';
        }
        elseif($user_sign == 'Dragon' && $pet_sign == 'Pig') {
            return 'Hard Work';
        }
    }

    /**
     * Check compatibility for snake sign
     *
     * @param string $user_sign, $pet_sign
     * @return Response
     */
    private function snakeCompatibility( $user_sign, $pet_sign )
    {
        if($user_sign == 'Snake' && $pet_sign == 'Rat') {
            return 'Volatile Pair';
        }
        elseif($user_sign == 'Snake' && $pet_sign == 'Ox') {
            return 'Support each Other';
        }
        elseif($user_sign == 'Snake' && $pet_sign == 'Tiger') {
            return 'Steer Clear';
        }
        elseif($user_sign == 'Snake' && $pet_sign == 'Rabbit') {
            return 'Hard Work';
        }
        elseif($user_sign == 'Snake' && $pet_sign == 'Dragon') {
            return 'Can be Bood';
        }
        elseif($user_sign == 'Snake' && $pet_sign == 'Snake') {
            return 'Wonderful Pair';
        }
        elseif($user_sign == 'Snake' && $pet_sign == 'Horse') {
            return 'Tricky Pair';
        }
        elseif($user_sign == 'Snake' && $pet_sign == 'Sheep') {
            return 'Need Effort';
        }
        elseif($user_sign == 'Snake' && $pet_sign == 'Monkey') {
            return 'Long Lasting Match';
        }
        elseif($user_sign == 'Snake' && $pet_sign == 'Rooster') {
            return 'Wonderful Pair';
        }
        elseif($user_sign == 'Snake' && $pet_sign == 'Dog') {
            return 'Quite Charming';
        }
        elseif($user_sign == 'Snake' && $pet_sign == 'Pig') {
            return 'Not Matching';
        }
    }

    /**
     * Check compatibility for horse sign
     *
     * @param string $user_sign, $pet_sign
     * @return Response
     */
    private function horseCompatibility( $user_sign, $pet_sign )
    {
        if($user_sign == 'Horse' && $pet_sign == 'Rat') {
            return 'Poor Match';
        }
        elseif($user_sign == 'Horse' && $pet_sign == 'Ox') {
            return 'Difficult Match';
        }
        elseif($user_sign == 'Horse' && $pet_sign == 'Tiger') {
            return 'Good Ally';
        }
        elseif($user_sign == 'Horse' && $pet_sign == 'Rabbit') {
            return 'Can Work Out';
        }
        elseif($user_sign == 'Horse' && $pet_sign == 'Dragon') {
            return 'Lively Pair';
        }
        elseif($user_sign == 'Horse' && $pet_sign == 'Snake') {
            return 'Tricky Pair';
        }
        elseif($user_sign == 'Horse' && $pet_sign == 'Horse') {
            return 'Caring Sharing';
        }
        elseif($user_sign == 'Horse' && $pet_sign == 'Sheep') {
            return 'Superb Match';
        }
        elseif($user_sign == 'Horse' && $pet_sign == 'Monkey') {
            return 'Quite Hurtful';
        }
        elseif($user_sign == 'Horse' && $pet_sign == 'Rooster') {
            return 'Can be Good';
        }
        elseif($user_sign == 'Horse' && $pet_sign == 'Dog') {
            return 'Good Ally';
        }
        elseif($user_sign == 'Horse' && $pet_sign == 'Pig') {
            return 'Ups & Downs';
        }
    }

    /**
     * Check compatibility for sheep sign
     *
     * @param string $user_sign, $pet_sign
     * @return Response
     */
    private function sheepCompatibility( $user_sign, $pet_sign )
    {
        if($user_sign == 'Sheep' && $pet_sign == 'Rat') {
            return 'Poor Match';
        }
        elseif($user_sign == 'Sheep' && $pet_sign == 'Ox') {
            return 'Steer Clear';
        }
        elseif($user_sign == 'Sheep' && $pet_sign == 'Tiger') {
            return 'Can Work Out';
        }
        elseif($user_sign == 'Sheep' && $pet_sign == 'Rabbit') {
            return 'Great Fun';
        }
        elseif($user_sign == 'Sheep' && $pet_sign == 'Dragon') {
            return 'Hot & Cold';
        }
        elseif($user_sign == 'Sheep' && $pet_sign == 'Snake') {
            return 'Require Effort';
        }
        elseif($user_sign == 'Sheep' && $pet_sign == 'Horse') {
            return 'Superb Match';
        }
        elseif($user_sign == 'Sheep' && $pet_sign == 'Sheep') {
            return 'Long Lasting';
        }
        elseif($user_sign == 'Sheep' && $pet_sign == 'Monkey') {
            return 'Can Work Out';
        }
        elseif($user_sign == 'Sheep' && $pet_sign == 'Rooster') {
            return 'Hard Work';
        }
        elseif($user_sign == 'Sheep' && $pet_sign == 'Dog') {
            return 'Tricky Pair';
        }
        elseif($user_sign == 'Sheep' && $pet_sign == 'Pig') {
            return 'Support each Other';
        }
    }

    /**
     * Check compatibility for monkey sign
     *
     * @param string $user_sign, $pet_sign
     * @return Response
     */
    private function monkeyCompatibility( $user_sign, $pet_sign )
    {
        if($user_sign == 'Monkey' && $pet_sign == 'Rat') {
            return 'Very Lively';
        }
        elseif($user_sign == 'Monkey' && $pet_sign == 'Ox') {
            return 'Loving Pair';
        }
        elseif($user_sign == 'Monkey' && $pet_sign == 'Tiger') {
            return 'Very Rocky';
        }
        elseif($user_sign == 'Monkey' && $pet_sign == 'Rabbit') {
            return 'Need Effort';
        }
        elseif($user_sign == 'Monkey' && $pet_sign == 'Dragon') {
            return 'Good Pair';
        }
        elseif($user_sign == 'Monkey' && $pet_sign == 'Snake') {
            return 'Long Lasting Match';
        }
        elseif($user_sign == 'Monkey' && $pet_sign == 'Horse') {
            return 'Quite Hurtful';
        }
        elseif($user_sign == 'Monkey' && $pet_sign == 'Sheep') {
            return 'Can Work Out';
        }
        elseif($user_sign == 'Monkey' && $pet_sign == 'Monkey') {
            return 'Full of laughter';
        }
        elseif($user_sign == 'Monkey' && $pet_sign == 'Rooster') {
            return 'Hard Going';
        }
        elseif($user_sign == 'Monkey' && $pet_sign == 'Dog') {
            return 'Volatile Pair';
        }
        elseif($user_sign == 'Monkey' && $pet_sign == 'Pig') {
            return 'Poles Apart';
        }
    }

    /**
     * Check compatibility for rooster sign
     *
     * @param string $user_sign, $pet_sign
     * @return Response
     */
    private function roosterCompatibility( $user_sign, $pet_sign )
    {
        if($user_sign == 'Rooster' && $pet_sign == 'Rat') {
            return 'Need Effort';
        }
        else if($user_sign == 'Rooster' && $pet_sign == 'Ox') {
            return 'Good Match';
        }
        else if($user_sign == 'Rooster' && $pet_sign == 'Tiger') {
            return 'Hard Work';
        }
        else if($user_sign == 'Rooster' && $pet_sign == 'Rabbit') {
            return 'Many Conflicts';
        }
        else if($user_sign == 'Rooster' && $pet_sign == 'Dragon') {
            return 'Wonderful Pair';
        }
        else if($user_sign == 'Rooster' && $pet_sign == 'Snake') {
            return 'Wonderful Pair';
        }
        else if($user_sign == 'Rooster' && $pet_sign == 'Horse') {
            return 'Can be Good';
        }
        else if($user_sign == 'Rooster' && $pet_sign == 'Sheep') {
            return 'Hard Work';
        }
        else if($user_sign == 'Rooster' && $pet_sign == 'Monkey') {
            return 'Hard Going';
        }
        else if($user_sign == 'Rooster' && $pet_sign == 'Rooster') {
            return 'Intense Passion';
        }
        else if($user_sign == 'Rooster' && $pet_sign == 'Dog') {
            return 'Poor Match';
        }
        else if($user_sign == 'Rooster' && $pet_sign == 'Pig') {
            return 'Require Effort';
        }
    }

    /**
     * Check compatibility for dog sign
     *
     * @param string $user_sign, $pet_sign
     * @return Response
     */
    private function dogCompatibility( $user_sign, $pet_sign )
    {
        if($user_sign == 'Dog' && $pet_sign == 'Rat') {
            return 'Lively Pair';
        }
        elseif($user_sign == 'Dog' && $pet_sign == 'Ox') {
            return 'Can be Good';
        }
        elseif($user_sign == 'Dog' && $pet_sign == 'Tiger') {
            return 'Strong Ally';
        }
        elseif($user_sign == 'Dog' && $pet_sign == 'Rabbit') {
            return 'Truly Loving';
        }
        elseif($user_sign == 'Dog' && $pet_sign == 'Dragon') {
            return 'Not Suitable';
        }
        elseif($user_sign == 'Dog' && $pet_sign == 'Snake') {
            return 'Quite Charming';
        }
        elseif($user_sign == 'Dog' && $pet_sign == 'Horse') {
            return 'Good Ally';
        }
        elseif($user_sign == 'Dog' && $pet_sign == 'Sheep') {
            return 'Tricky Pair';
        }
        elseif($user_sign == 'Dog' && $pet_sign == 'Monkey') {
            return 'Volatile Pair';
        }
        elseif($user_sign == 'Dog' && $pet_sign == 'Rooster') {
            return 'Poor Match';
        }
        elseif($user_sign == 'Dog' && $pet_sign == 'Dog') {
            return 'Loyal Loving';
        }
        elseif($user_sign == 'Dog' && $pet_sign == 'Pig') {
            return 'Ups & Downs';
        }
    }

    /**
     * Check compatibility for pig sign
     *
     * @param string $user_sign, $pet_sign
     * @return Response
     */
    private function pigCompatibility( $user_sign, $pet_sign )
    {
        if($user_sign == 'Pig' && $pet_sign == 'Rat') {
            return 'Quite Charming';
        }
        elseif($user_sign == 'Pig' && $pet_sign == 'Ox') {
            return 'Need Effort';
        }
        elseif($user_sign == 'Pig' && $pet_sign == 'Tiger') {
            return 'Superb Match';
        }
        elseif($user_sign == 'Pig' && $pet_sign == 'Rabbit') {
            return 'Superb Match';
        }
        elseif($user_sign == 'Pig' && $pet_sign == 'Dragon') {
            return 'Hard Work';
        }
        elseif($user_sign == 'Pig' && $pet_sign == 'Snake') {
            return 'Not Matching';
        }
        elseif($user_sign == 'Pig' && $pet_sign == 'Horse') {
            return 'Ups & Downs';
        }
        elseif($user_sign == 'Pig' && $pet_sign == 'Sheep') {
            return 'Support each Other';
        }
        elseif($user_sign == 'Pig' && $pet_sign == 'Monkey') {
            return 'Poles Apart';
        }
        elseif($user_sign == 'Pig' && $pet_sign == 'Rooster') {
            return 'Require Effort';
        }
        elseif($user_sign == 'Pig' && $pet_sign == 'Dog') {
            return 'Ups & Downs';
        }
        elseif($user_sign == 'Pig' && $pet_sign == 'Pig') {
            return 'Intense Passion';
        }
    }
}

$sign = new CompatibilitySign();

echo $sign->compatible( 'Ox', 'Ox' );
