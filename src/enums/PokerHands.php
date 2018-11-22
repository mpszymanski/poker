<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 16:41
 */

abstract class PokerHands
{
    static $RoyalFlushHand = RoyalFlushHand::class;
    static $StraightFlushHand = StraightFlushHand::class;
    static $QuadsHand = QuadsHand::class;
    static $FullHouseHands = FullHouseHands::class;
    static $FlushHand = FlushHand::class;
    static $StraightHand = StraightHand::class;
    static $ThreeHand = ThreeHand::class;
    static $TwoPairHand = TwoPairHand::class;
    static $PairHand = PairHand::class;
}