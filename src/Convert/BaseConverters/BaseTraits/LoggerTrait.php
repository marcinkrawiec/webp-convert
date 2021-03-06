<?php

namespace WebPConvert\Convert\BaseConverters\BaseTraits;

trait LoggerTrait
{

    public $logger;

    /**
     * Set logger
     *
     * @param   \WebPConvert\Loggers\BaseLogger $logger (optional)  $logger
     * @return  void
     */
    public function setLogger($logger = null)
    {
        if (!isset($logger)) {
            $logger = new \WebPConvert\Loggers\VoidLogger();
        }
        $this->logger = $logger;
    }

    public function logLn($msg, $style = '')
    {
        $this->logger->logLn($msg, $style);
    }

    public function logLnLn($msg)
    {
        $this->logger->logLnLn($msg);
    }

    public function ln()
    {
        $this->logger->ln();
    }

    public function log($msg)
    {
        $this->logger->log($msg);
    }
}
