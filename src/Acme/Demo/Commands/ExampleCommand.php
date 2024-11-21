<?php

namespace flight\commands;

class ExampleCommand extends AbstractBaseCommand
{
    /**
     * Construct
     *
     * @param array<string,mixed> $config JSON config from .runway-config.json
     */
    public function __construct(array $config)
    {
        parent::__construct('example:example-command', 'This is a sample command.', $config);
    }

    /**
     * Executes the function
     *
     * @return void
     */
    public function execute()
    {
        $io = $this->app()->io();

        $io->info('This is an example... ');

        $io->info('remember to pass `true` in the $io functions to add a new line at the end of the message.', true);

        // ... do something here ...

        $io->ok('Example completed!', true);
    }
}