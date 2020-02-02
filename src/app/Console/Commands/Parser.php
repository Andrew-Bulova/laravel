<?php

namespace App\Console\Commands;

use App\PublisherModel;
use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;
use App\CityModel as City;
use App\OwnerModel as  Owner;
use Faker;


class Parser extends Command
{
    protected const SITE = 'https://book24.ua/publishers/';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parser:books';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse books from site and filling table';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public static function handle()
    {
        $pages = [self::SITE . '?PAGEN_1=1',
            self::SITE . '?PAGEN_1=2'];
        foreach ($pages as $page) {
            $crawler = new Crawler(file_get_contents($page));
            $rows = $crawler->filter('span[class="item-title"]');
            foreach ($rows as $node) {
                $crawler = new Crawler($node);
                $name = $crawler->text();
                $faker = Faker\Factory::create();
                $publisher = app(PublisherModel::class);
                $publisher->name = $name;
                $publisher->city_id = $faker->randomElement(City::all())->id;
                $publisher->owner_id = $faker->randomElement(Owner::all())->id;
                $publisher->save();

            }
        }

    }
}
