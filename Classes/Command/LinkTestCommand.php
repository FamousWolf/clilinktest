<?php

declare(strict_types=1);

namespace Beechit\Clilinktest\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class LinkTestCommand extends Command
{
    protected function configure(): void
    {
        $this->setDescription('Test absolute link');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $view = GeneralUtility::makeInstance(StandaloneView::class);
        $view->setTemplatePathAndFilename('EXT:clilinktest/Resources/Private/Templates/Test.html');

        $output->writeln($view->render());

        return Command::SUCCESS;
    }
}
