<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        Product::create(array(
            'title' => 'Domino',
            'description' => 'Dominoes is a family of tile-based games played with gaming pieces, commonly known as dominoes. Each domino is a rectangular tile, usually with a line dividing its face into two square ends. Each end is marked with a number of spots (also called pips or dots) or is blank. ', 
            'count_in_stock' => '10', 
            'price' => '5.99', 
            'age_recom' => '3+', 
            'image_path' => '1/temp-card-img.png,1/temp-card-img.png,1/temp-card-img.png',
            'category_id' => 2, 
        ));
        Product::create(array(
            'title' => 'Uno',
            'description' => 'UNO makes its return with new exciting features! Match cards by color or value and play action cards to change things up. Race against others to empty your hand before everyone else in Classic play or customize your experience with House Rules. ', 
            'count_in_stock' => '15', 
            'price' => '11.99', 
            'age_recom' => '5+', 
            'image_path' => '1/temp-card-img.png,1/temp-card-img.png,1/temp-card-img.png',
            'category_id' => 3, 
        ));
        Product::create(array(
            'title' => 'Monopoly',
            'description' => 'Monopoly is a multi-player economics-themed board game. In the game, players roll two dice to move around the game board, buying and trading properties and developing them with houses and hotels. Players collect rent from their opponents, aiming to drive them into bankruptcy.', 
            'count_in_stock' => '2', 
            'price' => '44.99', 
            'new_price' => '49.99', 
            'age_recom' => '7+', 
            'image_path' => '1/temp-card-img.png,1/temp-card-img.png,1/temp-card-img.png',
            'category_id' => 1, 
        ));
        Product::create(array(
            'title' => 'Chess',
            'description' => 'Chess is a board game played between two players. It is sometimes called Western chess or international chess to distinguish it from related games such as xiangqi and shogi. ', 
            'count_in_stock' => '56', 
            'price' => '15.99', 
            'age_recom' => '7+', 
            'image_path' => '1/temp-card-img.png,1/temp-card-img.png,1/temp-card-img.png',
            'category_id' => 4, 
        ));
        Product::create(array(
            'title' => 'Scrabble',
            'description' => 'Scrabble is a word game in which two to four players score points by placing tiles, each bearing a single letter, onto a game board divided into a 15×15 grid of squares. The tiles must form words that, in crossword fashion, read left to right in rows or downward in columns and are included in a standard dictionary or lexicon.', 
            'count_in_stock' => '43', 
            'price' => '34.99', 
            'age_recom' => '5+', 
            'image_path' => '1/temp-card-img.png,1/temp-card-img.png,1/temp-card-img.png',
            'category_id' => 5, 
        ));
        Product::create(array(
            'title' => 'Jenga 1',
            'description' => 'Jenga[discuss] is a game of physical skill created by British board game designer and author Leslie Scott and marketed by Hasbro. Players take turns removing one block at a time from a tower constructed of 54 blocks. Each block removed is then placed on top of the tower, creating a progressively more unstable structure.', 
            'count_in_stock' => '0', 
            'price' => '24.99', 
            'age_recom' => '6+', 
            'image_path' => '1/temp-card-img.png,1/temp-card-img.png,1/temp-card-img.png',
            'category_id' => 1, 
        ));
        Product::create(array(
            'title' => 'Jenga 2',
            'description' => 'Jenga[discuss] is a game of physical skill created by British board game designer and author Leslie Scott and marketed by Hasbro. Players take turns removing one block at a time from a tower constructed of 54 blocks. Each block removed is then placed on top of the tower, creating a progressively more unstable structure.', 
            'count_in_stock' => '10', 
            'price' => '26.99', 
            'age_recom' => '6+', 
            'image_path' => '1/temp-card-img.png,1/temp-card-img.png,1/temp-card-img.png',
            'category_id' => 1, 
        ));
        Product::create(array(
            'title' => 'Catan',
            'description' => 'Catan, previously known as The Settlers of Catan or simply Settlers, is a multiplayer board game designed by Klaus Teuber. It was first published in 1995 in Germany by Franckh-Kosmos Verlag (Kosmos) as Die Siedler von Catan. Players take on the roles of settlers, each attempting to build and develop holdings while trading and acquiring resources. Players gain victory points as their settlements grow; the first to reach a set number of victory points, typically 10, wins. ', 
            'count_in_stock' => '10', 
            'price' => '36.99', 
            'age_recom' => '7+', 
            'image_path' => '1/temp-card-img.png,1/temp-card-img.png,1/temp-card-img.png',
            'category_id' => 4, 
        ));
        Product::create(array(
            'title' => 'Saboteur',
            'description' => 'Players take on the role of dwarves. As miners, they are in a mine, hunting for gold. Suddenly, a pick axe swings down and shatters the mine lamp. The saboteur has struck. But which of the players are saboteurs? Will you find the gold, or will the fiendish actions of the saboteurs lead them to it first? After three rounds, the player with the most gold is the winner.', 
            'count_in_stock' => '10', 
            'new_price' => '7.99',
            'price' => '9.99', 
            'age_recom' => '7+', 
            'image_path' => '1/temp-card-img.png,1/temp-card-img.png,1/temp-card-img.png',
            'category_id' => 1, 
        ));
    }
}
