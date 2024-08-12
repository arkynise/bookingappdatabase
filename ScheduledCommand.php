<?php

namespace App\Entity;

use App\Repository\ScheduledCommandRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ScheduledCommandRepository::class)]
class ScheduledCommand
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'ID_SCHEDULED_COMMAND')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $NAME = null;

    #[ORM\Column(length: 255)]
    private ?string $COMMAND = null;

    #[ORM\Column(length: 255)]
    private ?string $ARGUMENTS = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CRON_EXPRESSION = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $DH_LAST_EXECUTION = null;

    #[ORM\Column(nullable: true)]
    private ?int $LAST_RETURN_CODE = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $LOG_FILE = null;

    #[ORM\Column]
    private ?int $PRIORITY = null;

    #[ORM\Column]
    private ?bool $B_EXECUTE_IMMEDIATELY = null;

    #[ORM\Column]
    private ?bool $B_DISABLED = null;

    #[ORM\Column]
    private ?bool $B_LOCKED = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNAME(): ?string
    {
        return $this->NAME;
    }

    public function setNAME(string $NAME): static
    {
        $this->NAME = $NAME;

        return $this;
    }

    public function getCOMMAND(): ?string
    {
        return $this->COMMAND;
    }

    public function setCOMMAND(string $COMMAND): static
    {
        $this->COMMAND = $COMMAND;

        return $this;
    }

    public function getARGUMENTS(): ?string
    {
        return $this->ARGUMENTS;
    }

    public function setARGUMENTS(string $ARGUMENTS): static
    {
        $this->ARGUMENTS = $ARGUMENTS;

        return $this;
    }

    public function getCRONEXPRESSION(): ?string
    {
        return $this->CRON_EXPRESSION;
    }

    public function setCRONEXPRESSION(?string $CRON_EXPRESSION): static
    {
        $this->CRON_EXPRESSION = $CRON_EXPRESSION;

        return $this;
    }

    public function getDHLASTEXECUTION(): ?\DateTimeInterface
    {
        return $this->DH_LAST_EXECUTION;
    }

    public function setDHLASTEXECUTION(\DateTimeInterface $DH_LAST_EXECUTION): static
    {
        $this->DH_LAST_EXECUTION = $DH_LAST_EXECUTION;

        return $this;
    }

    public function getLASTRETURNCODE(): ?int
    {
        return $this->LAST_RETURN_CODE;
    }

    public function setLASTRETURNCODE(?int $LAST_RETURN_CODE): static
    {
        $this->LAST_RETURN_CODE = $LAST_RETURN_CODE;

        return $this;
    }

    public function getLOGFILE(): ?string
    {
        return $this->LOG_FILE;
    }

    public function setLOGFILE(?string $LOG_FILE): static
    {
        $this->LOG_FILE = $LOG_FILE;

        return $this;
    }

    public function getPRIORITY(): ?int
    {
        return $this->PRIORITY;
    }

    public function setPRIORITY(int $PRIORITY): static
    {
        $this->PRIORITY = $PRIORITY;

        return $this;
    }

    public function isBEXECUTEIMMEDIATELY(): ?bool
    {
        return $this->B_EXECUTE_IMMEDIATELY;
    }

    public function setBEXECUTEIMMEDIATELY(bool $B_EXECUTE_IMMEDIATELY): static
    {
        $this->B_EXECUTE_IMMEDIATELY = $B_EXECUTE_IMMEDIATELY;

        return $this;
    }

    public function isBDISABLED(): ?bool
    {
        return $this->B_DISABLED;
    }

    public function setBDISABLED(bool $B_DISABLED): static
    {
        $this->B_DISABLED = $B_DISABLED;

        return $this;
    }

    public function isBLOCKED(): ?bool
    {
        return $this->B_LOCKED;
    }

    public function setBLOCKED(bool $B_LOCKED): static
    {
        $this->B_LOCKED = $B_LOCKED;

        return $this;
    }
}
