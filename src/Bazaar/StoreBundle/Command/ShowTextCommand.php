<?php

namespace Bazaar\StoreBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DomCrawler\Crawler;

class ShowTextCommand extends Command
{
    protected function configure()
    {
        $this
        // the name of the command (the part after "bin/console")
        ->setName('bazaar:show-text')

        // the short description shown while running "php bin/console list"
        ->setDescription('Shows some text')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('This command allows you to display some text...')
    ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Some text!');
        
        $url = "https://www.academiebeaute.com/fr/maquillage/nos-gammes/maquillage-teint/maquillage-teint/fond-de-teint-soin-regenerant-ivoire-01.html";
        $html = file_get_contents($url);
        
        $css = '.product-shop .price';
        $crawler  = new Crawler($html);
        try{
            $price    = $crawler->filter($css)->text();
            $output->writeln('Price: '. $price);
        } catch (\InvalidArgumentException $notFoundException){
            $output->writeln('Price not found');
        }
        
        
    }
}
