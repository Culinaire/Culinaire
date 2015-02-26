<?php

/*
 * This file is part of Culinaire
 */

namespace Culinaire\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Validate Command
 */

class ValidateCommand extends Command
{
	protected function configure()
	{
		$this
			->setName('validate')
			->setDescription('Validates a cookbook.json')
			->setHelp("Use this command to say hello.")
			->setDefinition(array(
				new InputArgument('file', InputArgument::OPTIONAL, 'path to cookbook.json file', './cookbook.json')
			))
			->setHelp("The validate command validates a given cookbook.json")
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$file = $input->getArgument('file');

		if(!file_exists($file)) {
			$this->getIO()->writeError('<error>'.$file.' not found.</error>');
			return 1;
		}
		if(!is_readable($file)) {
			$this->getIO()->writeError('<error>'.$file.' is not readable.</error>');
			return 1;
		}

		/**
		 * Basic Validation
		 * @todo advanced validation
		 */

		$retriever = new \JsonSchema\Uri\UriRetriever;
		$schema = $retriever->retrieve("file://". realpath('res/culinaire-cookbook-schema.json'));
		//echo $schema;
		$data = json_decode(file_get_contents($file));

		$refResolver = new \JsonSchema\RefResolver($retriever);
		$refResolver->resolve($schema, 'file://'.__DIR__);

		$validator = new \JsonSchema\Validator();
		$validator->check($data, $schema);

		if ($validator->isValid()) {
			echo "cookbook.json is valid.\n";
		} else {
			echo "JSON does not validate. Violations:\n";
			foreach ($validator->getErrors() as $error) {
				echo sprintf("[%s] %s\n", $error['property'], $error['message']);
			}
		}
	}
}

