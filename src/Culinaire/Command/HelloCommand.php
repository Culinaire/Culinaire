<?php

/**
 * This file is part of Culinaire
 */

namespace Culinaire\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
	protected function configure()
	{
		$this
			->setName('hello')
			->setDescription('Say hello')
			->setHelp("Use this command to say hello.")
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln('Hello World');
	}
}