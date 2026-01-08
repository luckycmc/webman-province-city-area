<?php

namespace Luckycmc\WebmanProvinceCityArea\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Luckycmc\WebmanProvinceCityArea\Models\ProvinceCityArea as PCAModel;

class ClearData extends Command
{
    protected static $defaultName = 'pca:clearData';
    protected static $defaultDescription = '清空province_city_area表中省市县数据';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('开始清空数据');
        PCAModel::query()->truncate();
        $output->writeln('数据已清空');
        return self::SUCCESS;
    }
}