<?php

declare(strict_types=1);

use Fully\Qualified\ClassName\Command;
use Fully\Qualified\ClassName\Report;

class Program {
    public function initializeCommandStack(): void
    {
    }

    public function pushCommand($command): void
    {
    }

    public function popCommand(): Command 
    {
    }

    public function shutdownCommandStack(): void
    {
    }

    public function initializeReportFormatting(): void
    {
    }

    public function formatReport(Report $report): void
    {
    }

    public function printReport(Report $report): void
    {
    }

    public function initializeGlobalData(): void
    {
    }

    public function shutdownGlobalData(): void
    {
    }

}
