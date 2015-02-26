<?php

/**
 * This file is part of Culinaire
 */

namespace Culinaire\Command;

use Herrera\Phar\Update\Manager;
use Herrera\Phar\Update\Manifest;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SelfUpdateCommand extends Command
{
	const MANIFEST_FILE = "http://culinaire.github.io/Culinaire/manifest.json";

	protected function configure()
	{
		$this
			->setName('self-update')
			->setDescription('Updates culinaire.phar to the latest version.')
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$manager = new Manager(Manifest::loadFile(self::MANIFEST_FILE));
		$manager->update($this->getApplication()->getVersion(), true);
	}

}







