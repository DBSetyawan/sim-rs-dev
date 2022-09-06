<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EnsureQueueListenerIsRunning extends Command
{
    /**
     * @Author daniel budi setyawan
     * queue back end server otp.
     * @MIT Lincense
     */
    protected $signature = 'workers:webhooks';
    protected $pidFile;
    protected $description = 'Memastikan proses berjalan diserver.';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * ---| build progress kode .pid
     */
    public function handle()
    {
        $this->pidFile = __DIR__ . '/queue.pid';

        if (! $this->isWorkerRunning()) {
            $this->comment('Queue worker mulai dikerjakan.');
            $pid = $this->startWorker();
            $this->saveWorkerPID($pid);
        }
        $this->comment('Queue worker sedang Bekerja.');
    }

    /**
     * ---| pengecekan custom command queue di system
     */
    private function isWorkerRunning(): bool
    {
        if (! $pid = $this->getLastWorkerPID()) {
            return false;
        }
        $process = exec("ps -p {$pid} -opid=,command=");
        $processIsQueueWorker = str_contains($process, 'queue:work');

        return $processIsQueueWorker;
    }
    
    /**
     * ---| simpan ID PID pekerjaan di system.
     */
    private function saveWorkerPID($pid)
    {
        file_put_contents($this->pidFile, $pid);
    }

    /**
     * ---| cari PID pekerjaan terakhir
     */
    private function getLastWorkerPID()
    {
        if (! file_exists($this->pidFile)) {
            return false;
        }

        return file_get_contents($this->pidFile);
    }

    private function saveQueueListenerPID($pid)
    {
        file_put_contents('/queue.pid', $pid);
    }
    
    /**
     * ---| Mulai pekerjaan di system local
     */
    private function startWorker()
    {

        $command = 'php ' . base_path() . '/artisan queue:work --queue=high,default,low --memory=500 --tries=3 --env=production --timeout=360 > /dev/null & echo $!';
        $pid = exec($command);

        return $pid;
    }
}
