<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Log;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:backupdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup Database';

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
        // exec method
        $host = config('database.connections.mysql.host');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $database = config('database.connections.mysql.database');

        Log::info("/Applications/XAMPP/xamppfiles/bin/mysqldump -h {$host} -u {$username} {$database}");

        exec("/Applications/XAMPP/xamppfiles/bin/mysqldump -h {$host} -u {$username} {$database} > daily_backup.sql");
    }
}
