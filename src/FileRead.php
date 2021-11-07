<?php

namespace AhmetBarut\Exception;

class FileRead
{

    /**
     * stored error file
     *
     * @var string
     */
    private $file;

  /*   private $startReadingLine = 1;

    private $stopReadingLine = -1; */

    /**
     * Stored error file contents
     *
     * @var array
     */
    private array $content = [];

    public function __construct($file)
    {
        $this->file = $file;
    }

/*     public function setStartReadLine(int $line)
    {
        $this->startReadingLine = $line;
        return $this;
    }

    public function setStopReadLine(int $line)
    {
        $this->stopReadingLine = $line;
        return $this;
    } */

    /**
     * Read file
     *
     * @return static
     */
    public function readAll()
    {
        $fopen = fopen($this->file, 'r');

        while (!feof($fopen)) {
            $this->content[] = fgets($fopen);
        }
        fclose($fopen);

        return $this;
    }

    /**
     * Get count file line.
     *
     * @return int
     */
    public function count()
    {
        return count($this->content);
    }

    /**
     * Get file content
     *
     * @return string
     */
    public function getContent()
    {
        return trim(htmlspecialchars(implode('', $this->content)));
    }
}
