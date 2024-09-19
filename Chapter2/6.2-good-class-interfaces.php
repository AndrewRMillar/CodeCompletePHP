<?php

declare(strict_types=1);

use Fully\Qualified\ClassName\TaxId;
use Fully\Qualified\ClassName\JobClassification;
use Fully\Qualified\ClassName\Fullname;

class Employee {
    public function __construct(
        private Fullname $name, 
        private string $address, 
        private string $workPhone, 
        private string $homePhone,
        private TaxId $taxIdNumber,
        private JobClassification $jobClass
    ) {
    }

    // Public methods (getters)
    public function getName(): Fullname
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getWorkPhone(): string
    {
        return $this->workPhone;
    }

    public function getHomePhone(): string
    {
        return $this->homePhone;
    }

    public function getJobClassification(): JobClassification
    {
        return $this->jobClass;
    }

    public function getTaxIdNumber(): TaxId
    {
        return $this->taxId;
    }
}

