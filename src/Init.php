<?php

namespace AhmetBarut\Exception;

use Throwable;

class Init
{
    /**
     * store exception
     *
     * @var Throwable
     */
    private Throwable $exception;

    /**
     * Store file read
     *
     * @var FileRead
     */
    private FileRead $fileRead;
    
    /**
     * store error line
     *
     * @var int
     */
    private $errorLine;

    // private $startLine;
    // private $endLine;

    /**
     * Store exception error message
     *
     * @var string
     */
    private $message;

    /**
     * Store file path
     *
     * @var string
     */
    private $file;

    public function __construct(Throwable $exception)
    {
        $this->exception = $exception;
        
        $this->fileRead = new FileRead($exception->getFile());

        $this->fileRead->readAll();
    
 /*        $this->fileRead->setStartReadLine($exception->getLine() - 10);

        if (($exception->getLine() + 10) < $this->fileRead->count()) {
            $this->fileRead->setStopReadLine($exception->getLine() + 10);
        } */
    }

    /**
     * Set error line
     *
     * @return void
     */
    public function setLine()
    {
        $this->errorLine = $this->exception->getLine();
        $this->startLine = $this->exception->getLine() > 10 ? $this->exception->getLine() - 10 : $this->exception->getLine();
    }

    /**
     * set error exception file path
     *
     * @return void
     */
    public function setFile()
    {
        $this->file = $this->exception->getFile();
    }

    /**
     * set error message
     *
     * @return void
     */
    public function setMessage()
    {
        $this->message = $this->exception->getMessage();
    }


    /**
     * Run and show error
     *
     * @return void
     */
    public function run()
    {
        $this->setLine();
        $this->setMessage();
        $this->setFile();

        extract([
            'line' => $this->errorLine,
            'file' => $this->file,
            'message' => $this->message,
            'content' => $this->fileRead->getContent(),
        ]);

        include dirname(__DIR__) . '/static/exception.php';
    }
}
