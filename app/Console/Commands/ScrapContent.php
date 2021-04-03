<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class ScrapContent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scraper:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for Scrapping the content';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client();
        // Go to the symfony.com website
        $crawler = $client->request('GET', 'https://news.sabay.com.kh/');

        // $client->getClient()->setDefaultOption('config/curl/'.CURLOPT_TIMEOUT, 60);
        // Get the latest post in this category and display the titles
        //get all menu link on page
        $crawler->filter('ul.nav > li > a')->each(function ($node) {
            print $node->attr('href')."\n";
        });
        
    }
}
