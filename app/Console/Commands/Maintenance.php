<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Maintenance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'maintenance {val}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Activate or deactivate maintenance mode';

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
     * @return mixed
     */
    public function handle()
    {
        $argument = $this->argument('val');
        if ($argument == 'up') {
            $this->info('Migrating database, please wait...');
            \Artisan::call('migrate --seed');
            \Artisan::call('up');
            $this->info('The site is now live.');
        } elseif ($argument == 'down') {
            $this->info('Getting back database, please wait...');
            \Artisan::call('migrate:rollback');
            $this->info('Setting maintenance mode...');
            \Artisan::call('down');
            $this->info('The site is now in maintenance.');
        } else {
            $this->error("The only argument is 'up' and 'down'");
        }
    }
}
